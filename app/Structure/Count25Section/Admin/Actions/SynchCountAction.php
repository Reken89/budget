<?php

namespace App\Structure\Count25Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count25Section\Admin\Tasks\SelectForecastTask;
use App\Structure\Count25Section\Admin\Tasks\UpdateCountTask;
use App\Structure\Count25Section\Admin\Tasks\SelectCountTask;

class SynchCountAction extends BaseAction
{
    private array $users = [8, 9, 10, 13, 15, 16, 18, 19, 23];
    private array $ekr = [26, 28, 29, 27, 30, 31];
    
    /**
     * Получаем информацию из таблицы forecasts
     * Записываем информацию в таблицу counts25
     *
     * @param 
     * @return 
     */
    public function SynchCommunal()
    {   
        foreach ($this->users as $user) {
            $communals = $this->task(SelectForecastTask::class)->SelectCommunal($user);
            $sum_fu = 0;
            for($i = 0; $i < 6; $i++){
                $this->task(UpdateCountTask::class)->UpdateCommunal($this->ekr[$i], $user, $communals[$i]['sum_fu']);
                $sum_fu += $communals[$i]['sum_fu'];
            }
            $result = $this->task(UpdateCountTask::class)->UpdateCommunal(25, $user, $sum_fu);
        }
        return $result;
    }
    
    /**
     * Получаем информацию из таблицы counts за 2026
     * Заполняем таблицу counts за 2027 и 2028 год
     *
     * @param 
     * @return 
     */
    public function SynchYears()
    {   
        $info = $this->task(SelectCountTask::class)->SelectYear();
        foreach ($info as $value) {
            $value['sum_fu'] == 0 ? true : $this->task(UpdateCountTask::class)->UpdateYears($value);
        }
    }
    
}

