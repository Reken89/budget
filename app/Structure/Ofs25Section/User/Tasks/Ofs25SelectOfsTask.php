<?php

namespace App\Structure\Ofs25Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs25Section\User\Models\Ofs251;
use App\Structure\Ofs25Section\User\Models\Ofs252;
use App\Structure\Ofs25Section\User\Models\Ofs253;
use App\Structure\Ofs25Section\User\Models\Ofs254;
use App\Structure\Ofs25Section\User\Models\Ofs255;
use App\Structure\Ofs24Section\Admin\Models\Ofs24;

class Ofs25SelectOfsTask extends BaseTask
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
            $ofs = new Ofs251;
            $ekr_id = "ofs251.ekr_id";
        }
        if($chapter == "2"){
            $ofs = new Ofs252;
            $ekr_id = "ofs252.ekr_id";
        }
        if($chapter == "3"){
            $ofs = new Ofs253;
            $ekr_id = "ofs253.ekr_id";
        }
        if($chapter == "4"){
            $ofs = new Ofs254;
            $ekr_id = "ofs254.ekr_id";
        }
        if($chapter == "5"){
            $ofs = new Ofs255;
            $ekr_id = "ofs255.ekr_id";
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
    public function SelectOfs24(int $user, int $chapter): array
    {
        $info = Ofs24::select('credit_end_all', 'credit_end_term', 'debit_end_all', 'debit_end_term', 'ekr_id')  
            ->where('user_id', $user)
            ->where('mounth', 12) 
            ->where('chapter', $chapter)     
            ->get()
            ->toArray();
        return $info; 
                
    }

}
