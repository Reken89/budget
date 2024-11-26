<?php

namespace App\Structure\AdminSection\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\UserSection\Auth\Models\User;

class UserSelectAction extends BaseAction
{
    /**
     * Возвращает таблицу users
     *
     * @param int $year
     * @return array
     */
    public function SelectUsers(): array
    {       
        $info = User::select()
            ->get() 
            ->toArray();
        return $info;  
    }
}

