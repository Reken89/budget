<?php

namespace App\Structure\Count25Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Count25Section\Admin\Models\Count25;

class SelectCountTask extends BaseTask
{
    /**
     * Проверяем таблицу на наличие записей со статусом 2
     *
     * @param int $year, array $user
     * @return bool
     */
    public function ExaminStatus(int $year, array $user): bool
    {    
        return Count25::select()
            ->where('year', $year)
            ->whereIn('user_id', $user)
            ->where('status', 2)          
            ->count() > 0;
    }
    
    /**
     * Определяем максимальную дату в таблицы
     *
     * @param array $user
     * @return array
     */
    public function MaxDate(array $user): array
    {    
        return Count25::selectRaw('MAX(date_fu) as date_fu')
            ->selectRaw('MAX(date_cb) as date_cb')     
            ->whereIn('user_id', $user)        
            ->first()
            ->toArray();
    }
    
    /**
     * Возвращает информацию из таблицы counts25
     *
     * @param array $users, int $year
     * @return array
     */
    public function SelectAll(array $users, int $year): array
    {              
        return Count25::whereIn('user_id', $users)    
            ->where('year', $year)  
            ->join('ekr', 'counts25.ekr_id', '=', 'ekr.id')    
            ->select('counts25.id', 'user_id', 'ekr_id', 'year', 'status', 'sum_fu', 'sum_cb')  
            ->with(['user:id,name', 'ekr'])  
            ->orderBy('ekr.number', 'asc')
            ->orderBy('ekr.main', 'desc')
            ->orderBy('ekr.shared', 'desc')
            ->orderBy('ekr.title', 'asc')
            ->orderBy('user_id', 'asc')
            ->get()
            ->toArray();
    }
    
}