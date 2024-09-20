<?php

namespace App\Structure\Ofs2024Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs2024Section\User\Models\Ofs241;
use App\Structure\Ofs2024Section\User\Models\Ofs242;
use App\Structure\Ofs2024Section\User\Models\Ofs243;
use App\Structure\Ofs2024Section\User\Models\Ofs244;
use App\Structure\Ofs2024Section\User\Models\Ofs245;
use Illuminate\Database\Eloquent\Builder;

class Ofs2024UpdateSharedTask extends BaseTask
{
    /**
     * Возвращает сумму для shared по заданным параметрам
     *
     * @param int $user_id, int $mounth, int $chapter, int $number
     * @return array
     */
    public function SelectShared(int $user_id, int $mounth, int $chapter, int $number): array
    {   
        if($chapter == "1"){
            $ofs = new Ofs241;
        }
        if($chapter == "2"){
            $ofs = new Ofs242;
        }
        if($chapter == "3"){
            $ofs = new Ofs243;
        }
        if($chapter == "4"){
            $ofs = new Ofs244;
        }
        if($chapter == "5"){
            $ofs = new Ofs245;
        }
        
        if($number >= 17 && $number <= 19){
            $num = [17, 18, 19];
        } elseif($number >= 21 && $number <= 25){
            $num = [21, 22, 23, 24, 25];
        } elseif($number >= 27 && $number <= 34){
            $num = [27, 28, 29, 30, 31, 32];
        } elseif($number >= 36 && $number <= 42 || $number == 45){
            $num = [36, 37, 38, 39, 40, 41, 42, 45];
        }
        
        $total = $ofs::selectRaw('SUM(`lbo`) as lbo')
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
            ->whereHas('ekr', function (Builder $query) use ($num) {
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
                $query->whereIn('number', $num);
            })
            //->groupBy('year')            
            ->first()
            ->toArray();
                
        return $total;  
    }
    
    /**
     * Обновляет значения поле shared в таблице Ofs
     *
     * @param int $user_id, int $mounth, int $chapter, int $num, array $shared
     * @return bool
     */
    public function UpdateShared(int $user_id, int $mounth, int $chapter, int $num, array $shared): bool
    {    
        if($chapter == "1"){
            $ofs = new Ofs241;
        }
        if($chapter == "2"){
            $ofs = new Ofs242;
        }
        if($chapter == "3"){
            $ofs = new Ofs243;
        }
        if($chapter == "4"){
            $ofs = new Ofs244;
        }
        if($chapter == "5"){
            $ofs = new Ofs245;
        }

        if($num >= 17 && $num <= 19){
            $number = 16;                     //240
        } elseif($num >= 21 && $num <= 25){
            $number = 20;                     //260
        } elseif($num >= 27 && $num <= 34){
            $number = 26;                     //290
        } elseif($num >= 36 && $num <= 42 || $num == 45){
            $number = 35;                     //340
        }
        
        $result = $ofs::where('user_id', $user_id)
            ->where('mounth', $mounth)
            ->whereHas('ekr', function (Builder $query) use ($number) {
                $query->where('shared', 'Yes');
                $query->where('main', 'Yes');
                $query->where('number', $number);
            }) 
            ->update([                
                'lbo'              => $shared['lbo'],
                'prepaid'          => $shared['prepaid'],
                'credit_year_all'  => $shared['credit_year_all'],
                'credit_year_term' => $shared['credit_year_term'],
                'debit_year_all'   => $shared['debit_year_all'],
                'debit_year_term'  => $shared['debit_year_term'],
                'fact_all'         => $shared['fact_all'],
                'fact_mounth'      => $shared['fact_mounth'],
                'kassa_all'        => $shared['kassa_all'],
                'kassa_mounth'     => $shared['kassa_mounth'],
                'credit_end_all'   => $shared['credit_end_all'],
                'credit_end_term'  => $shared['credit_end_term'],
                'debit_end_all'    => $shared['debit_end_all'],
                'debit_end_term'   => $shared['debit_end_term'],
                'return_old_year'  => $shared['return_old_year'],
            ]);        
        
        return $result == true ? true : false;
    }
}


