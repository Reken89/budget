<?php

namespace App\Structure\UtilitiesSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Models\Communal;
use App\Structure\UtilitiesSection\User\Dto\IndexDto;

class SelectCommunalsTask extends BaseTask
{
    /**
     * Проверяем таблицу на наличие записей со статусом 2 и 3
     *
     * @param int $year, int $mounth, int $id
     * @return bool
     */
    public function ExaminStatus(int $year, int $mounth, int $id): bool
    {        
        return Communal::select()
            ->where('year', $year)
            ->where('mounth', $mounth)
            ->where('user_id', $id)
            ->whereIn('status', [2, 3])          
            ->count() > 0;
    }
    
    /**
     * Возвращаем информацию для таблицы communals
     *
     * @param IndexDto $dto, int $id
     * @return array
     */
    public function SelectTable(IndexDto $dto, int $id): array
    {     
        return Communal::select()
            ->selectRaw("(`heat-sum` + `drainage-sum` + `negative-sum` +"
                . "`water-sum` + `power-sum` + `trash-sum`) AS total")      
            ->where('year', $dto->year[0])
            ->where('mounth', $dto->mounth[0]) 
            ->where('user_id', $id)     
            ->first()
            ->toArray();       
    }
    
    /**
     * Возвращаем информацию
     * Communals за выбранный год
     *
     * @param IndexDto $dto, int $id
     * @return array
     */
    public function SelectAllTable(IndexDto $dto, int $id): array
    {     
        return Communal::select()
            ->selectRaw("(`heat-sum` + `drainage-sum` + `negative-sum` +"
                . "`water-sum` + `power-sum` + `trash-sum`) AS total")      
            ->where('year', $dto->year[0])
            ->where('user_id', $id)     
            ->get()
            ->toArray();       
    }
    
    /**
     * Возвращает сумму строк
     * За выбранный год
     *
     * @param IndexDto $dto, int $id
     * @return array
     */
    public function SelectTotal(IndexDto $dto, int $id): array
    {      
        return Communal::selectRaw('SUM(`heat-volume`) as heat_volume')
            ->selectRaw('SUM(`heat-sum`) as heat_sum')
            ->selectRaw('SUM(`drainage-volume`) as drainage_volume')
            ->selectRaw('SUM(`drainage-sum`) as drainage_sum') 
            ->selectRaw('SUM(`negative-volume`) as negative_volume') 
            ->selectRaw('SUM(`negative-sum`) as negative_sum')
            ->selectRaw('SUM(`water-volume`) as water_volume')
            ->selectRaw('SUM(`water-sum`) as water_sum')
            ->selectRaw('SUM(`power-volume`) as power_volume') 
            ->selectRaw('SUM(`power-sum`) as power_sum')
            ->selectRaw('SUM(`trash-volume`) as trash_volume')
            ->selectRaw('SUM(`trash-sum`) as trash_sum')
            ->selectRaw('SUM(`disposal-volume`) as disposal_volume')
            ->selectRaw('SUM(`disposal-sum`) as disposal_sum')
            ->selectRaw('SUM(`heat-sum`) + SUM(`drainage-sum`) + SUM(`negative-sum`) '
                    . '+ SUM(`water-sum`) + SUM(`power-sum`) + SUM(`trash-sum`) '
                    . '+ SUM(`disposal-sum`) as total')
            ->where('user_id', $id)
            ->where('year', $dto->year[0])
            ->groupBy('year')            
            ->first()
            ->toArray();
    }
    
    /**
     * Получаем значения communals
     * Для проверки по диапозону тарифов
     *
     * @param int $id
     * @return array
     */
    public function SelectLine(int $id): array
    {     
        return Communal::select()     
            ->where('id', $id)     
            ->first()
            ->toArray();       
    }
    
}
