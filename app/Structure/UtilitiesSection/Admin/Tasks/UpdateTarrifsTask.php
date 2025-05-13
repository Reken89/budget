<?php

namespace App\Structure\UtilitiesSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Dto\UpdateTarrifsDto;
use App\Structure\UtilitiesSection\Admin\Models\Limit;

class UpdateTarrifsTask extends BaseTask
{
    /**
     * Обновление тарифов
     *
     * @param UpdateTarrifsDto $dto
     * @return bool
     */
    public function UpdateTarrifs(UpdateTarrifsDto $dto): bool
    {        
        $update = Limit::find($dto->id)
            ->update([                
                'tarrif_min' => $dto->tarrif_min,
                'tarrif_max' => $dto->tarrif_max,
                'date'       => date('Y-m-d'),
            ]);                    
        return $update == true ? true : false;
    }   
    
    /**
     * Обновляем один выбранный тариф
     *
     * @param array $tarrif
     * @return bool
     */
    public function UpdateOneTarrif(int $year, int $mounth, string $title, array $tarrif): bool
    {   
        $result = Limit::where('year', $year)
            ->where('mounth', $mounth) 
            ->where('title', $title);    
        $result->update([                
            'tarrif_min' => $tarrif['tarrif_min'],
            'tarrif_max' => $tarrif['tarrif_max'],
            'date'       => date('Y-m-d'),
        ]);
        return $result == true ? true : false;
    } 
}

