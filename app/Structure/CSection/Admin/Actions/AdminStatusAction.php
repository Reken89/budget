<?php

namespace App\Structure\CSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CSection\Admin\Dto\AdminStatusDto;
use App\Structure\CSection\Admin\Models\TableOne;

class AdminStatusAction extends BaseAction
{
    /**
     * Обновляем статус
     *
     * @param AdminStatusDto $dto
     * @return 
     */
    public function UpdateStatus(AdminStatusDto $dto)
    {   
        $status = TableOne::select('status')
            ->where('user_id', $dto->user)    
            ->where('year', $dto->year)  
            ->where('mounth', $dto->mounth)     
            ->first()
            ->toArray();
        
        $meaning = $status['status'] == "2" ? 1 : 2;
        
        $result = TableOne::where('year', $dto->year) 
            ->where('user_id', $dto->user) 
            ->where('mounth', $dto->mounth) 
            ->update([                
                'status' => $meaning,
            ]);
        
        return $result == true ? true : false;

    }
}
