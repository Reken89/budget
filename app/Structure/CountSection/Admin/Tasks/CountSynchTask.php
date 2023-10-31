<?php

namespace App\Structure\CountSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CountSection\Admin\Models\Count;

class CountSynchTask extends BaseTask
{
    /**
     * Получаем все строки из таблицы count за 2024 год
     *
     * @param int $user
     * @return array
     */
    public function select(int $user): array
    {        
        $info = Count::select()
            ->where('user_id', $user)    
            ->where('year', 2024)    
            ->get()
            ->toArray();
        
        return $info;  
    }
    
    /**
     * Обновляем значения в 2025 и 2026 годах
     *
     * @param array $info, int $user
     * @return array
     */
    public function update(array $info, int $user)
    {      
        $year = [2025, 2026];
        
        foreach ($info as $inf){
            if($inf['sum_fu'] == 0){
                //Заглушка
            } else {

                Count::where('user_id', $user)
                ->whereIn('year', $year)
                ->where('ekr_id', $inf['ekr_id'])        
                ->update([
                    'sum_fu' => $inf['sum_fu'],
                ]);
            }    
        } 
    }
}

