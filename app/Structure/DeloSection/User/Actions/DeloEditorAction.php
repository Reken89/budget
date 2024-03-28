<?php
namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use Illuminate\Support\Facades\Auth;
use App\Structure\DeloSection\User\Tasks\DeloSelectDocTask;
use App\Structure\DeloSection\User\Tasks\DeloSelectNpaTask;
use App\Structure\DeloSection\User\Tasks\DeloSelectUsersTask;
use App\Structure\DeloSection\User\Tasks\DeloSelectCorrTask;

class DeloEditorAction extends BaseAction
{
    /**
     * Получаем информацию из таблицы documents
     *
     * @param int $id
     * @return
     */
    public function SelectInfo(int $id): array
    {   
        return [
            'doc' => $this->task(DeloSelectDocTask::class)->SelectDoc($id),
            'role' => Auth::user()->role(),
            'name' => Auth::user()->name(),
            'npa'       => $this->task(DeloSelectNpaTask::class)->SelectAll(),
            'users'     => $this->task(DeloSelectUsersTask::class)->SelectAll(),
            'corr'      => $this->task(DeloSelectCorrTask::class)->SelectAll(),
        ];
    }
}
