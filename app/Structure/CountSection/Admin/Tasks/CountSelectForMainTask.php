<?php

namespace App\Structure\CountSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CountSection\Admin\Models\Count;
use App\Structure\CountSection\Admin\Dto\CountUpdateDto;
use Illuminate\Database\Eloquent\Builder;

class CountSelectForMainTask extends BaseTask
{
    /**
     * Возвращает смету по заданным параметрам
     *
     * @param CountUpdateDto $dto
     * @return array
     */
    public function run(CountUpdateDto $dto): array
    {       
        
        $info = Count::selectRaw('SUM(`sum_fu`) as sum_fu')
            ->where('user_id', $dto->user_id)    
            ->where('year', $dto->year) 
            ->whereHas('ekr', function (Builder $query) use ($dto) {
                $query->where('shared', 'No');
                $query->where('main', 'No');
                $query->where('number', $dto->number);
            })    
            ->first()
            ->toArray();
        
        return $info;  

    }
}
