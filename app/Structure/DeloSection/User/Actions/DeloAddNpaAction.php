<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DeloSection\User\Models\Npa;

class DeloAddNpaAction extends BaseAction
{
    /**
     * Добавляем строку в таблицу npa
     *
     * @param string $title
     * @return bool
     */
    public function CreateNpa(string $title): bool
    {   
        $result = Npa::create([
            'title' => $title,
        ]);
        return $result == true ? true : false;
    }
}

