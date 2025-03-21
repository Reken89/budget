<?php

namespace App\Structure\Forecast25Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Forecast25Section\Admin\Tasks\SelectCommunalTask;
use App\Structure\Forecast25Section\Admin\Tasks\SelectTarrifTask;
use App\Structure\Forecast25Section\Admin\Tasks\UpdateForecastTask;

class SynchTableAction extends BaseAction
{
    private array $mounth_one = [1, 2, 3, 4, 5, 6];
    private array $mounth_two = [7, 8, 9, 10, 11, 12];
    private array $users = [3, 4, 5, 7, 8, 9, 10, 13, 15, 16, 17, 18, 19, 20, 21, 22, 23 ];
    private array $sections = ['heat', 'drainage', 'negative', 'water', 'energy', 'trash'];
    
    private array $users_out = [11, 12, 14]; # Ликвидированные учреждения
    private array $users_in = [13, 9, 10];   # Принимающие учреждения
    
    /**
     * Синхронизация таблиц
     * Communals и Forecast25
     *
     * @param
     * @return
     */
    public function SynchTable()
    {   
        foreach ($this->users as $user) {
            //Получаем значения из таблицы коммунальные услуги за первое и второе полугодия
            $communal_one = $this->task(SelectCommunalTask::class)->SelectInfo(2025, $this->mounth_one, $user);
            $communal_two = $this->task(SelectCommunalTask::class)->SelectInfo(2024, $this->mounth_two, $user);
            
            $tarrifs = $this->task(SelectTarrifTask::class)->SelectAll();
            
            foreach ($this->sections as $section) {
                $result = $this->task(UpdateForecastTask::class)->UpdateInfo($communal_one, $communal_two, $tarrifs, $user, $section);
            }
        }
        return $result;
    }
    
    /**
     * Синхронизация таблиц
     * Communals и Forecast25
     * Для реорганизованных учреждений
     *
     * @param
     * @return
     */
    public function ModifyTable()
    {   
        for($i = 0; $i < 3; $i++){
            $communal_two = $this->task(SelectCommunalTask::class)->SelectInfo(2024, $this->mounth_two, $this->users_out[$i]);
            if($this->users_out[$i] == 12){
                //Для учреждений которые существовали на начало 2025 года
                $communal_one = $this->task(SelectCommunalTask::class)->SelectInfo(2025, $this->mounth_one, $this->users_out[$i]);
            }
            
            $tarrifs = $this->task(SelectTarrifTask::class)->SelectAll();
            
            foreach ($this->sections as $section) {
                $result = $this->task(UpdateForecastTask::class)->ModifyTwo($communal_two, $tarrifs, $this->users_in[$i], $section);
                if($this->users_out[$i] == 12){
                    //Для учреждений которые существовали на начало 2025 года
                    $this->task(UpdateForecastTask::class)->ModifyOne($communal_one, $tarrifs, $this->users_in[$i], $section);
                }
            }
        }
        return $result;      
    }
}

