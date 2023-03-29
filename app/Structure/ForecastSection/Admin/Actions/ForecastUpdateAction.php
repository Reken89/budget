<?php

namespace App\Structure\ForecastSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ForecastSection\Admin\Models\Forecasttarrif;
use App\Structure\ForecastSection\Admin\Dto\ForecastUpdateDto;

class ForecastUpdateAction extends BaseAction
{
    /**
     * Обновляет значения в таблице тарифов для прогноза
     *
     * @param ForecastUpdateDto $dto
     * @return bool
     */
    public function run(ForecastUpdateDto $dto): bool
    {
        $update = Forecasttarrif::find($dto->id)
            ->update([                
                 'tarrif_one' => $dto->tarrif_one,
                 'tarrif_two' => $dto->tarrif_two,
            ]);            
        
        return $update == true ? true : false;

    }
}
