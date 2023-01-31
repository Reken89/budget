<?php

namespace App\Structure\BuildSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\BuildSection\Admin\Dto\BuildAddDto;
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
            for ($i = $dto->mounth ; $i < 13 ; $i++){
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
        
        foreach ($mounth as $moun) {
            $work->build()->create([
                'user_id'      => $dto->user_id,
                'fu_sum'       => $dto->fu_sum,
                'build_sum'    => 0,
                'contract_sum' => 0,
                'kassa_sum'    => 0,
                'fact_sum'     => 0,
                'number'       => 'Нет данных',
                'period'       => 'Нет данных',
                'creator'      => 'Администрация',
                'year'         => $dto->year,
                'mounth'       => $moun,
            ]);           
        }
        
        return $work == true ? true : false;  

    }
}