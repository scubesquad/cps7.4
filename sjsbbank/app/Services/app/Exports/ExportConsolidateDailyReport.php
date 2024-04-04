<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Http\Request;

class ExportConsolidateDailyReport implements FromView
{
    protected $consolidateDailyReports;

    public function __construct($consolidateDailyReports){
        $this->consolidateDailyReports = $consolidateDailyReports;
    }
  
    public function view(): View
    {
        return view('reports.consolidated-daily.excel', ['consolidateDailyReports' => $this->consolidateDailyReports]);
    }
}
