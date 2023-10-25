<?php

namespace App\Structure\Ofs24Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs24Section\Admin\Models\Ofs24;
use App\Structure\Ofs24Section\User\Dto\Ofs24ResetDto;

class Ofs24ResetTask extends BaseTask
{
    /**
     * Возвращает выбранные значения из таблицы ofs24
     *
     * @param Ofs24ResetDto $dto
     * @return array
     */
    public function selectvalue(Ofs24ResetDto $dto): array
    {
        $info = Ofs24::select('fact_all', 'kassa_all')
            ->where('user_id', $dto->user_id)
            ->where('mounth', $dto->mounth - 1) 
            ->where('chapter', $dto->chapter)
            ->where('ekr_id', $dto->ekr_id)    
            ->first()
            ->toArray();
        
        return $info;                
    }
    
    /**
     * Обновляет значения полей fact, kassa в таблице Ofs
     *
     * @param Ofs24ResetDto $dto, array $value
     * @return bool
     */
    public function reset(Ofs24ResetDto $dto, array $value): bool
    {        
        $result = Ofs24::where('user_id', $dto->user_id)
            ->where('mounth', $dto->mounth) 
            ->where('chapter', $dto->chapter)
            ->where('ekr_id', $dto->ekr_id)
            ->update([                
                'fact_all'         => $value['fact_all'],
                'fact_mounth'      => 0,
                'kassa_all'        => $value['kassa_all'],
                'kassa_mounth'     => 0,
            ]);        
        
        return $result == true ? true : false;

    }
}

