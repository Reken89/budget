<?php

namespace App\Structure\APISection\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\APISection\Tasks\SelectCommunalTask;
use App\Structure\APISection\Tasks\SendMailTask;

class CommunalAction extends BaseAction
{
    private string $email = "admin@kostamail.ru";
    private string $topic = "Отчет по коммунальным услугам";
    
    /**
     * 
     *
     * @param 
     * @return
     */
    public function SendMail()
    {   
        $mounth = ltrim(date('d'),'0') > 17 ? ltrim(date('m'),'0') : ltrim(date('m'),'0') - 1;
        $year = date('Y');
        $info = $this->task(SelectCommunalTask::class)->SelectStatus($year, $mounth);
        $message = view('api.communal', ['info' => $info]); 
        
        if(!empty($info) && $mounth > 1){
            $this->task(SendMailTask::class)->SendMail($this->topic, $message, $this->email);
        }
    }
}

