<?php

namespace App\Structure\Ofs24Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs24Section\User\Tasks\Ofs24StatusTask;

class Ofs24StatusAction extends BaseAction
{
    /**
     * Меняем статус строк в таблице ofs
     *
     * @param string $user, string $year, string $mounth, string $chapter
     * @return array
     */
    public function run(string $user, string $mounth, string $chapter)
    {   
        $info = $this->task(Ofs24StatusTask::class)->select($user, $mounth, $chapter);       
        
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
            $this->task(Ofs24StatusTask::class)->update($user, $mounth, $chapter);
            $result = true;
        }else{
            $result = false;
        }
        
        return $result;
    }
}

