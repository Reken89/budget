<?php

namespace App\Structure\CountSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CountSection\Admin\Dto\CountUpdateDto;
use App\Structure\CountSection\Admin\Tasks\CountUpdateTask;
use App\Structure\CountSection\Admin\Tasks\CountSelectForMainTask;
use App\Structure\CountSection\Admin\Tasks\CountMainUpdateTask;

class CountUpdateAction extends BaseAction
{
    /**
     * Обновляем значение в таблице смета по id
     *
     * @param CountUpdateDto $dto
     * @return bool
     */
    public function run(CountUpdateDto $dto)
    {   
        $this->task(CountUpdateTask::class)->run($dto);
        
        $main = $this->task(CountSelectForMainTask::class)->run($dto);
        $this->task(CountMainUpdateTask::class)->run($dto->main_id, $main);

    }
}
