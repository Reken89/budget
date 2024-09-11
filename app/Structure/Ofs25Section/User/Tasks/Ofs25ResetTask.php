<?php

namespace App\Structure\Ofs25Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs25Section\User\Models\Ofs251;
use App\Structure\Ofs25Section\User\Models\Ofs252;
use App\Structure\Ofs25Section\User\Models\Ofs253;
use App\Structure\Ofs25Section\User\Models\Ofs254;
use App\Structure\Ofs25Section\User\Models\Ofs255;
use App\Structure\Ofs25Section\User\Dto\Ofs25ResetDto;

class Ofs25ResetTask extends BaseTask
{
    /**
     * Возвращает выбранные значения из таблицы ofs
     *
     * @param Ofs25ResetDto $dto
     * @return array
     */
    public function SelectInfo(Ofs25ResetDto $dto): array
    {
        if($dto->chapter == "1"){
            $ofs = new Ofs251;
        }
        if($dto->chapter == "2"){
            $ofs = new Ofs252;
        }
        if($dto->chapter == "3"){
            $ofs = new Ofs253;
        }
        if($dto->chapter == "4"){
            $ofs = new Ofs254;
        }
        if($dto->chapter == "5"){
            $ofs = new Ofs255;
        }
        
        $info = $ofs::select('fact_all', 'kassa_all')
            ->where('user_id', $dto->user_id)
            ->where('mounth', $dto->mounth - 1) 
            ->where('ekr_id', $dto->ekr_id)    
            ->first()
            ->toArray();
        
        return $info;                
    }
    
    /**
     * Обновляет значения полей fact, kassa в таблице Ofs
     *
     * @param Ofs25ResetDto $dto, array $value
     * @return bool
     */
    public function ResetInfo(Ofs25ResetDto $dto, array $value): bool
    {       
        if($dto->chapter == "1"){
            $ofs = new Ofs251;
        }
        if($dto->chapter == "2"){
            $ofs = new Ofs252;
        }
        if($dto->chapter == "3"){
            $ofs = new Ofs253;
        }
        if($dto->chapter == "4"){
            $ofs = new Ofs254;
        }
        if($dto->chapter == "5"){
            $ofs = new Ofs255;
        }
        
        $result = $ofs::where('user_id', $dto->user_id)
            ->where('mounth', $dto->mounth) 
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

