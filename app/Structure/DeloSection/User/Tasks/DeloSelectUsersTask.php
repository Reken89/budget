<?php

namespace App\Structure\DeloSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UserSection\Auth\Models\User;

class DeloSelectUsersTask extends BaseTask
{
    /**
     * Возвращает список пользователей
     * Программы "Делопроизводство"
     *
     * @param
     * @return
     */
    public function SelectAll()
    {
        $result = User::select('id', 'name') 
            ->where('role', 'delo')  
            ->orderBy('name', 'asc')     
            ->get()
            ->toArray();
        return $result;
    }
}  

