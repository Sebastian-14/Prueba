<?php

namespace App\Exports;

use App\Mantenimiento;
use Maatwebsite\Excel\Concerns\FromCollection;

class MantenimientosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mantenimiento::all();
    }
}
