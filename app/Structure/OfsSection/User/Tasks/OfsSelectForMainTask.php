<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Dto\OfsUpdateDto;
use App\Structure\OfsSection\User\Models\Ofs;
use Illuminate\Database\Eloquent\Builder;

class OfsSelectForMainTask extends BaseTask
{
    /**
     * Возвращает сумму для main по заданным параметрам
     *
     * @param OfsUpdateDto $dto
     * @return array
     */
    public function run(OfsUpdateDto $dto): array
    {        
        $total = Ofs::selectRaw('SUM(`lbo`) as lbo')
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
            ->where('user_id', $dto->user_id)
            ->where('year', $dto->year)
            ->where('mounth', $dto->mounth)
            ->where('chapter', $dto->chapter)
            ->whereHas('ekr', function (Builder $query) use ($dto) {
                $query->where('shared', 'No');
                $query->where('main', 'No');
                $query->where('number', $dto->number);
            })
            ->groupBy('year')            
            ->get()
            ->toArray();
        return $total;  

    }
}

