<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use Illuminate\Database\Eloquent\Builder;
use App\Structure\OfsSection\User\Models\Ofs;

class OfsSynchTask extends BaseTask
{
    /**
     * Обновляет значения поля main в таблице Ofs
     *
     * @param int $user, int $year, int $mounth, int $chapter, array $info
     * @return 
     */
    public function run(int $user, int $year, int $mounth, int $chapter, array $info)
    {  
        foreach ($info as $inf){
            if($inf['total2'] !== 0){
            Ofs::where('user_id', $user)
                ->where('year', $year)
                ->where('mounth', $mounth)  
                ->where('chapter', $chapter) 
                ->whereHas('ekr', function (Builder $query) use ($inf) {
                    $query->where('id', $inf['ekr_id']);
                })
                ->update([
                    'lbo'              => $inf['lbo'],
                    'prepaid'          => $inf['prepaid'],
                    'credit_year_all'  => $inf['credit_year_all'],
                    'credit_year_term' => $inf['credit_year_term'],
                    'debit_year_all'   => $inf['debit_year_all'],
                    'debit_year_term'  => $inf['debit_year_term'],
                    'fact_all'         => $inf['fact_all'],
                    'fact_mounth'      => $inf['fact_mounth'],
                    'kassa_all'        => $inf['kassa_all'],
                    'kassa_mounth'     => $inf['kassa_mounth'],
                    'credit_end_all'   => $inf['credit_end_all'],
                    'credit_end_term'  => $inf['credit_end_term'],
                    'debit_end_all'    => $inf['debit_end_all'],
                    'debit_end_term'   => $inf['debit_end_term'],
                    'return_old_year'  => $inf['return_old_year'],
                ]);
            }    
        }

    }
}

