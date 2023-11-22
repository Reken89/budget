<?php

namespace App\Structure\DevSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Communal;
use App\Structure\DevSection\Admin\Dto\DevChangeDto;

class DevUpdateTask extends BaseTask
{
    /**
     * Обновляет значения таблицы communals по id
     *
     * @param string $id, int $status
     * @return bool
     */
    public function status(string $id, int $status): bool
    {
        $result = Communal::find($id)
            ->update([                
                 'status' => $status
            ]);
        
        return $result == true ? true : false;
    }
    
    /**
     * Обновляет значения таблицы communals по id
     *
     * @param DevChangeDto $dto
     * @return bool
     */
    public function change(DevChangeDto $dto): bool
    {
        if($dto->service == "heat"){
            $result = Communal::find($dto->id)
            ->update([                
                'heat-volume' => $dto->volume,
                'heat-sum'    => $dto->sum
            ]);
        } elseif ($dto->service == "drainage") {
            $result = Communal::find($dto->id)
            ->update([                
                'drainage-volume' => $dto->volume,
                'drainage-sum'    => $dto->sum
            ]);       
        } elseif ($dto->service == "negative") {
            $result = Communal::find($dto->id)
            ->update([                
                'negative-volume' => $dto->volume,
                'negative-sum'    => $dto->sum
            ]);
        } elseif ($dto->service == "water") {
            $result = Communal::find($dto->id)
            ->update([                
                'water-volume' => $dto->volume,
                'water-sum'    => $dto->sum
            ]);
        } elseif ($dto->service == "power") {
            $result = Communal::find($dto->id)
            ->update([                
                'power-volume' => $dto->volume,
                'power-sum'    => $dto->sum
            ]);
        } elseif ($dto->service == "trash") {
            $result = Communal::find($dto->id)
            ->update([                
                'trash-volume' => $dto->volume,
                'trash-sum'    => $dto->sum
            ]);
        }
        
        return $result == true ? true : false;
    }   
}
