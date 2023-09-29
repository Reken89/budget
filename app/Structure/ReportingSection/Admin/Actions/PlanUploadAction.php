<?php

namespace App\Structure\ReportingSection\Admin\Actions;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Structure\ReportingSection\Admin\Models\Plan;

class PlanUploadAction implements ToModel{
    /**
     * Импорт значений из EXCEL
     * Запись в БД значений (таблица Plan)
     *
     * @param array $row
     * @return 
     */
    public function model(array $row)
    {  
        $mounth = session('mounth');
        
        if($row[1] == "0100"){
            return new Plan([
                'year'    => 2023,
                'mounth'  => $mounth,
                'meaning' => "income",
                'jan'     => str_replace(",", ".", $row[2]),
                'feb'     => str_replace(",", ".", $row[3]),
                'mar'     => str_replace(",", ".", $row[4]),
                'apr'     => str_replace(",", ".", $row[5]),
                'may'     => str_replace(",", ".", $row[6]),
                'jun'     => str_replace(",", ".", $row[7]),
                'jul'     => str_replace(",", ".", $row[8]),
                'aug'     => str_replace(",", ".", $row[9]),
                'sep'     => str_replace(",", ".", $row[10]),
                'oct'     => str_replace(",", ".", $row[11]),
                'nov'     => str_replace(",", ".", $row[12]),
                'dec'     => str_replace(",", ".", $row[13]),
            ]);
        } elseif ($row[1] == "0200") {
            return new Plan([
                'year'    => 2023,
                'mounth'  => $mounth,
                'meaning' => "expenses",
                'jan'     => str_replace(",", ".", $row[2]),
                'feb'     => str_replace(",", ".", $row[3]),
                'mar'     => str_replace(",", ".", $row[4]),
                'apr'     => str_replace(",", ".", $row[5]),
                'may'     => str_replace(",", ".", $row[6]),
                'jun'     => str_replace(",", ".", $row[7]),
                'jul'     => str_replace(",", ".", $row[8]),
                'aug'     => str_replace(",", ".", $row[9]),
                'sep'     => str_replace(",", ".", $row[10]),
                'oct'     => str_replace(",", ".", $row[11]),
                'nov'     => str_replace(",", ".", $row[12]),
                'dec'     => str_replace(",", ".", $row[13]),
            ]);      
        }       
    }  
}

