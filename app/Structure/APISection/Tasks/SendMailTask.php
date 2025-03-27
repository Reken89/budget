<?php

namespace App\Structure\APISection\Tasks;

use App\Core\Task\BaseTask;

class SendMailTask extends BaseTask
{
    private string $from = "portal@kostamail.ru";
    
    /**
     * 
     *
     * @param string $topic, $message, string $email
     * @return
     */
    public function SendMail(string $topic, $message, string $email)
    {   
        $headers = "Content-type: text/html; charset= UTF-8 \r\n";
        $headers .= "From: $this->from\r\n";

        //email = кому отправить
        //topic = тема письма
        //message = содержание письма
        //headers = от кого отправить + способ html
        mail($email, $topic, $message, $headers);         
    }
}

