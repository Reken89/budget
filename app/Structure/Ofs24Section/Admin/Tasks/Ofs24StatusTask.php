<?php

namespace App\Structure\Ofs24Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs24Section\Admin\Models\Ofs24;
use App\Structure\OfsSection\Admin\Dto\OfsIndexDto;

class Ofs24StatusTask extends BaseTask
{
    /**
     * Возвращает статус учреждения по заданным параметрам
     *
     * @param OfsIndexDto $dto
     * @return int
     */
    public function run(OfsIndexDto $dto): int
    {
        $status = Ofs24::whereIn('user_id', $dto->user)    
            ->whereIn('year', $dto->year)
            ->whereIn('mounth', $dto->mounth) 
            ->whereIn('chapter', $dto->chapter)
            ->max('status');    
        
        return $status;
    }
}
