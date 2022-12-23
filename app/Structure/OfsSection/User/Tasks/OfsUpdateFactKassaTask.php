<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Models\Ofs;

class OfsUpdateFactKassaTask extends BaseTask
{
    /**
     * Обновляет значение поля fact в таблице Ofs по id
     *
     * int $id, float $value
     * @return bool
     */
    public function fact(int $id, float $value): bool
    {                
        $result = Ofs::where('id', $id)
            ->where('fact_mounth', '!=', $value)    
            ->update([
                'fact_all' => Ofs::raw("fact_all + $value"),
            ]);    
        
        return $result == true ? true : false;
    }
    
     /**
     * Обновляет значение поля kassa в таблице Ofs по id
     *
     * int $id, float $value
     * @return bool
     */
    public function kassa(int $id, float $value): bool
    {                
        $result = Ofs::where('kassa_mounth', '!=', $value)
            ->where('id', $id)
            ->update([
                'kassa_all' => Ofs::raw("kassa_all + $value"),
            ]);    
        
        return $result == true ? true : false;
    }
}

