<?php

namespace App\Structure\UtilitiesSection\Admin\Tasks;

use App\Core\Task\BaseTask;

class EmailTask extends BaseTask
{
    private string $from = "portal@kostamail.ru";
    
    /**
     * Отправляем письмо
     * С HTML шаблоном
     *
     * @param string $email, string $topic, array $info
     * @return 
     */
    public function SendMail(string $email, string $topic, array $info)
    {     
        $message = view('utilities.message2', ['info' => $info]); 
        $headers = "Content-type: text/html; charset= UTF-8 \r\n";
        $headers .= "From: $this->from\r\n";
        
        //email = кому отправить
        //topic = тема письма
        //message = содержание письма
        //headers = от кого отправить + способ html
        mail($email, $topic, $message, $headers);
    }
    
}
