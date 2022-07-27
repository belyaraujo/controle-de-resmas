<?php

namespace App\Exports;

use App\Models\RelatorioModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class RelatorioExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RelatorioModel::all();
    }
}
