<?php

namespace App\Structure\CommunalSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Communal;
use App\Structure\CommunalSection\User\Dto\CommunalSendingDto;

class CommunalSendingTask extends BaseTask
{
    /**
     * Меняем статус строки на отправленно
     *
     * @param CommunalSendingDto $dto
     * @return
     */
    public function run(CommunalSendingDto $dto)
    {
        Communal::find($dto->id)
            ->update([                  
                'status' => 1,
            ]);

    }
}


