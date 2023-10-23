<?php

namespace App\Structure\CountSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CountSection\Admin\Models\Count;

class CountUpdateCommunalTask extends BaseTask
{
    /**
     * Обновляем значения в таблице СМЕТА
     *
     * @param array $communal, int $user
     * @return 
     */
    public function run(array $communal, int $user): bool
    {   
        //Обновляем теплоснабжение
        $heat = Count::where('user_id', $user)
            ->where('ekr_id', 26);
        $heat->update([                
            'sum_fu' => $communal[0]['sum_fu'],
        ]);
        
        //Обновляем водоснабжение
        $water = Count::where('user_id', $user)
            ->where('ekr_id', 28);
        $water->update([                
            'sum_fu' => $communal[1]['sum_fu'],
        ]);
        
        //Обновляем водоотведение
        $drainage = Count::where('user_id', $user)
            ->where('ekr_id', 29);
        $drainage->update([                
            'sum_fu' => $communal[2]['sum_fu'],
        ]);
        
        //Обновляем энергоснабжение
        $energy = Count::where('user_id', $user)
            ->where('ekr_id', 27);
        $energy->update([                
            'sum_fu' => $communal[3]['sum_fu'],
        ]);
        
        //Обновляем мусор
        $trash = Count::where('user_id', $user)
            ->where('ekr_id', 30);
        $trash->update([                
            'sum_fu' => $communal[4]['sum_fu'],
        ]);
        
        //Обновляем негативку
        $negative = Count::where('user_id', $user)
            ->where('ekr_id', 31);
        $negative->update([                
            'sum_fu' => $communal[5]['sum_fu'],
        ]);
        
        //Обновляем коммунальные услуги (ИТОГ)
        $total = Count::where('user_id', $user)
            ->where('ekr_id', 25);
        $total->update([                
            'sum_fu' => $communal[0]['sum_fu'] + 
                $communal[1]['sum_fu'] + 
                $communal[2]['sum_fu'] + 
                $communal[3]['sum_fu'] + 
                $communal[4]['sum_fu'] + 
                $communal[5]['sum_fu'],
        ]);
        
        return $heat == true ? true : false; 

    }   
   
}




