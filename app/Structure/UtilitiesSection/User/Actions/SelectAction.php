<?php

namespace App\Structure\UtilitiesSection\User\Actions;

use App\Core\Actions\BaseAction;
use \Illuminate\Support\Facades\Auth;
use App\Structure\UtilitiesSection\User\Tasks\SelectCommunalsTask;
use App\Structure\UtilitiesSection\User\Tasks\SelectPointsTask;

class SelectAction extends BaseAction
{
    /**
     * Проверка таблицы communals
     * На наличие ошибок
     *
     * @param int $year
     * @return array
     */
    public function ExaminCommunals(int $year): array
    {   
        $user = Auth::user(); 
        $result = [];
        for($m = 1; $m < 13; $m++){
            $result[$m] = $this->task(SelectCommunalsTask::class)->ExaminStatus($year, $m, $user->id);
        }
        return $result;
    }
    
    /**
     * Получаем очки учреждения
     *
     * @param 
     * @return array
     */
    public function SelectPoints(): array
    {   
        $user = Auth::user(); 
        return [
            'max'    => $this->task(SelectPointsTask::class)->SelectMaxPoints(),
            'points' => $this->task(SelectPointsTask::class)->SelectPoints($user->id),
        ];
    }
    
}

