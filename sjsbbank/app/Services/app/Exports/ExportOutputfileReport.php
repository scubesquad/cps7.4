<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Http\Request;

class ExportOutputfileReport implements FromView
{
    protected $reports;

    public function __construct($reports){
        $this->reports = $reports;
    }
  

    public function view(): View
    {
        return view('reports.outputfile.excel', ['reports' => $this->reports]);
    }
}
