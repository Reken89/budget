<?php

namespace App\Structure\Ofs24Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs24Section\Admin\Models\Ofs24;
use Illuminate\Database\Eloquent\Builder;

class Ofs24UpdateMainTask extends BaseTask
{
    /**
     * Возвращает сумму для main по заданным параметрам
     *
     * @param int $user_id, int $mounth, int $chapter, int $number
     * @return array
     */
    public function select(int $user_id, int $mounth, int $chapter, int $number): array
    {        
        $total = Ofs24::selectRaw('SUM(`lbo`) as lbo')
            ->selectRaw('SUM(`prepaid`) as prepaid')
            ->selectRaw('SUM(`credit_year_all`) as credit_year_all')
            ->selectRaw('SUM(`credit_year_term`) as credit_year_term') 
            ->selectRaw('SUM(`debit_year_all`) as debit_year_all') 
            ->selectRaw('SUM(`debit_year_term`) as debit_year_term')
            ->selectRaw('SUM(`fact_all`) as fact_all')
            ->selectRaw('SUM(`fact_mounth`) as fact_mounth')
            ->selectRaw('SUM(`kassa_all`) as kassa_all') 
            ->selectRaw('SUM(`kassa_mounth`) as kassa_mounth')
            ->selectRaw('SUM(`credit_end_all`) as credit_end_all')
            ->selectRaw('SUM(`credit_end_term`) as credit_end_term')
            ->selectRaw('SUM(`debit_end_all`) as debit_end_all')
            ->selectRaw('SUM(`debit_end_term`) as debit_end_term')
            ->selectRaw('SUM(`return_old_year`) as return_old_year')
            ->where('user_id', $user_id)
            ->where('mounth', $mounth)
            ->where('chapter', $chapter)
            ->whereHas('ekr', function (Builder $query) use ($number) {
                $query->where('shared', 'No');
                $query->where('main', 'No');
                $query->where('number', $number);
            })
            ->groupBy('year')            
            ->first()
            ->toArray();
        return $total;  
    }
    
    /**
     * Обновляет значения поля main в таблице Ofs
     *
     * @param int $user_id, int $mounth, int $chapter, int $number, array $main
     * @return bool
     */
    public function update(int $user_id, int $mounth, int $chapter, int $number, array $main): bool
    {    
        $result = Ofs24::where('user_id', $user_id)
            ->where('mounth', $mounth)
            ->where('chapter', $chapter) 
            ->whereHas('ekr', function (Builder $query) use ($number) {
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
                $query->where('number', $number);
            })    
            ->update([                
                'lbo'              => $main['lbo'],
                'prepaid'          => $main['prepaid'],
                'credit_year_all'  => $main['credit_year_all'],
                'credit_year_term' => $main['credit_year_term'],
                'debit_year_all'   => $main['debit_year_all'],
                'debit_year_term'  => $main['debit_year_term'],
                'fact_all'         => $main['fact_all'],
                'fact_mounth'      => $main['fact_mounth'],
                'kassa_all'        => $main['kassa_all'],
                'kassa_mounth'     => $main['kassa_mounth'],
                'credit_end_all'   => $main['credit_end_all'],
                'credit_end_term'  => $main['credit_end_term'],
                'debit_end_all'    => $main['debit_end_all'],
                'debit_end_term'   => $main['debit_end_term'],
                'return_old_year'  => $main['return_old_year'],
            ]);        
        
        return $result == true ? true : false;

    }
}
