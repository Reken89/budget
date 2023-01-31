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
        if ($dto->mounth < 12){
            $mounth = [];
            $key = -1;
            for ($i = $dto->mounth ; $i < 13 ; $i++){
                $key += 1;
                $mounth[$key] = $i;
            }
        } else {
            $mounth = [$dto->mounth];
        }
        
        $result_one = Repair::find($dto->id);
        $result = Repair::where('work_id', $dto->work_id)
                ->whereIn('mounth', $mounth)
                ->where('year', $dto->year)
                ->where('user_id', $dto->user_id);
        $result->update([                
            'fu_sum' => $dto->fu_sum,
        ]);
        $result_one->work()->update([
            'ekr'        => $dto->ekr,
            'ekr_double' => $dto->ekr_double,
            'title'      => $dto->title,
        ]);
        
        return $result == true ? true : false;  
    }
}

