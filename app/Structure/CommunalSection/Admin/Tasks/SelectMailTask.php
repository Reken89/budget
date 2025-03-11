<?php

namespace App\Structure\CommunalSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use Illuminate\Database\Eloquent\Builder;
use App\Structure\UserSection\Auth\Models\User;

class SelectMailTask extends BaseTask
{
    /**
     * Возвращает адрес электронной почты по id записи в таблице communal
     *
     * @param int $id
     * @return array
     */
    public function SelectMail(int $id): array
    {        
        $info = User::select('id', 'email')
            ->whereHas('communal', function (Builder $query) use ($id) {
                $query->where('communals.id', $id);
            })
            ->first()
            ->toArray();
        
        return $info;  

    }
}
