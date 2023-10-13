<?php

namespace App\Structure\ReportingSection\Admin\Actions;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Structure\ReportingSection\Admin\Models\Mbt;

class MbtUploadAction implements ToModel{
    /**
     * Импорт значений из EXCEL
     * Запись в БД значений (таблица mbt)
     *
     * @param array $row
     * @return 
     */
    public function model(array $row)
    {  
        $mounth = session('mounth');
        
            return new Mbt([
                'year'     => 2023,
                'mounth'   => $mounth,
                'title'    => $row[0],
                'approved' => str_replace(",", ".", $row[3]+$row[4]),
                'expenses' => str_replace(",", ".", $row[5]+$row[6]),
            ]);        

     
    }  
}

