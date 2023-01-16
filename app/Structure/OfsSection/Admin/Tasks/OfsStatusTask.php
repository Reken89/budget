<?php

namespace App\Structure\OfsSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Models\Ofs;
use App\Structure\OfsSection\Admin\Dto\OfsIndexDto;

class OfsStatusTask extends BaseTask
{
    /**
     * Возвращает статус учреждения по заданным параметрам
     *
     * @param OfsIndexDto $dto
     * @return int
     */
    public function run(OfsIndexDto $dto): int
    {
        $status = Ofs::whereIn('user_id', $dto->user)    
            ->whereIn('year', $dto->year)
            ->whereIn('mounth', $dto->mounth) 
            ->whereIn('chapter', $dto->chapter)
            ->max('status');    
        
        return $status;
    }
}
