<?php

namespace App\Structure\CommunalSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Tarrifs;
use App\Structure\CommunalSection\User\Models\Communal;
use App\Structure\CommunalSection\User\Dto\CommunalSendingDto;

class CommunalExaminationTask extends BaseTask
{
    /**
     * Выполняем проверку согласно тарифу
     *
     * @param CommunalSendingDto $dto
     * @return bool
     */
    public function run(CommunalSendingDto $dto): bool
    {
        //Получаем тарифы
        $tarrifs = Tarrifs::where('year', $dto->year)
            ->where('mounth', $dto->mounth)
            ->first();
        
        //Получаем коммуналку
        $communals = Communal::find($dto->id);
               
        //Выполняем проверку
        function examination($sum, $volume, $tarif_one, $tarif_two) 
            {
                if($sum == 0 && $volume == 0){                   
                    $tarif = "NO";
                } else {
                if($volume == 0){
                    $tarif = "";
                } else {
                    $tarif = $sum / $volume;
                    $tarif = number_format($tarif, 3, '.', ''); 
                }
                }
                
                if($tarif >= $tarif_one && $tarif <= $tarif_two || $tarif == "NO"){
                    $status = "YES";
                } else {
                    $status = "NO";
                }
                return $status;    
            }
        
            $status_heat = examination($communals['heat-sum'], 
                $communals['heat-volume'], $tarrifs['heat-one'], $tarrifs['heat-two']);
            $status_drainage = examination($communals['drainage-sum'], 
                $communals['drainage-volume'], $tarrifs['drainage-one'], $tarrifs['drainage-two']);
            $status_negative = examination($communals['negative-sum'], 
                $communals['negative-volume'], $tarrifs['negative-one'], $tarrifs['negative-two']);
            $status_water = examination($communals['water-sum'], 
                $communals['water-volume'], $tarrifs['water-one'], $tarrifs['water-two']);
            $status_power = examination($communals['power-sum'], 
                $communals['power-volume'], $tarrifs['power-one'], $tarrifs['power-two']);
            $status_trash = examination($communals['trash-sum'], 
                $communals['trash-volume'], $tarrifs['trash-one'], $tarrifs['trash-two']);
            
            if($status_heat == "YES" && $status_drainage == "YES" && $status_negative == "YES" 
                && $status_water == "YES" && $status_power == "YES" && $status_trash == "YES"){
                return true;
            } else {
                return false;
            }
    }
}



