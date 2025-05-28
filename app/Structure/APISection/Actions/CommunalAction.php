<?php

namespace App\Structure\APISection\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\APISection\Tasks\SelectCommunalTask;
use App\Structure\APISection\Tasks\SendMailTask;

class CommunalAction extends BaseAction
{
    //кому отправить
    private string $email = "portal@kostamail.ru";
    private string $topic = "Отчет по коммунальным услугам";
    private string $topic_user = "Уведомление о не предоставлении информации";
    
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
    
    /**
     * Проверяем пользователей на наличие ошибок в таблице communals
     * В случае ошибки отправляем уведомление
     *
     * @param 
     * @return
     */
    public function ExaminUsers()
    {
        $mounth = ltrim(date('d'),'0') > 17 ? ltrim(date('m'),'0') : ltrim(date('m'),'0') - 1;
        $year = date('Y');
        $users = $this->task(SelectCommunalTask::class)->SelectUsers($year, $mounth);
        
        if(!empty($users) && $mounth > 1){
            foreach ($users as $user) {
                $info = $this->task(SelectCommunalTask::class)->SelectInfo($user['user_id'], $year, $mounth);
                $message = view('api.communal_user', ['info' => $info]); 
                $this->task(SendMailTask::class)->SendMail($this->topic_user, $message, $this->email);
            }
        }

        
    }
}

