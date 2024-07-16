<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Dto\OfsUpdateDto;
use App\Structure\OfsSection\User\Models\Ofs;
use Illuminate\Database\Eloquent\Builder;

class OfsSelectForSharedTask extends BaseTask
{
    /**
     * Возвращает сумму для shared по заданным параметрам
     *
     * @param OfsUpdateDto $dto
     * @return array
     */
    public function run(int $user_id, int $year, int $mounth, int $chapter, int $num): array
    {   
        if($num >= 17 && $num <= 19){
            $number = [17, 18, 19];
        } elseif($num >= 21 && $num <= 25){
            $number = [21, 22, 23, 24, 25];
        } elseif($num >= 27 && $num <= 34){
            $number = [27, 28, 29, 30, 31, 32];
        } elseif($num >= 36 && $num <= 42){
            $number = [36, 37, 38, 39, 40, 41, 42, 45];
        } elseif($num == 45){
            $number = [36, 37, 38, 39, 40, 41, 42, 45];
        }
        
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
            ->where('user_id', $user_id)
            ->where('year', $year)
            ->where('mounth', $mounth)
            ->where('chapter', $chapter)
            ->whereHas('ekr', function (Builder $query) use ($number) {
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
                $query->whereIn('number', $number);
            })
            ->groupBy('year')            
            ->first()
            ->toArray();
        return $total;  

    }
}

