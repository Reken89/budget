<?php

namespace App\Structure\CountSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CountSection\Admin\Models\Count;
use Illuminate\Database\Eloquent\Builder;

class CountSelectAllTask extends BaseTask
{
    /**
     * Возвращает смету по заданным параметрам
     *
     * @param int $user, int $year
     * @return array
     */
    public function run(int $user, int $year): array
    {       
        
        $info = Count::select()
            ->with(['user:id,name', 'ekr'])
            ->where('user_id', $user)    
            ->where('year', $year)    
            ->get()
            ->toArray();
        
        return $info;  

    }
    
    /**
     * Возвращает смету по заданным параметрам
     * Итоговая строка
     *
     * @param int $user, int $year
     * @return array
     */
    public function total(int $user, int $year): array
    {       
        
        $info = Count::selectRaw('SUM(`sum_fu`) as sum_fu')
            ->selectRaw('SUM(`sum_cb`) as sum_cb')
            ->where('user_id', $user)    
            ->where('year', $year) 
            ->whereHas('ekr', function (Builder $query){
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
            })      
            ->first()
            ->toArray();
        
        return $info;  

    }
    
    /**
     * Возвращает свод сметы
     *
     * @param int $year
     * @return array
     */
    public function svod(int $year): array
    {       
        
        $info = Count::select('ekr_id')
            ->selectRaw('SUM(`sum_fu`) as sum_fu')
            ->selectRaw('SUM(`sum_cb`) as sum_cb') 
            ->with(['ekr'])
            ->where('year', $year)
            ->groupBy('ekr_id')
            ->get()
            ->toArray();
        
        return $info;  

    }
    
    /**
     * Возвращает свод сметы
     * Итоговая строка
     *
     * @param int $year
     * @return array
     */
    public function svod_total(int $year): array
    {       
        
        $info = Count::selectRaw('SUM(`sum_fu`) as sum_fu')
            ->selectRaw('SUM(`sum_cb`) as sum_cb')  
            ->where('year', $year) 
            ->whereHas('ekr', function (Builder $query){
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
            })      
            ->first()
            ->toArray();
        
        return $info;  

    }
}
