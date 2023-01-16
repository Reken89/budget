<?php

namespace App\Structure\OfsSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\User\Models\Ofs;

class OfsUpdateStatusAction extends BaseAction
{
    /**
     * Обновляет статусы в таблице ofs по заданным параметрам
     *
     * @param array $user, array $year, array $mounth, array $chapter
     * @return bool
     */
    public function run(array $user, array $year, array $mounth, array $chapter): bool
    {   
        $result = Ofs::whereIn('user_id', $user)
            ->whereIn('year', $year)  
            ->whereIn('mounth', $mounth)
            ->whereIn('chapter', $chapter)
            ->update([
                'status' => 2,
            ]);    
        
        return $result == true ? true : false;

    }
}
