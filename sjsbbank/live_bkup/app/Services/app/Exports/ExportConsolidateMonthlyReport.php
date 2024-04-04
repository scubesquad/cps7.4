<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Http\Request;

class ExportConsolidateMonthlyReport implements FromView
{
    protected $consolidateMonthlyReports;
    protected $transactionKey;

    public function __construct($consolidateMonthlyReports, $transactionKey){
        $this->consolidateMonthlyReports = $consolidateMonthlyReports;
        $this->transactionKey = $transactionKey;
    }
  
    public function view(): View
    {
        return view('reports.consolidated-monthly.excel', ['consolidateMonthlyReports' => $this->consolidateMonthlyReports, 'transactionKey' =>$this->transactionKey ]);
    }
}
