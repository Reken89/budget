<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Models\Ofs;

class OfsUpdateStatusTask extends BaseTask
{
    /**
     * Обновляет статус в таблице Ofs по заданным параметрам
     *
     * @param string $user, string $year, string $mounth, string $chapter
     * @return bool
     */
    public function run(string $user, string $year, string $mounth, string $chapter): bool
    {                
        $result = Ofs::where('user_id', $user)
            ->where('year', $year)  
            ->where('mounth', $mounth)
            ->where('chapter', $chapter)
            ->update([
                'status' => 1,
            ]);    
        
        return $result == true ? true : false;
    }
    
}
