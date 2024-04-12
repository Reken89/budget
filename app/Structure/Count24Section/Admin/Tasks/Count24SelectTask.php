<?php

namespace App\Structure\Count24Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Count24Section\Admin\Models\Count24;
use Illuminate\Database\Eloquent\Builder;

class Count24SelectTask extends BaseTask
{
    /**
     * Возвращает смету по заданным параметрам
     *
     * @param array $users, int $year
     * @return array
     */
    public function SelectAll(array $users, int $year): array
    {       
        
        $info = Count24::select()
            ->whereIn('user_id', $users)    
            ->where('year', $year)  
            ->join('ekr', 'counts24.ekr_id', '=', 'ekr.id')     
            //->with(['user:id,name', 'ekr'])  
            ->orderBy('ekr.number', 'asc')
            ->orderBy('ekr.main', 'desc')
            ->orderBy('ekr.shared', 'desc')
            ->orderBy('ekr.title', 'asc')
            ->orderBy('user_id', 'asc')
            ->get()
            ->toArray();
        
        return $info;  

    }    

}

