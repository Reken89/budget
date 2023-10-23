<?php

namespace App\Structure\Ofs24Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\Admin\Dto\OfsIndexDto;
use App\Structure\Ofs24Section\Admin\Tasks\Ofs24SelectAllTask;

class Ofs24IndexAction extends BaseAction
{
    /**
     * Возвращает ОФС по заданным параметрам
     * Возвращает ИТОГИ ОФС
     *
     * @param OfsIndexDto $dto
     * @return array
     */
    public function run(OfsIndexDto $dto): array
    {   
        
        $result = $this->task(Ofs24SelectAllTask::class)->run($dto);
        
        $info = [
            'info'   => 'yes',
            'result' => $result,
            'status' => 2,
        ];
        
        return $info;

    }
}
