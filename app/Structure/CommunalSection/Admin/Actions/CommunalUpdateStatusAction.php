<?php

namespace App\Structure\CommunalSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\Admin\Tasks\SelectMailTask;
use App\Structure\CommunalSection\User\Models\Communal;

class CommunalUpdateStatusAction extends BaseAction
{
    /**
     * Обновляет статус в таблице communal по id
     * Отправка уведомления по email
     *
     * @param int $id
     * @return 
     */
    public function run(int $id)
    {
        Communal::find($id)
        ->update([                  
            'status' => 2,
        ]);

        $info = $this->task(SelectMailTask::class)->SelectMail($id);
        mail($info['email'], "Портал коммунальные услуги", "Вам согласовали редактирование данных","FROM: portal@kostamail.ru \r\n");
    }
}

