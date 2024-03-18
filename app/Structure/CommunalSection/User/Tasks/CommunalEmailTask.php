<?php

namespace App\Structure\CommunalSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Communal;
use App\Structure\UserSection\Auth\Models\User;

class CommunalEmailTask extends BaseTask
{
    /**
     * Получаем email пользователя и месяц по id
     * Отправляем письмо в ФЭУ
     *
     * @param string $id
     * @return
     */
    public function sendEmail(string $id)
    {
        $info = Communal::select('user_id', 'mounth', 'year')
            ->where('id', $id)
            ->first();
        
        $user_info = User::select('name', 'email')
            ->where('id', $info['user_id'])
            ->first();
        $name = $user_info['name'];
        $year = $info['year'];
        
        $mounths = [
            '1'  => 'январь',
            '2'  => 'февраль',
            '3'  => 'март',
            '4'  => 'апрель',
            '5'  => 'май',
            '6'  => 'июнь',
            '7'  => 'июль',
            '8'  => 'август',
            '9'  => 'сентябрь',
            '10' => 'октябрь',
            '11' => 'ноябрь',
            '12' => 'декабрь'
        ];
        
        $mounth = $mounths[$info['mounth']];
        
        mail('portal@kostamail.ru', "Запрос на редактирование", "$name просит открыть на редактирование информацию за $mounth месяц $year года!","FROM: portal@kostamail.ru \r\n");

    }
}

