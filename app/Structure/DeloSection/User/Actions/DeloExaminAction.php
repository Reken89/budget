<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DeloSection\User\Models\Document;

class DeloExaminAction extends BaseAction
{
    /**
     * Выполняем поиск номера в таблице documents
     *
     * @param string $number, string $variant
     * @return bool
     */
    public function ExaminNumber(string $number, string $variant): bool
    {
        $result = Document::select()      
            ->where('number', $number)   
            ->where('type', $variant)
            ->whereDate('date', '>=', '2025-01-01')
            ->first();
        return $result == true ? true : false;   
    }
}

