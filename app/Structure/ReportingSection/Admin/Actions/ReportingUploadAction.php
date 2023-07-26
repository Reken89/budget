<?php

namespace App\Structure\ReportingSection\Admin\Actions;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Structure\ReportingSection\Admin\Models\Reporting;
  
class ReportingUploadAction implements ToModel
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
            
            $year = session('year');
            $mounth = session('mounth');
            $meaning = session('meaning');
            
            //Если документ относится к РАСХОДАМ
            if($meaning == "expenses"){                
                
                $kbk = str_replace(" ", '', $row[2]);
                
                //Выбираем нужные строки
                if($kbk == "00001000000000000000" || $kbk == "no" || $kbk == "00003000000000000000" || $kbk == "00004000000000000000" 
                        || $kbk == "00005000000000000000" || $kbk == "00007000000000000000" || $kbk == "00008000000000000000" || $kbk == "00009000000000000000" 
                        || $kbk == "00010000000000000000" || $kbk == "00011000000000000000" || $kbk == "00013000000000000000"){
                    
                    return new Reporting([
                        'year'      => $year,
                        'mounth'    => $mounth,
                        'meaning'   => $meaning,
                        'title'     => $row[0],
                        'kbk'       => $kbk,
                        'approved'  => str_replace(",", ".", $row[3]),
                        'fulfilled' => str_replace(",", ".", $row[4]),
                        'unused'    => str_replace(",", ".", $row[5]),
                    ]);
                }
                
            //Если документ относится к ДОХОДАМ    
            } elseif ($meaning == "income"){
                
                $kbk = str_replace(" ", '', $row[2]);
                
                //Выбираем нужные строки
                if($kbk == "no" || $kbk == "00010000000000000000" || $kbk == "00010100000000000000" || $kbk == "00010300000000000000" 
                        || $kbk == "00010500000000000000" || $kbk == "00010600000000000000" || $kbk == "00010800000000000000" 
                        || $kbk == "00010900000000000000" || $kbk == "00011100000000000000" || $kbk == "00011200000000000000" 
                        || $kbk == "00011300000000000000" || $kbk == "00011400000000000000" || $kbk == "00011600000000000000" 
                        || $kbk == "00011700000000000000" || $kbk == "00020000000000000000" || $kbk == "00020200000000000000" 
                        || $kbk == "00020300000000000000" || $kbk == "00020700000000000000" || $kbk == "00021800000000000000" 
                        || $kbk == "00021900000000000000"){
                    
                    return new Reporting([
                        'year'      => $year,
                        'mounth'    => $mounth,
                        'meaning'   => $meaning,
                        'title'     => $row[0],
                        'kbk'       => $kbk,
                        'approved'  => str_replace(",", ".", $row[3]),
                        'fulfilled' => str_replace(",", ".", $row[4]),
                        'unused'    => str_replace(",", ".", $row[5]),
                    ]);
                }
                     
            }       

        }
    }

}

