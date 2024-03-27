<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use Illuminate\Support\Facades\Auth;
use App\Structure\DeloSection\User\Tasks\DeloSelectCorrTask;

class DeloCorrAction extends BaseAction
{
    /**
     * Получаем всю информацию из таблицы documents
     *
     * @param string $variant
     * @return
     */
    public function SelectInfo(): array
    {   
        return [
            'corr' => $this->task(DeloSelectCorrTask::class)->SelectAll(),
            'role' => Auth::user()->role(),
        ];
    }
}

