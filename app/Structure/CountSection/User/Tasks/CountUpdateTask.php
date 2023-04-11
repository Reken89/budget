<?php

namespace App\Structure\CountSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CountSection\Admin\Models\Count;
use App\Structure\CountSection\User\Dto\CountUpdateDto;

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
                'sum_fu' => $dto->sum_cb,
                'sum_cb' => $dto->sum_cb,
            ]);
        
        return $result == true ? true : false;

    }
}


