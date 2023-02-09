<?php

namespace App\Structure\BuildSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\BuildSection\User\Dto\BuildAddDto;
use App\Structure\BuildSection\Admin\Models\Work;

class BuildAddAction extends BaseAction
{
    /**
     * Добавляет строки в таблицах repairs и work
     * 
     * @param BuildAddDto $dto
     * @return bool
     */
    public function run(BuildAddDto $dto)
    {   
        if ($dto->mounth < 12){
            $mounth = [];
            $key = -1;
            for ($i = $dto->mounth + 1 ; $i < 13 ; $i++){
                $key += 1;
                $mounth[$key] = $i;
            }
        } else {
            $mounth = [$dto->mounth];
        }
        
        $work = Work::create([
            'title'      => $dto->title,
            'ekr'        => $dto->ekr,
            'ekr_double' => $dto->ekr_double,
        ]);
        
        $work->build()->create([
            'user_id'      => $dto->user_id,
            'fu_sum'       => 0,
            'build_sum'    => 0,
            'contract_sum' => $dto->contract_sum,
            'kassa_sum'    => $dto->kassa_sum,
            'fact_sum'     => $dto->fact_sum,
            'number'       => $dto->number,
            'period'       => $dto->period,
            'creator'      => 'Централизованная бухгалтерия',
            'year'         => $dto->year,
            'mounth'       => $dto->mounth,
        ]); 
        
        if ($dto->mounth < 12){        
            foreach ($mounth as $moun) {
                $work->build()->create([
                    'user_id'      => $dto->user_id,
                    'fu_sum'       => 0,
                    'build_sum'    => 0,
                    'contract_sum' => $dto->contract_sum,
                    'kassa_sum'    => 0,
                    'fact_sum'     => 0,
                    'number'       => $dto->number,
                    'period'       => $dto->period,
                    'creator'      => 'Централизованная бухгалтерия',
                    'year'         => $dto->year,
                    'mounth'       => $moun,
                ]);           
            }      
        }
        
        return $work == true ? true : false;  

    }
}

