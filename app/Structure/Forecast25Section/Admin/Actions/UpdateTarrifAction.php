<?php

namespace App\Structure\Forecast25Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Forecast25Section\Admin\Dto\UpdateDto;
use App\Structure\Forecast25Section\Admin\Models\Tarrif;

class UpdateTarrifAction extends BaseAction
{
    /**
     * Обновление тарифа
     *
     * @param UpdateDto $dto
     * @return bool
     */
    public function UpdateTarrif(UpdateDto $dto): bool
    {        
        $update = Tarrif::find($dto->id)
            ->update([                
                'tarrif_one' => $dto->tarrif_one,
                'tarrif_two' => $dto->tarrif_two,
                'date'       => date('Y-m-d'),
            ]);                    
        return $update == true ? true : false;
    }   
}
