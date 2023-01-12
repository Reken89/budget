<?php

namespace App\Structure\OfsSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\Admin\Dto\OfsIndexDto;
use App\Structure\OfsSection\Admin\Tasks\OfsSelectAllTask;
use App\Structure\OfsSection\Admin\Tasks\OfsNumberMaxTask;

class OfsIndexAction extends BaseAction
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
            $variant = "one";           
        } else {
            $variant = "many";
        }
        
        $result = $this->task(OfsSelectAllTask::class)->run($dto);
        $number = $this->task(OfsNumberMaxTask::class)->run();
        
        $info = [
            'info'    => 'yes',
            'result'  => $result,
            'number'  => $number,
            'variant' => $variant,
        ];
        
        return $info;

    }
}

