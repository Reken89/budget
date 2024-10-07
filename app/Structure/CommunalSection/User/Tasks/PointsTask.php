<?php

namespace App\Structure\CommunalSection\User\Tasks;

use App\Core\Task\BaseTask;
use \Illuminate\Support\Facades\Auth;
use App\Structure\CommunalSection\User\Models\Point;

class PointsTask extends BaseTask
{
    /**
     * Возвращает информацию из таблицы points
     *
     * @param 
     * @return array
     */
    public function SelectInfo(): array
    {
        $user = Auth::user(); 
        
        $info = Point::select()
            ->where('user_id', $user->id)
            ->first()
            ->toArray();
        return $info;  
    }
    
    /**
     * Обновляет информацию в таблице points
     *
     * @param 
     * @return bool
     */
    public function UpdateInfo(): bool
    {
        $user = Auth::user();  
        
        $result = Point::where('user_id', $user->id)   
            ->update([
                'points' => Point::raw("points + 10"),
                'mounth' => date("m"),
            ]);    
        
        return $result == true ? true : false;
    }

}

