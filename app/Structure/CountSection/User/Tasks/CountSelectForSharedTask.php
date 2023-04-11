<?php

namespace App\Structure\CountSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CountSection\Admin\Models\Count;
use App\Structure\CountSection\User\Dto\CountUpdateDto;
use Illuminate\Database\Eloquent\Builder;

class CountSelectForSharedTask extends BaseTask
{
    /**
     * Возвращает смету по заданным параметрам
     *
     * @param CountUpdateDto $dto
     * @return array
     */
    public function run(CountUpdateDto $dto): array
    { 
        if($dto->number >= 17 && $dto->number <= 19){
            $number = [17, 18, 19];
        } elseif($dto->number >= 21 && $dto->number <= 25){
            $number = [21, 22, 23, 24, 25];
        } elseif($dto->number >= 27 && $dto->number <= 34){
            $number = [27, 28, 29, 30, 31, 32];
        } elseif($dto->number >= 36 && $dto->number <= 42){
            $number = [36, 37, 38, 39, 40, 41, 42];
        }
               
        $info = Count::selectRaw('SUM(`sum_fu`) as sum_fu')
            ->selectRaw('SUM(`sum_cb`) as sum_cb')
            ->where('user_id', $dto->user_id)    
            ->where('year', $dto->year) 
            ->whereHas('ekr', function (Builder $query) use ($number) {
                $query->where('shared', 'No');
                $query->where('main', 'No');
                $query->whereIn('number', $number);
            })    
            ->first()
            ->toArray();
        
        return $info;  

    }
}
