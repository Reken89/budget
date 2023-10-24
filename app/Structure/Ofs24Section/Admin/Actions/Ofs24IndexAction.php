<?php

namespace App\Structure\Ofs24Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\Admin\Dto\OfsIndexDto;
use App\Structure\Ofs24Section\Admin\Tasks\Ofs24SelectAllTask;
use App\Structure\Ofs24Section\Admin\Tasks\Ofs24SelectTotalTask;
use App\Structure\Ofs24Section\Admin\Tasks\Ofs24StatusTask;

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
        if (count($dto->year) == '1' AND count($dto->mounth) == '1' AND count($dto->user) == '1' AND count($dto->chapter) == '1'){
            $status = $this->task(Ofs24StatusTask::class)->run($dto);
            $variant = "one";           
        } else {
            $variant = "many";
            $status = "no";
        }
        
        $result = $this->task(Ofs24SelectAllTask::class)->run($dto);
        $total = $this->task(Ofs24SelectTotalTask::class)->run($dto);
        
        $info = [
            'info'    => 'yes',
            'result'  => $result,
            'total'   => $total,
            'status'  => $status,
            'variant' => $variant,
        ];
        
        return $info;

    }
}
