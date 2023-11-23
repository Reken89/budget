<?php

namespace App\Structure\CommunalSection\User\Tasks;

use App\Core\Task\BaseTask;
use \Illuminate\Support\Facades\Auth;
use App\Structure\UserSection\Auth\Models\User;
use App\Structure\CommunalSection\User\Models\Communal;

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
        
        $info = User::select('id', 'name', 'email')
            ->where('id', $user->id)
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
    
    /**
     * Возвращает ИТОГИ коммунальных услуг за выбранный год
     *
     * @param int $year
     * @return array
     */
    public function total(int $year): array
    {
        $user = Auth::user();  
        
        $info = Communal::selectRaw('SUM(`heat-volume`) as heat_volume')
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
            ->where('user_id', $user->id)
            ->where('year', $year)
            ->groupBy('year')            
            ->first()
            ->toArray();
        return $info;  

    }
}