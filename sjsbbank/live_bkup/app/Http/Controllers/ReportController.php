<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Reports\PrintedReportServices;
use App\Services\Reports\ReprintedReportServices;
use App\Services\Reports\CustomerReportServices;
use App\Services\Reports\ConsolidateDailyReportServices;
use App\Services\Reports\ConsolidateMonthlyReportServices;
use App\Services\Reports\OutputfileReportServices;
use App\Services\CommonService;
use Yajra\Datatables\Datatables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportPrintedReport;
use App\Exports\ExportConsolidateDailyReport;
use App\Exports\ExportOutputfileReport;
use App\Exports\ExportReprintedReport;
use App\Exports\ExportCustomerReport;
use App\Exports\ExportConsolidateMonthlyReport;
use App\Services\LogService;
use TCPDF;

class ReportController extends Controller
{
    protected $printedReportServices;
    protected $consolidateDailyReportServices;
    protected $consolidateMonthlyReportServices;
    protected $reprintedReportServices;
    protected $customerReportServices;
    protected $outputfileReportServices;
    protected $commonService;
    protected $logService;

    public function __construct(PrintedReportServices $printedReportServices, CommonService $commonService, OutputfileReportServices $outputfileReportServices, ReprintedReportServices $reprintedReportServices, ConsolidateDailyReportServices $consolidateDailyReportServices, CustomerReportServices $customerReportServices, ConsolidateMonthlyReportServices $consolidateMonthlyReportServices, LogService $logService){
        parent::__construct();
        $this->middleware(['permission:report.consolidate-report-daily|report.consolidate-report-daily-excel|report.consolidate-report-daily-pdf|report.consolidate-report-monthly|report.consolidate-report-monthly-excel|report.consolidate-report-monthly-pdf|report.customer|report.customer-excel|report.customer-pdf|report.get-outputfile-excel|report.get-outputfile-via-text|report.outputfile|report.outputfile-via-text|report.printed-report-day-wise|report.printed-report-excel|report.printed-report-pdf|report.printed-report-selected-period|report.reprint|report.reprint-excel|report.reprint-pdf']);
        $this->printedReportServices = $printedReportServices;
        $this->consolidateDailyReportServices = $consolidateDailyReportServices;
        $this->consolidateMonthlyReportServices = $consolidateMonthlyReportServices;
        $this->reprintedReportServices = $reprintedReportServices;
        $this->customerReportServices = $customerReportServices;
        $this->outputfileReportServices = $outputfileReportServices;
        $this->commonService = $commonService;
        $this->logService = $logService;
    }

    // funtion for printed report
    public function printedReportDateWise(Request $req){
        $branches = $this->commonService->getBranch();

        $transactions = $this->commonService->getActiveTransactionCodes();

        return view('reports.printed-report.list', compact('branches', 'transactions'));
    }

    // function for get printed report list
    public function getprintedReportDateWise(Request $req){
        if($req->ajax())
        {
            $printedReport = $this->printedReportServices->getPrintedReport($req);

            return DataTables::of($printedReport)
                    ->addIndexColumn()
                    ->editColumn('cps_date', function ($data) {
                        return date('d-m-Y', strtotime($data->cps_date));
                    })
                    ->editColumn('cps_branchmicr_code', function ($data) {
                        return str_pad($data->cps_branchmicr_code, 3, "0", STR_PAD_LEFT); 
                    })
                    ->toJson();
        }
    }

    // function to generate the printed report pdf
    public function getPdfPrintedReportDateWise(Request $req){
        $reports = $this->printedReportServices->getPrintedReport($req)->get();

        // report log
        $count = count($reports);
        $this->logService->insertLog('tb_print_req_collection', 'Printed Report For The Day', '', 'Download pdf', [], [], "Total $count Record Download From Printed Report");
        // end of report log

        $pdf = new TCPDF;
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $html = view('reports.printed-report.pdf', compact('reports'))->render();

        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('reports-'.date('dmYhis').'.pdf');
    }

    // function to generate the printed report excel
    public function getExcelPrintedReportDateWise(Request $req){
        $reports = $this->printedReportServices->getPrintedReport($req)->get();

        // report log
        $count = count($reports);
        $this->logService->insertLog('tb_print_req_collection', 'Printed Report', '', 'Export Excel', [], [], "Total $count Record Export From Printed Report");
        // end of report log

        return Excel::download(new ExportPrintedReport($reports), 'printed-report-'.date('d-m-Y').'.xlsx');
    }
    // End of funtion for printed report


    // function for output file
    public function outputfile(Request $req){
        $branches = $this->commonService->getBranch();

        $transactions = $this->commonService->getActiveTransactionCodes();

        return view('reports.outputfile.list', compact('branches', 'transactions'));
    }

    // funtion to get output list
    public function getOutputfile(Request $req){
        if($req->ajax())
        {
            $outputfile = $this->outputfileReportServices->getOutputfileReport($req);

            return DataTables::of($outputfile)
                    ->addIndexColumn()
                    ->editColumn('cps_date', function ($data) {
                        return date('d-m-Y', strtotime($data->cps_date));
                    })
                    ->toJson();
        }
    }

