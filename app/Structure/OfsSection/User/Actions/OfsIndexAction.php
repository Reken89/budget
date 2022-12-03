<?php

namespace App\Structure\OfsSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\User\Dto\OfsIndexDto;

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
        if ($dto->info == "no"){
            $info = "no";
        } else {
            $info = "yes";
        }
   
        $compilation = [
            "info"   => $info,
        ];
        
        return $compilation;

    }
}

