<?php

namespace App\Structure\UtilitiesSection\User\Actions;

use App\Core\Actions\BaseAction;
use \Illuminate\Support\Facades\Auth;
use App\Structure\UtilitiesSection\User\Tasks\SelectCommunalsTask;

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
    
}

