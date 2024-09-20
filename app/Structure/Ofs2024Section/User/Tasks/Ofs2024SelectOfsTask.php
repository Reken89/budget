<?php

namespace App\Structure\Ofs2024Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs2024Section\User\Models\Ofs241;
use App\Structure\Ofs2024Section\User\Models\Ofs242;
use App\Structure\Ofs2024Section\User\Models\Ofs243;
use App\Structure\Ofs2024Section\User\Models\Ofs244;
use App\Structure\Ofs2024Section\User\Models\Ofs245;
use App\Structure\OfsSection\User\Models\Ofs;

class Ofs2024SelectOfsTask extends BaseTask
{
    /**
     * Возвращает ОФС по заданным параметрам
     *
     * @param int $chapter, int $mounth, int $user
     * @return array
     */
    public function SelectOfs(int $chapter, int $mounth, int $user): array
    {
        if($chapter == "1"){
            $ofs = new Ofs241;
            $ekr_id = "ofs241.ekr_id";
        }
        if($chapter == "2"){
            $ofs = new Ofs242;
            $ekr_id = "ofs242.ekr_id";
        }
        if($chapter == "3"){
            $ofs = new Ofs243;
            $ekr_id = "ofs243.ekr_id";
        }
        if($chapter == "4"){
            $ofs = new Ofs244;
            $ekr_id = "ofs244.ekr_id";
        }
        if($chapter == "5"){
            $ofs = new Ofs245;
            $ekr_id = "ofs245.ekr_id";
        }
        
        $info = $ofs::select()  
            ->selectRaw('((`credit_year_all` + `fact_all` - `debit_year_all` - `kassa_all`) - '
                    . '(`credit_end_all` - `debit_end_all`) + `return_old_year`) AS total1')
            ->selectRaw('(`lbo` - `fact_all` + `prepaid` - `credit_year_all`) AS total2')
            ->where('user_id', $user)
            ->where('mounth', $mounth) 
            ->join('ekr', $ekr_id, '=', 'ekr.id')    
            ->with([
                'ekr', 
                'user:id,name',
            ])   
            ->orderBy('ekr.number', 'asc')
            ->orderBy('ekr.main', 'desc')
            ->orderBy('ekr.shared', 'desc')
            ->orderBy('ekr.title', 'asc')    
            ->get()
            ->toArray();
        return $info;                 
    }   
    
    /**
     * Возвращает из базы ОФС 2024 года
     * Колонки 14 15 16 17
     *
     * @param int $user, int $chapter
     * @return array
     */
    public function SelectOfs23(int $user, int $chapter): array
    {
        $info = Ofs::select('credit_end_all', 'credit_end_term', 'debit_end_all', 'debit_end_term', 'ekr_id')  
            ->where('user_id', $user)
            ->where('mounth', 12) 
            ->where('chapter', $chapter)     
            ->get()
            ->toArray();
        return $info; 
                
    }

}

