<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DeloSection\User\Models\Correspondent;

class DeloAddCorrAction extends BaseAction
{
    /**
     * Добавляем строку в таблицу correspondents
     *
     * @param string $title
     * @return bool
     */
    public function CreateCorr(string $title): bool
    {   
        $result = Correspondent::create([
            'title' => $title,
        ]);
        return $result == true ? true : false;
    }
}
