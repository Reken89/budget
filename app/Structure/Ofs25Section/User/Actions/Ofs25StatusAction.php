<?php

namespace App\Structure\Ofs25Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs25Section\User\Tasks\Ofs25StatusTask;

class Ofs25StatusAction extends BaseAction
{
    /**
     * Обновляет статус в таблице ofs
     *
     * @param int $mounth, int $chapter, int $user
     * @return
     */
    public function UpdateStatus(int $mounth, int $chapter, int $user)
    {   
        $info = $this->task(Ofs25StatusTask::class)->SelectInfo($mounth, $chapter, $user);       
        
        //Выполняем проверку, на наличие ошибок в таблице
        foreach ($info as $value){
            if($value['total1'] == '0' && $value['total2'] >= '0'){
                //Заглушка
            }else{
                $error = true;
            }
        }      
        
        //Если в таблице нет ошибок, меняем статус
        if(!isset($error)){
            $this->task(Ofs25StatusTask::class)->UpdateStatus($mounth, $chapter, $user);
            $result = true;
        }else{
            $result = false;
        }
        
        return $result;
    }
}


