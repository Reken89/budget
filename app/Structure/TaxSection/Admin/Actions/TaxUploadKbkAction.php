<?php

namespace App\Structure\TaxSection\Admin\Actions;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Structure\TaxSection\Admin\Models\TaxKbk;
  
class TaxUploadKbkAction implements ToModel
{    
     /**
     * Импорт значений КБК из EXCEL
     * Запись в БД значений (таблица TaxKbk)
     *
     * @param array $row
     * @return 
     */
    public function model(array $row)
   {       
        if ($row[0] !== NULL){
            
            return new TaxKbk([
               'title' => $row[0],
               'kbk'   => $row[1],
            ]);
            
        }       

   }
}
