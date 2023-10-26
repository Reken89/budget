<?php

namespace App\Structure\Ofs24Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs24Section\Admin\Models\Ofs24;

class Ofs24SynchTask extends BaseTask
{
    /**
     * Обновляет значения в таблице ofs24
     * Заполняет поля данными из предыдущего месяца
     *
     * @param int $user, int $mounth, array $chapter, array $info
     * @return 
     */
    public function run(int $user, int $mounth, array $chapter, array $info)
    {  
        foreach ($info as $inf){
            if($inf['total2'] == 0 AND $inf['lbo'] == 0){
                //Заглушка
            } else {
                Ofs24::where('user_id', $user)
                ->where('mounth', $mounth)  
                ->whereIn('chapter', $chapter) 
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
     * Обновляет значения в таблице ofs24
     * Заполняет поля данными из предыдущего месяца
     *
     * @param int $user, int $mounth, array $chapter, array $info
     * @return 
     */
    public function old(int $user, int $mounth, array $chapter, array $info)
    {  
        foreach ($info as $inf){
            if($inf['credit_end_all'] == 0 AND $inf['credit_end_term'] == 0 AND $inf['debit_end_all'] == 0 AND $inf['debit_end_term'] == 0){
                //Заглушка
            } else {
                Ofs24::where('user_id', $user)
                ->where('mounth', $mounth)  
                ->whereIn('chapter', $chapter) 
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

