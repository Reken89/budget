<?php

namespace App\Structure\Forecast25Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Forecast25Section\Admin\Models\Forecast;

class UpdateForecastTask extends BaseTask
{
    private array $key = [
        'heat'     => 0,
        'water'    => 1,
        'drainage' => 2,
        'energy'   => 3,
        'trash'    => 4,
        'negative' => 5
    ];
    
    /**
     * Обновляем значения в таблице forecast25
     *
     * @param array $communal_one, array $communal_two, array $tarrifs, int $user, string $section
     * @return bool
     */
    public function UpdateInfo(array $communal_one, array $communal_two, array $tarrifs, int $user, string $section): bool
    {    
        $result = Forecast::where('user_id', $user)
                ->where('title', $section);
        $result->update([                
            'volume_one' => $communal_one[$section],
            'volume_two' => $communal_two[$section],
            'sum_one'    => $communal_one[$section] * $tarrifs[$this->key[$section]]['tarrif_one'],
            'sum_two'    => $communal_two[$section] * $tarrifs[$this->key[$section]]['tarrif_two'],
        ]);
        
        return $result == true ? true : false; 
    }
}


