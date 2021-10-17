<?php

namespace App\Exports;

use App\ChiTiet_Dethi;
use Maatwebsite\Excel\Concerns\FromCollection;

class Export_CTDT implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ChiTiet_Dethi::all();
    }
}
