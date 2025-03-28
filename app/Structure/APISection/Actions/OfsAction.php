<?php

namespace App\Structure\APISection\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\APISection\Tasks\SelectOfsTask;

class OfsAction extends BaseAction
{    
    private array $omsu = [23, 25, 26, 27, 28, 29];
    private array $school = [3, 4, 5, 7, 8];
    private array $kultura = [16, 17, 18, 19, 20, 21, 22];
    private array $kinder = [9, 10, 12, 13, 15];
    
    /**
     * 
     *
     * @param 
     * @return
     */
    public function SendMail()
    {   
        $mounth = ltrim(date('d'),'0') > 17 ? ltrim(date('m'),'0') - 1 : ltrim(date('m'),'0') - 2;
        $year = date('Y');
        $users = [$this->omsu, $this->school, $this->kultura, $this->kinder];
        $status = [];
        
        for($i = 0 ; $i < 4 ; $i++){
            for($j = 1 ; $j < 6 ; $j++){
                $status[$i][$j] = $this->task(SelectOfsTask::class)->SelectStatus($j, $mounth, $users[$i]);
            }
        }
        
        $info = [
            'mounth' => $mounth,
            'year'   => $year,
            'status' => $status,
        ];
        $message = view('api.ofs', ['info' => $info]); 
        echo $message;
    }
}

