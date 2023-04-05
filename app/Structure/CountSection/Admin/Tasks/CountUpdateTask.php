<?php

namespace App\Structure\CountSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CountSection\Admin\Models\Count;
use App\Structure\CountSection\Admin\Dto\CountUpdateDto;

class CountUpdateTask extends BaseTask
{
    /**
     * Обновляет значения в таблице смета по id
     *
     * @param CountUpdateDto $dto
     * @return array
     */
    public function run(CountUpdateDto $dto): bool
    {        
        $result = Count::find($dto->id)
            ->update([                
                'sum_fu' => $dto->sum_fu,
            ]);
        
        return $result == true ? true : false;

    }
}

