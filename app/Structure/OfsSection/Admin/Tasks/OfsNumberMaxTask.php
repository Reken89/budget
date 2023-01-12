<?php

namespace App\Structure\OfsSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Models\Ekr;

class OfsNumberMaxTask extends BaseTask
{
    /**
     * Возвращает MAX значение поля number из таблицы Ekr
     *
     * @param 
     * @return int
     */
    public function run(): int
    {
        return Ekr::max('number');               
    }
}

