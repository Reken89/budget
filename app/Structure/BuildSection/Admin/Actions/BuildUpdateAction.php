<?php

namespace App\Structure\BuildSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\BuildSection\Admin\Dto\BuildUpdateDto;
use App\Structure\BuildSection\Admin\Models\Repair;

class BuildUpdateAction extends BaseAction
{
    /**
     * Обновляет значения в таблицах repairs и work по id
     * 
     * @param BuildUpdateDto $dto
     * @return bool
     */
    public function run(BuildUpdateDto $dto)
    {   
        $result = Repair::find($dto->id)
            ->update([                
                 'fu_sum' => $dto->fu_sum,
            ]);
        
        return $result == true ? true : false;  
    }
}

