<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DeloSection\User\Dto\DeloDocAddDto;
use App\Structure\DeloSection\User\Models\Document;

class DeloExaminAction extends BaseAction
{
    /**
     * Выполняем поиск номера в таблице documents
     *
     * @param DeloDocAddDto $dto
     * @return bool
     */
    public function ExaminNumber(DeloDocAddDto $dto): bool
    {
        $result = Document::select()      
            ->where('number', $dto->number)   
            ->where('type', $dto->variant)     
            ->first();
        return $result == true ? true : false;   
    }
}

