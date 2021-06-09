<?php

namespace App\Exports;

use App\Models\DataPakan;
use Maatwebsite\Excel\Concerns\FromCollection;

class datapakanexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataPakan::all();
    }
}
