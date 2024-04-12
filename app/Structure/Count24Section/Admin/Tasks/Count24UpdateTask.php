<?php

namespace App\Structure\Count24Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Count24Section\Admin\Models\Count24;
use App\Structure\Count24Section\Admin\Dto\Count24UpdateDto;

class Count24UpdateTask extends BaseTask
{
    /**
     * Обновляет значения в таблице counts24 по id
     *
     * @param Count24UpdateDto $dto
     * @return array
     */
    public function UpdateLine(Count24UpdateDto $dto): bool
    {        
        $result = Count24::find($dto->id)
            ->update([                
                'sum_fu' => $dto->sum,
            ]);
        
        return $result == true ? true : false;

    }
}

