<?php

namespace App\Structure\UtilitiesSection\User\Actions;

use App\Core\Actions\BaseAction;
use \Illuminate\Support\Facades\Auth;
use App\Structure\UtilitiesSection\User\Dto\UpdateDto;
use App\Structure\UtilitiesSection\User\Tasks\UpdateCommunalsTask;
use App\Structure\UtilitiesSection\User\Tasks\SelectPointsTask;
use App\Structure\UtilitiesSection\User\Tasks\UpdatePointsTask;

class UpdateAction extends BaseAction
{
    /**
     * Обновляем значения в таблице communals
     *
     * @param UpdateDto $dto
     * @return bool
     */
    public function UpdateCommunals(UpdateDto $dto): bool
    {   
        return $this->task(UpdateCommunalsTask::class)->UpdateCommunals($dto);
    }
    
    /**
     * Обновляем статус в строке
     *
     * @param int $id, int $status
     * @return bool
     */
    public function UpdateStatus(int $id, int $status): bool
    {   
        return $this->task(UpdateCommunalsTask::class)->UpdateStatus($id, $status);
    }
    
    /**
     * Обновляем очки в таблице points
     *
     * @param 
     * @return bool
     */
    public function UpdatePoints(): bool
    {   
        $user = Auth::user(); 
        $points = $this->task(SelectPointsTask::class)->SelectPoints($user->id);
        if(date("d") < 18 && date("m") !== $points["mounth"]){
            return $this->task(UpdatePointsTask::class)->AddPoints($user->id);
        }else{
            return false;
        }
    }
}
