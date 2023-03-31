<?php

namespace App\Structure\ForecastSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\ForecastSection\Admin\Models\Forecastcommunal;

class ForecasUpdateCommunalTask extends BaseTask
{
    /**
     * Обновляем значения в таблице прогноза коммунальных услуг
     *
     * @param array $communal_one, array $communal_two, array $tarrifs, int $user
     * @return 
     */
    public function run(array $communal_one, array $communal_two, array $tarrifs, int $user): bool
    {   
        //Обновляем теплоснабжение
        $heat = Forecastcommunal::where('user_id', $user)
                ->where('chapter', 'heat');
        $heat->update([                
            'volume_one' => $communal_one['heat'],
            'volume_two' => $communal_two['heat'],
            'sum_one'    => $communal_one['heat'] * $tarrifs[0]['tarrif_one'],
            'sum_two'    => $communal_two['heat'] * $tarrifs[0]['tarrif_two'],
        ]);
        
        //Обновляем водоснабжение
        $heat = Forecastcommunal::where('user_id', $user)
                ->where('chapter', 'water');
        $heat->update([                
            'volume_one' => $communal_one['water'],
            'volume_two' => $communal_two['water'],
            'sum_one'    => $communal_one['water'] * $tarrifs[1]['tarrif_one'],
            'sum_two'    => $communal_two['water'] * $tarrifs[1]['tarrif_two'],
        ]);
        
        //Обновляем водоотведение
        $heat = Forecastcommunal::where('user_id', $user)
                ->where('chapter', 'drainage');
        $heat->update([                
            'volume_one' => $communal_one['drainage'],
            'volume_two' => $communal_two['drainage'],
            'sum_one'    => $communal_one['drainage'] * $tarrifs[2]['tarrif_one'],
            'sum_two'    => $communal_two['drainage'] * $tarrifs[2]['tarrif_two'],
        ]);
        
        //Обновляем энергоснабжение
        $heat = Forecastcommunal::where('user_id', $user)
                ->where('chapter', 'energy');
        $heat->update([                
            'volume_one' => $communal_one['energy'],
            'volume_two' => $communal_two['energy'],
            'sum_one'    => $communal_one['energy'] * $tarrifs[3]['tarrif_one'],
            'sum_two'    => $communal_two['energy'] * $tarrifs[3]['tarrif_two'],
        ]);
        
        //Обновляем мусор
        $heat = Forecastcommunal::where('user_id', $user)
                ->where('chapter', 'trash');
        $heat->update([                
            'volume_one' => $communal_one['trash'],
            'volume_two' => $communal_two['trash'],
            'sum_one'    => $communal_one['trash'] * $tarrifs[4]['tarrif_one'],
            'sum_two'    => $communal_two['trash'] * $tarrifs[4]['tarrif_two'],
        ]);
        
        //Обновляем негативку
        $heat = Forecastcommunal::where('user_id', $user)
                ->where('chapter', 'negative');
        $heat->update([                
            'volume_one' => $communal_one['negative'],
            'volume_two' => $communal_two['negative'],
            'sum_one'    => $communal_one['negative'] * $tarrifs[5]['tarrif_one'],
            'sum_two'    => $communal_two['negative'] * $tarrifs[5]['tarrif_two'],
        ]);
        
        return $heat == true ? true : false; 

    }   
   
}

