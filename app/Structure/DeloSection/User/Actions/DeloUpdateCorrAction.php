<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DeloSection\User\Models\Correspondent;

class DeloUpdateCorrAction extends BaseAction
{
    /**
     * Обновляем значения в таблице correspondents
     *
     * @param int $id, string $title
     * @return bool
     */
    public function UpdateCorr(int $id, string $title): bool
    {   
        $result = Correspondent::find($id)
            ->update([                
                 'title' => $title
            ]);
        
        return $result == true ? true : false;
    }
}

