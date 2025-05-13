<?php

namespace App\Structure\UtilitiesSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\UtilitiesSection\Admin\Dto\IndexDto;
use App\Structure\UtilitiesSection\Admin\Tasks\SelectPointsTask;
use App\Structure\UtilitiesSection\Admin\Tasks\SelectTarrifsTask;
use App\Structure\UtilitiesSection\Admin\Tasks\SelectCommunalsTask;

class IndexAction extends BaseAction
{
    /**
     * Получаем информацию
     * по заданным параметрам
     *
     * @param IndexDto $dto
     * @return array
     */
    public function SelectInfo(IndexDto $dto): array
    {      
        $info = [
            'points' => $this->task(SelectPointsTask::class)->SelectPoints(),
        ];
        return $info;
    }
    
    /**
     * Получаем тарифы
     * по заданным параметрам
     *
     * @param IndexDto $dto
     * @return array
     */
    public function SelectTarrifs(IndexDto $dto): array
    {   
        if (count($dto->year) == '1' AND count($dto->mounth) == '1'){
            return $this->task(SelectTarrifsTask::class)->SelectTarrifs($dto);
        }else{
            return [];
        }      
    }
    
    /**
     * Проверка таблицы communals
     * На наличие ошибок
     *
     * @param int $year
     * @return array
     */
    public function ExaminCommunals(int $year): array
    {   
        $result = [];
        for($m = 1; $m < 13; $m++){
            $result[$m] = $this->task(SelectCommunalsTask::class)->ExaminStatus($year, $m);
        }
        return $result;
    }
    
    /**
     * Определяем, сколько параметров в запросе
     * Один или много
     *
     * @param IndexDto $dto
     * @return string
     */
    public function DefineVariant(IndexDto $dto): string
    {   
        if (count($dto->year) == '1' AND count($dto->mounth) == '1'){
            return "one";
        }else{
            return "many";
        }      
    }
    
           
}

