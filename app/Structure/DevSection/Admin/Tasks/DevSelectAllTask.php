<?php

namespace App\Structure\DevSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\UserSection\Auth\Models\User;

class DevSelectAllTask extends BaseTask
{
    /**
     * Возвращает коммунальные услуги за выбранный год
     *
     * @param int $year
     * @return array
     */
    public function run(int $year): array
    {
        $user = 14; 
        
        $info = User::select('id', 'name', 'email')
            ->where('id', $user)
            ->with(['communal' => function ($query) use ($year) {
            $query
                ->select()    
                ->selectRaw("(`heat-sum` + `drainage-sum` + `negative-sum` +"
                    . "`water-sum` + `power-sum` + `trash-sum` + `disposal-sum`) AS total")
                ->where('year', $year);            
            }])
            //->get()
            ->first()
            ->toArray();
        return $info;  

    }
}
