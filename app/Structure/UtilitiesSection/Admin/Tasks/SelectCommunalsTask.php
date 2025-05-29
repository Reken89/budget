<?php

namespace App\Structure\UtilitiesSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UtilitiesSection\Admin\Models\Communal;
use App\Structure\UtilitiesSection\Admin\Dto\IndexDto;

class SelectCommunalsTask extends BaseTask
{
    /**
     * Проверяем таблицу на наличие записей со статусом 2 и 3
     *
     * @param int $year, int $mounth
     * @return bool
     */
    public function ExaminStatus(int $year, int $mounth): bool
    {        
        return Communal::select()
            ->where('year', $year)
            ->where('mounth', $mounth)
            ->whereIn('status', [2, 3])          
            ->count() > 0;
    }
    
    /**
     * Возвращаем информацию для таблицы communals
     *
     * @param IndexDto $dto
     * @return array
     */
    public function SelectTable(IndexDto $dto): array
    {     
        return Communal::select()
            ->selectRaw("(`heat-sum` + `drainage-sum` + `negative-sum` +"
                    . "`water-sum` + `power-sum` + `trash-sum`) AS total")    
            ->with(['user:id,name'])    
            ->whereIn('year', $dto->year)
            ->whereIn('mounth', $dto->mounth) 
            ->get()
            ->toArray();       
    }
    
    /**
     * Возвращаем сводную таблицу communals
     *
     * @param IndexDto $dto
     * @return array
     */
    public function SelectSet(IndexDto $dto): array
    {     
        return Communal::select('user_id')
            ->selectRaw('SUM(`heat-volume`) as heat_volume')
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
            ->selectRaw('SUM(`heat-sum`) + SUM(`drainage-sum`) + SUM(`negative-sum`) '
                    . '+ SUM(`water-sum`) + SUM(`power-sum`) + SUM(`trash-sum`) '
                    . 'as total')
            ->with(['user:id,name'])    
            ->whereIn('year', $dto->year)
            ->whereIn('mounth', $dto->mounth) 
            ->groupBy('user_id')
            ->get()
            ->toArray();            
    }
    
    /**
     * Возвращаем итоговую строку
     * таблицы communals
     *
     * @param IndexDto $dto
     * @return array
     */
    public function SelectTotal(IndexDto $dto): array
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
            ->selectRaw('SUM(`heat-sum`) + SUM(`drainage-sum`) + SUM(`negative-sum`) '
                    . '+ SUM(`water-sum`) + SUM(`power-sum`) + SUM(`trash-sum`) '
                    . 'as total') 
            ->whereIn('year', $dto->year)
            ->whereIn('mounth', $dto->mounth) 
            ->first()
            ->toArray();            
    }
    
    /**
     * Получаем значения communals
     * Для одной записи
     *
     * @param int $id
     * @return array
     */
    public function SelectLine(int $id): array
    {     
        return Communal::select()
            ->with(['user:id,name,email'])     
            ->where('id', $id)     
            ->first()
            ->toArray();       
    }
}

