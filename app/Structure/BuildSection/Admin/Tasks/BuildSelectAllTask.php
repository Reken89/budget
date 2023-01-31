<?php

namespace App\Structure\BuildSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\BuildSection\Admin\Models\Repair;

class BuildSelectAllTask extends BaseTask
{
    /**
     * Возвращает ОФС по заданным параметрам
     * Складывает значения
     *
     * @param int $year, array $mounth, array $user
     * @return 
     */
    public function run(int $year, array $mounth, array $user)
    {        
        $info = Repair::select('work_id', 'user_id')  
            ->selectRaw('SUM(`build_sum`) as build_sum')
            ->selectRaw('SUM(`fu_sum`) as fu_sum')
            ->selectRaw('SUM(`contract_sum`) as contract_sum') 
            ->selectRaw('SUM(`kassa_sum`) as kassa_sum') 
            ->selectRaw('SUM(`fact_sum`) as fact_sum')
            ->with([
                'user:id,name',
                'work'
                ])    
            ->where('year', $year)
            ->whereIn('mounth', $mounth) 
            ->whereIn('user_id', $user)     
            ->groupBy(['work_id', 'user_id'])
            ->get() 
            ->toArray();
        
        return $info;

    }
    
    /**
     * Возвращает ОФС по заданным параметрам (один месяц)
     * Складывает значения
     *
     * @param int $year, array $mounth, array $user
     * @return 
     */
    public function one(int $year, array $mounth, array $user)
    {        
        $info = Repair::select()  
            ->with([
                'user:id,name',
                'work'
                ])    
            ->where('year', $year)
            ->whereIn('mounth', $mounth) 
            ->whereIn('user_id', $user)     
            ->get() 
            ->toArray();
        
        return $info;

    }
    
}

