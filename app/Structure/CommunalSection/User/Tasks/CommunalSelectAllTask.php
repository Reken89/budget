<?php

namespace App\Structure\CommunalSection\User\Tasks;

use App\Core\Task\BaseTask;
use \Illuminate\Support\Facades\Auth;
use App\Structure\UserSection\Auth\Models\User;

class CommunalSelectAllTask extends BaseTask
{
    /**
     * Возвращает коммунальные услуги за выбранный год
     *
     * @param int $year
     * @return array
     */
    public function run(int $year): array
    {
        $user = Auth::user(); 
        
        $info = User::select('id', 'name')
            ->where('id', $user->id)
            ->with(['communal' => function ($query) use ($year) {
            $query
                ->select()    
                ->selectRaw("(`heat-sum` + `drainage-sum` + `negative-sum` +"
                    . "`water-sum` + `power-sum` + `trash-sum` + `disposal-sum`) AS total")
                ->where('year', $year);            
            }])
            ->get()
            ->toArray();
        return $info;  

    }
}

