<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Http\Request;

class ExportReprintedReport implements FromView
{
    protected $reports;

    public function __construct($reports){
        $this->reports = $reports;
    }
  

    public function view(): View
    {
        return view('reports.reprint.excel', ['reports' => $this->reports]);
    }
}
