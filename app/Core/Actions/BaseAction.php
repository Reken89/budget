<?php

namespace App\Core\Actions;

use App\Core\Task\BaseTask;

abstract class BaseAction
{
    /**
     * Возращает объект Task
     *
     * @param string $class
     * @return BaseTask
     */
    public function task(string $class): BaseTask
    {
        return new $class;
    }
}



