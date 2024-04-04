<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UploadTransactionService;
use App\Services\ValidateUploadFileService;
use App\Services\TransactionService;
use App\Services\CommonService;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use File;
use Log;
use App\Models\Country;
use App\Models\State;
use App\Models\Bank;
use App\Models\Branch;
use App\Models\BranchUser;
use App\Models\TransactionCode;
use App\Models\ChequeSeries;
use App\Models\UploadingData;
use App\Models\PrintRequestCollection;
use App\Models\UploadingDataStatusLog;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use Validator;
use Carbon\Carbon;

class TransactionReportController extends Controller
{
    protected $uploadTransactionService;
    protected $transactionService;
    protected $validateUploadFileService;
    protected $commonService;

    public function __construct(UploadTransactionService $uploadTransactionService,TransactionService $transactionService, ValidateUploadFileService $validateUploadFileService, CommonService $commonService){
        parent::__construct();
        //$this->middleware(['permission:transaction.delete|transaction.filter|transaction.print|transaction.upload|transaction.view']);
        $this->uploadTransactionService = $uploadTransactionService;
        $this->transactionService = $transactionService;
        $this->validateUploadFileService = $validateUploadFileService;
        $this->commonService = $commonService;
    }

    public function index(Request $req){

        return view('reports.printed-detail-report.list');
    }

    // function to get print list
    public function getPrintReportRecordAjax(Request $request){
        
        $records = PrintRequestCollection::whereNotNull('id');
        
        if (!empty($request->start_date)) {
            $startDate = Carbon::createFromFormat('Y-m-d', $request->start_date);
            $records->whereDate('cps_date','>=',$startDate);
        }
        if (!empty($request->end_date)) {
            $endDate = Carbon::createFromFormat('Y-m-d', $request->end_date);
            $records->whereDate('cps_date', '<=', $endDate);
        }
        if(empty($request->start_date) && empty($request->end_date) ) {
            $startDate = Carbon::today()->subDays(30);
            $endDate = Carbon::today();
            
            $records->whereDate('cps_date','>=',$startDate);
            $records->whereDate('cps_date', '<=', $endDate);
            
        }

        $user = Auth::user();
        $user_id = $user->adminid;
        $userBranches = BranchUser::where("user_id",$user_id)->pluck('branch_id')->implode(',');
        $ids = explode(",", $userBranches);

        if($user->roles[0]->name == 'Super Admin' || $user->roles[0]->name == 'Admin') {
            // $records->whereIn('branch_id',$ids)->get();
        } else {
            $records->whereIn('branch_id',$ids)->get();
        }
        
        $records->orderBy('id','desc')->get();

        return DataTables::of($records)
            ->addColumn('action', function ($record) {
                $html = '<a class="btn btn-icon btn-active-light-primary w-30px h-30px" href="javascript:void(0)" onclick=showStatus(' . "'" . $record->id . "'" . ') ><i class="fa fa-circle-info" style="font-weight:normal !important;"></i></a>';
                return $html;
            })
            ->editColumn('created_at', function ($record) {
                return $record->created_at ? with(new \Carbon\Carbon($record->created_at))->format('d-m-Y H:i') : '';
            })
            ->editColumn('updated_at', function ($record) {
                return $record->updated_at ? with(new \Carbon\Carbon($record->updated_at))->format('d-m-Y H:i') : '';
            })
            ->rawColumns(['id','action'])
            ->make(true);

    }

    public function showStatusReport($id) {
        $printRequestCollection = PrintRequestCollection::findOrFail($id);
        
        $printStatusLog = UploadingDataStatusLog::where('unique_no',$printRequestCollection->cps_unique_req)->orderBy('created_at', 'ASC')->get();

        $html = '';

        $html .= '<table class="table align-middle table-row-dashed fs-6 gy-5">
                    <thead class="bg-light">
                        <tr>
                            <th>Status</th>
                            <th>Date</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-700">';
        foreach($printStatusLog as $log){
            $userName = $log->user ? $log->user->username : '-';
            $html .= '
                    <tr>
                        <td>'.$log->status.'</td>
                        <td>'.date('d-m-Y h:i:s A',strtotime($log->created_at)) .'</td>
                        <td>'.$userName.'</td>
                    </tr>';
        }
        $html .= '  </tbody>
                </table>';

        return response()->json([
            'status' => 200,
            'html' => $html,
        ]);

    }

    public function generatePdf(Request $req) {
        $reports = DB::table('tb_print_req_collection')
				->leftJoin('tb_printadmin', 'tb_printadmin.adminid', '=', 'tb_print_req_collection.cps_process_user_id')
				->leftJoin('tb_cps_transactioncodes', 'tb_cps_transactioncodes.transactioncode', '=', 'tb_print_req_collection.cps_tr_code')
				->select('tb_printadmin.username', 'tb_cps_transactioncodes.transactioncodedescription', 'tb_print_req_collection.cps_branchmicr_code', 'tb_print_req_collection.cps_account_no', 'tb_print_req_collection.cps_act_name', 'tb_print_req_collection.cps_no_of_books', 'tb_print_req_collection.cps_book_size', 'tb_print_req_collection.cps_chq_no_from', 'tb_print_req_collection.cps_chq_no_to', 'tb_print_req_collection.cps_date');

		if($req->start_date != ""){
			$reports->whereDate('tb_print_req_collection.cps_date', '>=', date('Y-m-d', strtotime($req->start_date)));
		}else{
			$reports->whereDate('tb_print_req_collection.cps_date', date('Y-m-d'));
		}

		if($req->end_date != ""){
			$reports->whereDate('tb_print_req_collection.cps_date', '<=', date('Y-m-d', strtotime($req->end_date)));
		}

		if($req->branch != ""){
			$reports->where('tb_print_req_collection.cps_branchmicr_code', $req->branch);
		}

		if($req->transaction != ""){
			$reports->where('tb_print_req_collection.cps_tr_code', $req->transaction);
		}
        $reports->get();
        
        
        $pdf = new TCPDF;
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $html = view('reports.printed-report.pdf', compact('reports'))->render();

        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('reports-'.date('dmYhis').'.pdf');
    }

    
}
