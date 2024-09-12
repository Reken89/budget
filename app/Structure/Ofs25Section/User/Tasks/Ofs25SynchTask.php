<?php

namespace App\Structure\Ofs25Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs25Section\User\Models\Ofs251;
use App\Structure\Ofs25Section\User\Models\Ofs252;
use App\Structure\Ofs25Section\User\Models\Ofs253;
use App\Structure\Ofs25Section\User\Models\Ofs254;
use App\Structure\Ofs25Section\User\Models\Ofs255;

class Ofs25SynchTask extends BaseTask
{
    /**
     * Обновляет значения в таблице ofs
     * Заполняет поля данными из предыдущего месяца
     *
     * @param int $mounth, int $chapter, int $user, array $info
     * @return 
     */
    public function StartSynch(int $mounth, int $chapter, int $user, array $info)
    {  
        if($chapter == "1"){
            $ofs = new Ofs251;
        }
        if($chapter == "2"){
            $ofs = new Ofs252;
        }
        if($chapter == "3"){
            $ofs = new Ofs253;
        }
        if($chapter == "4"){
            $ofs = new Ofs254;
        }
        if($chapter == "5"){
            $ofs = new Ofs255;
        }
        
        foreach ($info as $inf){
            if($inf['total2'] == 0 AND $inf['lbo'] == 0){
                //Заглушка
            } else {
                $ofs::where('user_id', $user)
                ->where('mounth', $mounth)  
                ->where('ekr_id', $inf['ekr_id'])        
                ->update([
                    'lbo'              => $inf['lbo'],
                    'prepaid'          => $inf['prepaid'],
                    'credit_year_all'  => $inf['credit_year_all'],
                    'credit_year_term' => $inf['credit_year_term'],
                    'debit_year_all'   => $inf['debit_year_all'],
                    'debit_year_term'  => $inf['debit_year_term'],
                    'fact_all'         => $inf['fact_all'],
                    'fact_mounth'      => 0,
                    'kassa_all'        => $inf['kassa_all'],
                    'kassa_mounth'     => 0,
                    'credit_end_all'   => 0,
                    'credit_end_term'  => 0,
                    'debit_end_all'    => 0,
                    'debit_end_term'   => 0,
                    'return_old_year'  => $inf['return_old_year'],
                ]);
            }    
        }
    }
    
    /**
     * Обновляет значения в таблице ofs
     * Заполняет поля данными из предыдущего месяца
     *
     * @param int $mounth, int $chapter, int $user, array $info
     * @return 
     */
    public function StartSynchJanuary(int $mounth, int $chapter, int $user, array $info)
    {  
        if($chapter == "1"){
            $ofs = new Ofs251;
        }
        if($chapter == "2"){
            $ofs = new Ofs252;
        }
        if($chapter == "3"){
            $ofs = new Ofs253;
        }
        if($chapter == "4"){
            $ofs = new Ofs254;
        }
        if($chapter == "5"){
            $ofs = new Ofs255;
        }
        
        foreach ($info as $inf){
            if($inf['credit_end_all'] == 0 AND $inf['credit_end_term'] == 0 AND $inf['debit_end_all'] == 0 AND $inf['debit_end_term'] == 0){
                //Заглушка
            } else {
                $ofs::where('user_id', $user)
                ->where('mounth', $mounth)  
                ->where('ekr_id', $inf['ekr_id'])        
                ->update([
                    'lbo'              => 0,
                    'prepaid'          => 0,
                    'credit_year_all'  => $inf['credit_end_all'],
                    'credit_year_term' => $inf['credit_end_term'],
                    'debit_year_all'   => $inf['debit_end_all'],
                    'debit_year_term'  => $inf['debit_end_term'],
                    'fact_all'         => 0,
                    'fact_mounth'      => 0,
                    'kassa_all'        => 0,
                    'kassa_mounth'     => 0,
                    'credit_end_all'   => 0,
                    'credit_end_term'  => 0,
                    'debit_end_all'    => 0,
                    'debit_end_term'   => 0,
                    'return_old_year'  => 0,
                ]);
            }    
        }

    }
}

