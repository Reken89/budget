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
    public function run(int $user, int $year, int $mounth, array $chapter, array $info)
    {  
        foreach ($info as $inf){
            if($inf['total2'] == 0){
                //Заглушка
            } else {

                Ofs::where('user_id', $user)
                ->where('year', $year)
                ->where('mounth', $mounth)  
                //->where('chapter', $chapter[0]) 
                ->whereIn('chapter', $chapter) 
                ->where('ekr_id', $inf['ekr_id'])        
                //->whereHas('ekr', function (Builder $query) use ($inf) {
                //    $query->where('id', $inf['ekr_id']);
                //})
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
}

