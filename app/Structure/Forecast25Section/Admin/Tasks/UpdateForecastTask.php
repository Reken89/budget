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
            'date'       => date('Y-m-d'),
        ]);
        
        return $result == true ? true : false; 
    }
    
     /**
     * Обновляем значения в таблице forecast25
     * Обновляем первое полугодие
     *
     * @param array $communal, array $tarrifs, int $user, string $section
     * @return bool
     */
    public function ModifyOne(array $communal, array $tarrifs, int $user, string $section): bool
    {    
        $sum = $communal[$section] * $tarrifs[$this->key[$section]]['tarrif_one'];
        
        $result = Forecast::where('user_id', $user)
                ->where('title', $section);
        $result->update([                
            'volume_one' => Forecast::raw("volume_one + $communal[$section]"),
            'sum_one' => Forecast::raw("sum_one + $sum"),
        ]);
        
        return $result == true ? true : false; 
    }
    
     /**
     * Обновляем значения в таблице forecast25
     * Обновляем второе полугодие
     *
     * @param array $communal, array $tarrifs, int $user, string $section
     * @return bool
     */
    public function ModifyTwo(array $communal, array $tarrifs, int $user, string $section): bool
    {    
        $sum = $communal[$section] * $tarrifs[$this->key[$section]]['tarrif_two'];
        
        $result = Forecast::where('user_id', $user)
                ->where('title', $section);
        $result->update([    
            'volume_two' => Forecast::raw("volume_two + $communal[$section]"),
            'sum_two' => Forecast::raw("sum_two + $sum"),
        ]);
        
        return $result == true ? true : false; 
    }
}


