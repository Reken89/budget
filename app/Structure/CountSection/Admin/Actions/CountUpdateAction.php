<?php

namespace App\Structure\CountSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CountSection\Admin\Dto\CountUpdateDto;
use App\Structure\CountSection\Admin\Tasks\CountUpdateTask;

class CountUpdateAction extends BaseAction
{
    /**
     * Обновляем значение в таблице смета по id
     *
     * @param CountUpdateDto $dto
     * @return bool
     */
    public function run(CountUpdateDto $dto): bool
    {   
        $result = $this->task(CountUpdateTask::class)->run($dto);
        
        return $result;

    }
}
