<?php

namespace App\Imports;

use App\ChiTiet_Dethi;
use Maatwebsite\Excel\Concerns\ToModel;

class Import_CTDT implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ChiTiet_Dethi([    
            'id_cauhoi' => $row[0],
            'id_dethi' => $row[1],       
        ]);
    }
}
