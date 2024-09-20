<?php

namespace App\Structure\Ofs2024Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs2024Section\User\Models\Ofs241;
use App\Structure\Ofs2024Section\User\Models\Ofs242;
use App\Structure\Ofs2024Section\User\Models\Ofs243;
use App\Structure\Ofs2024Section\User\Models\Ofs244;
use App\Structure\Ofs2024Section\User\Models\Ofs245;
use App\Structure\Ofs2024Section\User\Dto\Ofs2024ResetDto;

class Ofs2024ResetTask extends BaseTask
{
    /**
     * Возвращает выбранные значения из таблицы ofs
     *
     * @param Ofs2024ResetDto $dto
     * @return array
     */
    public function SelectInfo(Ofs2024ResetDto $dto): array
    {
        if($dto->chapter == "1"){
            $ofs = new Ofs241;
        }
        if($dto->chapter == "2"){
            $ofs = new Ofs242;
        }
        if($dto->chapter == "3"){
            $ofs = new Ofs243;
        }
        if($dto->chapter == "4"){
            $ofs = new Ofs244;
        }
        if($dto->chapter == "5"){
            $ofs = new Ofs245;
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
     * @param Ofs2024ResetDto $dto, array $value
     * @return bool
     */
    public function ResetInfo(Ofs2024ResetDto $dto, array $value): bool
    {       
        if($dto->chapter == "1"){
            $ofs = new Ofs241;
        }
        if($dto->chapter == "2"){
            $ofs = new Ofs242;
        }
        if($dto->chapter == "3"){
            $ofs = new Ofs243;
        }
        if($dto->chapter == "4"){
            $ofs = new Ofs244;
        }
        if($dto->chapter == "5"){
            $ofs = new Ofs245;
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