    // funtion to generate output file txt formate
    public function getTextOutputfile(Request $req){
        $reports = $this->outputfileReportServices->getOutputfileReport($req)->get();

        // report log
        $count = count($reports);
        $this->logService->insertLog('tb_print_req_collection', 'Output File', '', 'Output File via text', [], [], "Total $count Record Generate to Output File Report");
        // end of report log

        $alphaCode = $this->commonService->getTransactionAlphaKeyValue();

        $data = $this->outputfileReportServices->generateOutPutFile($reports, $alphaCode);

        header('Content-Description: File Transfer');
        header('Content-Type: text/plain');
        header('Content-Transfer-Encoding: binary');
        header('Content-disposition: attachment; filename='.date("Y-m-d H:i:s").'.txt');
        header('Content-Length: ' . strlen($data));
        echo $data;
    }

    // function to generate output file excel
    public function getExcelOutputfile(Request $req){
        $reports = $this->outputfileReportServices->getOutputfileReport($req)->get();

        // report log
        $count = count($reports);
        $this->logService->insertLog('tb_print_req_collection', 'Output File', '', 'Output File via Excel', [], [], "Total $count Record Export From Output File Report");
        // end of report log

        return Excel::download(new ExportOutputfileReport($reports), 'Outputfile-'.date('d-m-Y').'.xlsx');
    }


    // function to get distict book size print req collection
    public function getPrintReqCollectionDistinctBranch(Request $req){
        if($req->ajax()){
            $bookSize = $this->outputfileReportServices->getBookSize($req);

            return response()->json([
                'status' => 200,
                'data' => $bookSize
            ]);
        }
    }

    // end of function for output file


    // function for reprint
    public function reprintReport(){
        $branches = $this->commonService->getBranch();

        $transactions = $this->commonService->getActiveTransactionCodes();

        return view('reports.reprint.list', compact('branches', 'transactions'));
    }

    // funtion to  get list off reprint request
    public function getReprintReport(Request $req){
        if($req->ajax())
        {
            $reprintedReport = $this->reprintedReportServices->getReprintReport($req);

            return DataTables::of($reprintedReport)
                    ->addIndexColumn()
                    ->editColumn('cps_date', function ($data) {
                        return date('d-m-Y', strtotime($data->cps_date));
                    })
                    ->editColumn('cps_branchmicr_code', function ($data) {
                        return str_pad($data->cps_branchmicr_code, 3, "0", STR_PAD_LEFT); 
                    })
                    ->toJson();
        }
    }

    // funtion to generate reprint pdf
    public function getPdfReprintReport(Request $req){
        $reports = $this->reprintedReportServices->getReprintReport($req)->get();

        // report log
        $count = count($reports);
        $this->logService->insertLog('tb_reprint_req_collection', 'Reprinted Reports', '', 'Download pdf', [], [], "Total $count Record Download From Reprinted Reports");
        // end of report log

        $pdf = new TCPDF;
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $html = view('reports.reprint.pdf', compact('reports'))->render();

        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('reports-'.date('dmYhis').'.pdf');
    }

    // function to generate reprint excel report
    public function getExcelReprintReport(Request $req){
        $reports = $this->reprintedReportServices->getReprintReport($req)->get();

        // report log
        $count = count($reports);
        $this->logService->insertLog('tb_reprint_req_collection', 'Reprinted Reports', '', 'Export Excel', [], [], "Total $count Record Export From Printed Report");
        // end of report log

        return Excel::download(new ExportReprintedReport($reports), 'reprinted-report-'.date('d-m-Y').'.xlsx');
    }
    // end of function of reprint

    

    // funtion for consolidated daily report
    public function consolidatedDailyReport(Request $req){
        $branches = $this->commonService->getBranch();

        $transactions = $this->commonService->getActiveTransactionCodes();

        return view('reports.consolidated-daily.list', compact('branches', 'transactions'));
    }

    // function to get consolidate daily report list
    public function getConsolidatedDailyReport(Request $req){
        if($req->ajax())
        {
            $printedReport = $this->consolidateDailyReportServices->getConsolidatedDailyReport($req);

            return DataTables::of($printedReport)
                    ->addIndexColumn()
                    ->editColumn('cps_date', function ($data) {
                        return date('d-m-Y', strtotime($data->cps_date));
                    })
                    ->editColumn('cps_branchmicr_code', function ($data) {
                        return str_pad($data->cps_branchmicr_code, 3, "0", STR_PAD_LEFT); 
                    })
                    ->toJson();
        }
    }

    // funtion to generate consolidate daily report pdf
    public function getPdfConsolidatedDailyReport(Request $req){
        $consolidateDailyReports = $this->consolidateDailyReportServices->getPdfConsolidatedDailyReport($req);
        
        // report log
        $count = count($consolidateDailyReports);
        $this->logService->insertLog('tb_print_req_collection', 'Consolidated Daily Reports', '', 'Download pdf', [], [], "Total $count Record Download Consolidated Daily Reports");
        // end of report log

        // return $consolidateDailyReport;
        $pdf = new TCPDF;
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $html = view('reports.consolidated-daily.pdf', compact('consolidateDailyReports'))->render();

        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('consolidated-daily-reports-'.date('dmYhis').'.pdf');
    }

