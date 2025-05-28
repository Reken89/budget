<?php

namespace App\Structure\APISection\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CommunalSection\User\Models\Communal;

class SelectCommunalTask extends BaseTask
{
    
    /**
     * Возвращает информацию из таблицы communals
     * по заданным параметрам
     *
     * @param int $year, int $mounth
     * @return array
     */
    public function SelectStatus(int $year, int $mounth): array
    {    
        return Communal::select('user_id', 'status', 'year', 'mounth') 
            ->with(['user:id,name'])     
            ->where('year', $year)
            ->where('mounth', '<', $mounth)  
            ->whereIn('status', [2, 3])     
            ->get()
            ->toArray();
    }
    
    /**
     * Возвращает информацию из таблицы communals
     * по заданным параметрам
     *
     * @param int $year, int $mounth
     * @return array
     */
    public function SelectUsers(int $year, int $mounth): array
    {    
        return Communal::select('user_id') 
            ->with(['user:id,name,email'])     
            ->where('year', $year)
            ->where('mounth', '<', $mounth)  
            ->where('status', 2)  
            ->groupBy('user_id')
            ->get()
            ->toArray();
    }
    
    /**
     * Возвращает информацию из таблицы communals
     * по заданным параметрам
     *
     * @param int $id, int $year, int $mounth
     * @return array
     */
    public function SelectInfo(int $id, int $year, int $mounth): array
    {    
        return Communal::select('user_id', 'status', 'year', 'mounth') 
            ->with(['user:id,name'])  
            ->where('user_id', $id)    
            ->where('year', $year)
            ->where('mounth', '<', $mounth)  
            ->where('status', 2)     
            ->get()
            ->toArray();
    }
}
