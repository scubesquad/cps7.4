<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PostLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\TransactionCodeController;
use App\Http\Controllers\ChequeSeriesController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\UploadTransactionController;
use App\Http\Controllers\PendingPrintRequestController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ReprintChequeController;
use App\Http\Controllers\ReprintRequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProcessReprintController;
use App\Http\Controllers\ProcessReprintSingleLeafController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DatabaseBackupController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ManageBankController;
use App\Http\Controllers\ScriptController;
use App\Http\Controllers\PositionalSettingController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\TransactionListController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/app/login', [PostLoginController::class, 'postLogin'])->name('post.login');

Route::get('/demo/dashboard', [DemoController::class, 'dashboard']);
Route::get('/demo/list', [DemoController::class, 'list']);


Route::get('/otp', [PostLoginController::class, 'otp'])->name('otp');
Route::post('/otpVerification', [PostLoginController::class, 'otpVerification'])->name('otpVerification');

// Route::domain('{subdomain}.'.config('app.short_url'))->group(function(){
    Route::group(['middleware' => ['auth']], function() {

        Route::get('/dashboard', [DashboardController::class, 'dashboard']);

        // Route For country master
        Route::get('master/country/list', [CountryController::class, 'list']);
        Route::post('master/country/list', [CountryController::class, 'getList']);
        Route::get('master/country/edit/{id}', [CountryController::class, 'edit']);
        Route::post('master/country/store', [CountryController::class, 'store']);
        Route::post('master/country/update', [CountryController::class, 'update']);
        Route::post('master/country/delete', [CountryController::class, 'delete']);

        // Route For state Master
        Route::get('master/state/list', [StateController::class, 'list']);
        Route::post('master/state/list', [StateController::class, 'getList']);
        Route::get('master/state/edit/{id}', [StateController::class, 'edit']);
        Route::post('master/state/store', [StateController::class, 'store']);
        Route::post('master/state/update', [StateController::class, 'update']);
        Route::post('master/state/delete', [StateController::class, 'delete']);

        // Route for roles and permission
        Route::get('master/role/list', [RoleController::class, 'list']);
        Route::post('master/role/list', [RoleController::class, 'getList']);
        Route::get('master/role/edit/{id}', [RoleController::class, 'edit']);
        Route::post('master/role/update', [RoleController::class, 'update']);
        Route::post('master/role/store', [RoleController::class, 'store']);

        // Route for bank master
        Route::get('master/bank/edit', [BankController::class, 'edit']);
        Route::post('master/bank/update', [BankController::class, 'update']);
        Route::post('master/bank/getState', [BankController::class, 'getState']);

        // Route For branch Master
        Route::get('master/branch/list', [BranchController::class, 'list']);
        Route::post('master/branch/list', [BranchController::class, 'getList']);
        Route::get('master/branch/edit/{id}', [BranchController::class, 'edit']);
        Route::post('master/branch/store', [BranchController::class, 'store']);
        Route::post('master/branch/update', [BranchController::class, 'update']);
        Route::post('master/branch/delete', [BranchController::class, 'delete']);

        // Route For transaction code Master
        Route::get('master/transaction-code/list', [TransactionCodeController::class, 'list']);
        Route::post('master/transaction-code/list', [TransactionCodeController::class, 'getList']);
        Route::get('master/transaction-code/edit/{id}', [TransactionCodeController::class, 'edit']);
        Route::post('master/transaction-code/store', [TransactionCodeController::class, 'store']);
        Route::post('master/transaction-code/update', [TransactionCodeController::class, 'update']);
        Route::post('master/transaction-code/delete', [TransactionCodeController::class, 'delete']);

        // Route For cheque series Master
        Route::get('master/series/list', [ChequeSeriesController::class, 'list']);
        Route::post('master/series/list', [ChequeSeriesController::class, 'getList']);
        Route::get('master/series/edit/{id}', [ChequeSeriesController::class, 'edit']);
        Route::post('master/series/store', [ChequeSeriesController::class, 'store']);
        Route::post('master/series/update', [ChequeSeriesController::class, 'update']);
        Route::post('master/series/delete', [ChequeSeriesController::class, 'delete']);


        // Route For upload request file
        Route::get('transaction/upload', [UploadTransactionController::class, 'upload'])->name('transaction.upload');
        Route::post('transaction/upload', [UploadTransactionController::class, 'getUpload']);
        
        Route::get('getUploadRecordAjax', [UploadTransactionController::class, 'getUploadRecordAjax'])->name('getUploadRecordAjax');
        

        Route::get('transaction/get-filter-details', [UploadTransactionController::class, 'getFilter']);
        Route::post('transaction/upload/store', [UploadTransactionController::class, 'store']);
        Route::post('transaction/upload/delete', [UploadTransactionController::class, 'delete']);
        Route::post('transaction/upload/shift-data-to-pending', [UploadTransactionController::class, 'shiftUploadingDataToPendingTable']);
        
        // additional route
        Route::post('transaction/upload/reject-print-request', [UploadTransactionController::class, 'rejectPrintReuest']);

        Route::get('transaction/manual', [UploadTransactionController::class, 'manual']);
        Route::post('transaction/manual/store', [UploadTransactionController::class, 'manualStore'])->name('manualStore');
        
        Route::get('transaction/manual/{id}', [UploadTransactionController::class, 'manualEdit']);
        Route::post('transaction/manual/update/{id?}', [UploadTransactionController::class, 'manualUpdate'])->name('uploads.ajax_update');


        Route::post('ajaxGetBranchDetails/{id?}', [AjaxController::class, 'getBranchDetails'])->name('ajaxGetBranchDetails');
        // additional route

        // print request list
        
        Route::get('transaction/list', [TransactionListController::class, 'index'])->name('transaction.list');
        Route::post('transaction/list', [TransactionListController::class, 'getTransactionList'])->name('getTransactionList');
        Route::get('getPrintRecordAjax', [TransactionListController::class, 'getPrintRecordAjax'])->name('getPrintRecordAjax');

        Route::post('transaction/list/send-to-branch', [TransactionListController::class, 'sendToBranchAjax']);

        

        // end print request list

        // Route For confirm print request 
        Route::get('pending-print-req/list', [PendingPrintRequestController::class, 'list']);
        Route::post('pending-print-req/list', [PendingPrintRequestController::class, 'getList']);
        Route::post('pending-print-req/upload/store', [PendingPrintRequestController::class, 'cancel']);
        Route::post('pending-print-req/upload/shift-data-to-pending-uploading', [PendingPrintRequestController::class, 'shiftPendingDataTouploading']);
        Route::post('pending-print-req/upload/shift-data-to-pending-printque', [PendingPrintRequestController::class, 'shiftPendingDataToPrintQueue']);

        // route to print the cheque
        Route::get('print', [PrintController::class, 'print']);
        Route::post('print/store', [PrintController::class, 'printStore']);
        Route::post('print/cancel', [PrintController::class, 'cancelPrint']);
        Route::post('/prints/removePrintCollection', [PrintController::class, 'removePrintCollection']);
      

        // Route for reprint request
        Route::get('reprint', [ReprintRequestController::class, 'list']);
        Route::post('reprint', [ReprintRequestController::class, 'getList']);
        Route::post('reprint/shift-data-to-reprint-que', [ReprintRequestController::class, 'shiftPrintCollectionToReprintQue']);

        // Route for reprint request
        Route::get('process/reprint', [ProcessReprintController::class, 'list']);
        Route::post('process/reprint', [ProcessReprintController::class, 'getList']);
        Route::get('process/reprint/update', [ProcessReprintController::class, 'update']);
        Route::post('process/reprint/delete', [ProcessReprintController::class, 'delete']);

        // Route for reprint single leaf request
        Route::get('process/reprint-single-leaf', [ProcessReprintSingleLeafController::class, 'list']);
        Route::post('process/reprint-single-leaf', [ProcessReprintSingleLeafController::class, 'getList']);
        Route::get('process/reprint-single-leaf/update', [ProcessReprintSingleLeafController::class, 'update']);
        Route::post('process/reprint-single-leaf/delete', [ProcessReprintSingleLeafController::class, 'delete']);


        // route to reprint the cheque
        Route::get('reprint-cheque', [ReprintChequeController::class, 'reprint']);
        Route::get('reprint/cheque', [ReprintChequeController::class, 'reprintCheque']);
        Route::post('/reprint-cheque/removeReprintCollection', [ReprintChequeController::class, 'removeReprintCollection']);



        // Route For user management
        Route::get('user/list', [UserController::class, 'list']);
        Route::post('user/list', [UserController::class, 'getList']);
        Route::get('user/edit/{id}', [UserController::class, 'edit']);
        Route::post('user/store', [UserController::class, 'store']);
        Route::post('user/update', [UserController::class, 'update']);
        Route::post('user/delete', [UserController::class, 'delete']);

        // Route For reports for printed reports by period wise
        Route::get('report/printed-report-day-wise', [ReportController::class, 'printedReportDateWise']);
        Route::get('report/printed-report-selected-period', [ReportController::class, 'printedReportDateWise']);
        Route::post('report/printed-report-day-wise', [ReportController::class, 'getPrintedReportDateWise']);
        Route::get('report/printed-report/pdf', [ReportController::class, 'getPdfPrintedReportDateWise']);
        Route::get('report/printed-report/excel', [ReportController::class, 'getExcelPrintedReportDateWise']);

        // Route For reports for printed reports by period wise
        Route::get('report/outputfile-via-text', [ReportController::class, 'outputfile']);
        Route::get('report/outputfile', [ReportController::class, 'outputfile']);
        Route::post('report/outputfile', [ReportController::class, 'getOutputfile']);
        Route::post('report/get-print-req-collection-distict-book-size', [ReportController::class, 'getPrintReqCollectionDistinctBranch']);
        Route::get('report/outputfile/text', [ReportController::class, 'getTextOutputfile']);
        Route::get('report/outputfile/excel', [ReportController::class, 'getExcelOutputfile']);

        // Route For reports for printed reports by period wise
        Route::get('report/reprint', [ReportController::class, 'reprintReport']);
        Route::post('report/reprint', [ReportController::class, 'getReprintReport']);
        Route::get('report/reprint/pdf', [ReportController::class, 'getPdfReprintReport']);
        Route::get('report/reprint/excel', [ReportController::class, 'getExcelReprintReport']);

        // Route For reports for consolidated daily
        Route::get('report/consolidated-report-daily', [ReportController::class, 'consolidatedDailyReport']);
        Route::post('report/consolidated-report-daily', [ReportController::class, 'getConsolidatedDailyReport']);
        Route::get('report/consolidated-report-daily/pdf', [ReportController::class, 'getPdfConsolidatedDailyReport']);
        Route::get('report/consolidated-report-daily/excel', [ReportController::class, 'getExcelConsolidatedDailyReport']);

        // Route For reports for consolidated monthly
        Route::get('report/consolidated-report-monthly', [ReportController::class, 'consolidatedMonthlyReport']);
        Route::post('report/consolidated-report-monthly', [ReportController::class, 'getConsolidatedMonthlyReport']);
        Route::get('report/consolidated-report-monthly/pdf', [ReportController::class, 'getPdfConsolidatedMonthlyReport']);
        Route::get('report/consolidated-report-monthly/excel', [ReportController::class, 'getExcelConsolidatedMonthlyReport']);

        // Route For customer report
        Route::get('report/customer', [ReportController::class, 'customerReport']);
        Route::post('report/customer', [ReportController::class, 'getCustomerReport']);
        Route::get('report/customer/pdf', [ReportController::class, 'getPdfCustomerReport']);
        Route::get('report/customer/excel', [ReportController::class, 'getExcelCustomerReport']);

        // route to get database backup
        Route::get('app/backup', [DatabaseBackupController::class, 'backup']);
        Route::post('app/backup', [DatabaseBackupController::class, 'getDatabaseBackup']);


        // route to get database backup
        Route::get('app/backup', [DatabaseBackupController::class, 'backup']);
        Route::post('app/backup', [DatabaseBackupController::class, 'getDatabaseBackup']);

        // route to get database backup
        Route::get('setting', [SettingController::class, 'edit']);
        Route::post('setting/update', [SettingController::class, 'update']);

        // route to get database backup
        Route::get('log', [LogController::class, 'list']);
        Route::post('log', [LogController::class, 'getList']);
        Route::get('log/details/{id}', [LogController::class, 'getLog']);

        // route for manage bank
        Route::get('manage-bank/list', [ManageBankController::class, 'list']);
        Route::post('manage-bank/list', [ManageBankController::class, 'getList']);
        Route::post('manage-bank/store', [ManageBankController::class, 'store']);
        Route::get('manage-bank/edit/{id}', [ManageBankController::class, 'edit']);
        Route::post('manage-bank/update', [ManageBankController::class, 'update']);
        Route::get('manage-bank/transaction-code-index/edit/{subdomain}', [ManageBankController::class, 'editTransactioncode']);
        Route::post('manage-bank/transaction-code-index/update', [ManageBankController::class, 'updateTransactioncode']);



        Route::get('/profile', [ChangePasswordController::class, 'profile']);
        Route::post('changepassword', [ChangePasswordController::class, 'changepassword']);

        Route::get('/positional/setting', [PositionalSettingController::class, 'edit']);
        Route::post('/positional/setting/update', [PositionalSettingController::class, 'update']);

    });

    Route::get('script/database/{db}', [ScriptController::class, 'script']);
    Route::get('script/database2/{db}', [ScriptController::class, 'script1']);
// });
