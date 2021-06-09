<?php

namespace App\Exports;

use App\Models\DataAyam;
use Maatwebsite\Excel\Concerns\FromCollection;

class dataayamexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataAyam::all();
    }
}
