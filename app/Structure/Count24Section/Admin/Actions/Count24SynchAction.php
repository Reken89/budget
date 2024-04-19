<?php

namespace App\Structure\Count24Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count24Section\Admin\Tasks\Count24SelectTask;
use App\Structure\Count24Section\Admin\Tasks\Count24UpdateTask;

class Count24SynchAction extends BaseAction
{
    /**
     * Получаем информацию из таблицы forecast_communals
     * Записываем информацию в таблицу counts24
     *
     * @param 
     * @return
     */
    public function SynchCommunal(): bool
    {   
        $users = [8, 9, 10, 11, 12, 13, 14, 15, 16, 18, 19, 23,];
        $ekr_id = [26, 28, 29, 27, 30, 31, 25];
        
        foreach ($users as $user) {
            //Получаем значения прогноза
            $communals = $this->task(Count24SelectTask::class)->SelectCommunal($user);
            
            //Записываем значения прогноза в таблицу counts24
            for($i = 0 ; $i < 7 ; $i++){
                if($i !== 6){
                    $result = $this->task(Count24UpdateTask::class)->UpdateCommunal($ekr_id[$i], $user, $communals[$i]['sum_fu']);
                }else{
                    $result = $this->task(Count24UpdateTask::class)->UpdateCommunal($ekr_id[$i], $user, $communals[0]['sum_fu'] + $communals[1]['sum_fu'] + $communals[2]['sum_fu'] + $communals[3]['sum_fu'] + $communals[4]['sum_fu'] + $communals[5]['sum_fu']);
                }               
            }         
        }
              
        return $result == true ? true : false;     
    }
    
    /**
     * Получаем информацию из таблицы counts за 2025
     * Заполняем таблицу counts за 2026 и 2027 год
     *
     * @param 
     * @return
     */
    public function SynchYears(): bool
    {   
        $year = $this->task(Count24SelectTask::class)->SelectYear();
        $result = $this->task(Count24UpdateTask::class)->UpdateYears($year);
        return $result == true ? true : false;   
    }
}

