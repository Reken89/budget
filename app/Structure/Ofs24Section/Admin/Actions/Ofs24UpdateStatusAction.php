<?php

namespace App\Structure\Ofs24Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs24Section\Admin\Models\Ofs24;

class Ofs24UpdateStatusAction extends BaseAction
{
    /**
     * Обновляет статусы в таблице ofs24 по заданным параметрам
     *
     * @param array $user, array $year, array $mounth, array $chapter
     * @return bool
     */
    public function run(array $user, array $year, array $mounth, array $chapter): bool
    {   
        $result = Ofs24::whereIn('user_id', $user)
            ->whereIn('year', $year)  
            ->whereIn('mounth', $mounth)
            ->whereIn('chapter', $chapter)
            ->update([
                'status' => 2,
            ]);    
        
        return $result == true ? true : false;

    }
}
