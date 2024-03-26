<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use Illuminate\Support\Facades\Auth;
use App\Structure\DeloSection\User\Tasks\DeloSelectTask;
use App\Structure\DeloSection\User\Tasks\DeloSelectNpaTask;
use App\Structure\DeloSection\User\Tasks\DeloSelectUsersTask;
use App\Structure\DeloSection\User\Tasks\DeloSelectCorrTask;

class DeloInfoAction extends BaseAction
{
    /**
     * Получаем всю информацию из таблицы documents
     *
     * @param string $variant
     * @return
     */
    public function SelectAll(string $variant): array
    {   
        return [
            'documents' => $this->task(DeloSelectTask::class)->SelectAll($variant),
            'npa'       => $this->task(DeloSelectNpaTask::class)->SelectAll(),
            'users'     => $this->task(DeloSelectUsersTask::class)->SelectAll(),
            'corr'      => $this->task(DeloSelectCorrTask::class)->SelectAll(),
            'role'      => Auth::user()->role(),
            'name'      => Auth::user()->name(),
            'variant'   => $variant
        ];
    }
}
