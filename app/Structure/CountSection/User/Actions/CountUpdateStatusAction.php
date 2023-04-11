<?php

namespace App\Structure\CountSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CountSection\Admin\Models\Count;

class CountUpdateStatusAction extends BaseAction
{
    /**
     * Меняем статус в таблице СМЕТА
     * Закрываем возможность редактировать таблицу для ЦБ
     *
     * @param int $variant, int $year
     * @return bool
     */
    public function run(int $variant, int $year): bool
    {   
        if ($variant == "1"){
            $users = [35, 25, 27, 28];
        } elseif ($variant == "2"){
            $users = [29, 26];
        } elseif ($variant == "3"){
            $users = [9, 10, 11, 12, 13, 14, 15];
        } elseif ($variant == "4"){
            $users = [18, 19];
        } elseif ($variant == "5"){
            $users = [8, 36];
        } elseif ($variant == "6"){
            $users = [23, 37, 38];
        }
        
        $result = Count::whereIn('user_id', $users)
            ->where('year', $year);
        $result->update([                
            'status' => 1,
        ]);
        
        return $result == true ? true : false; 
        
    }
}