    // funtion to generate consolidate daily report excel
    public function getExcelConsolidatedDailyReport(Request $req){
        $consolidateDailyReports = $this->consolidateDailyReportServices->getPdfConsolidatedDailyReport($req);

        // report log
        $count = count($consolidateDailyReports);
        $this->logService->insertLog('tb_print_req_collection', 'Consolidated Daily Reports', '', 'Export Excel', [], [], "Total $count Record Export Consolidated Daily Reports");
        // end of report log

        return Excel::download(new ExportConsolidateDailyReport($consolidateDailyReports), 'consolidated-daily-'.date('d-m-Y').'.xlsx');
    }
    // End of funtion for consolidated daily report


    // funtion for consolidated monthly report
    public function consolidatedMonthlyReport(Request $req){
        $branches = $this->commonService->getBranch();

        return view('reports.consolidated-monthly.list', compact('branches'));
    }

    // function to get consolidate monthly report list
    public function getConsolidatedMonthlyReport(Request $req){
        if($req->ajax())
        {
            $consolidateMonthlyReport = $this->consolidateMonthlyReportServices->getConsolidateMonthlyReport($req);

            return DataTables::of($consolidateMonthlyReport)
                    ->addIndexColumn()
                    ->editColumn('cps_branchmicr_code', function ($data) {
                        return str_pad($data->cps_branchmicr_code, 3, "0", STR_PAD_LEFT); 
                    })
                    ->toJson();
        }
    }

    // funtion to generate consolidate monthly report pdf
    public function getPdfConsolidatedMonthlyReport(Request $req){
        $consolidateMonthlyReports = $this->consolidateMonthlyReportServices->getPdfConsolidatedMonthlyReport($req);
        $transactionKey = $this->commonService->getTransactionKeyValue();

        // report log
        $count = count($consolidateMonthlyReports);
        $this->logService->insertLog('tb_print_req_collection', 'Consolidated Monthly Reports', '', 'Download Pdf', [], [], "Total $count Record Download Consolidated Monthly Reports");
        // end of report log

        $pdf = new TCPDF;
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $html = view('reports.consolidated-monthly.pdf', compact('consolidateMonthlyReports', 'transactionKey'))->render();

        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('reports-'.date('dmYhis').'.pdf');
    }

    // funtion to generate consolidate monthly report excel
    public function getExcelConsolidatedMonthlyReport(Request $req){

        $consolidateMonthlyReports = $this->consolidateMonthlyReportServices->getPdfConsolidatedMonthlyReport($req);
        $transactionKey = $this->commonService->getTransactionKeyValue();

        // report log
        $count = count($consolidateMonthlyReports);
        $this->logService->insertLog('tb_print_req_collection', 'Consolidated Monthly Reports', '', 'Export Excel', [], [], "Total $count Record Export Consolidated Monthly Reports");
        // end of report log

        return Excel::download(new ExportConsolidateMonthlyReport($consolidateMonthlyReports, $transactionKey), 'consolidated-monthly-'.date('d-m-Y').'.xlsx');
    }
    // End of funtion for consolidated monthly report


    // function for customer report
    public function customerReport(){

        return view('reports.customer.list');
    }

    // function to get customers report list
    public function getCustomerReport(Request $req){
        if($req->ajax())
        {
            $reprintedReport = $this->customerReportServices->getCustomerReport($req);

            return DataTables::of($reprintedReport)
                    ->addIndexColumn()
                    ->editColumn('cps_date', function ($data) {
                        return date('d-m-Y', strtotime($data->cps_date));
                    })
                    ->editColumn('cps_branchmicr_code', function ($data) {
                        return str_pad($data->cps_branchmicr_code, 3, "0", STR_PAD_LEFT); 
                    })
                    ->toJson();
        }
    }

    // funtion to generate customer report pdf
    public function getPdfCustomerReport(Request $req){
        $reports = $this->customerReportServices->getCustomerReport($req)->get();

        // report log
        $count = count($reports);
        $this->logService->insertLog('tb_print_req_collection', 'Customer Reports', '', 'Download pdf', [], [], "Total $count Record Download Customer Reports");
        // end of report log

        $pdf = new TCPDF;
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $html = view('reports.customer.pdf', compact('reports'))->render();

        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('customer-'.date('dmYhis').'.pdf');
    }

    // function to generate customer report excel
    public function getExcelCustomerReport(Request $req){
        $reports = $this->customerReportServices->getCustomerReport($req)->get();

        // report log
        $count = count($reports);
        $this->logService->insertLog('tb_print_req_collection', 'Customer Reports', '', 'Export Excel', [], [], "Total $count Record Export Customer Reports");
        // end of report log

        return Excel::download(new ExportCustomerReport($reports), 'customer-'.date('d-m-Y').'.xlsx');
    }
    // end of function of customer report
}
