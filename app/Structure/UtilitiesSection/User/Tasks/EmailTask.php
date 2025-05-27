<?php

namespace App\Structure\UtilitiesSection\User\Tasks;

use App\Core\Task\BaseTask;

class EmailTask extends BaseTask
{
    private string $from = "portal@kostamail.ru";
    
    /**
     * Отправляем письмо
     * С HTML шаблоном
     *
     * @param array $info
     * @return 
     */
    public function SendMail(array $info)
    {     
        $message = view('utilities.message1', ['info' => $info]); 
        $headers = "Content-type: text/html; charset= UTF-8 \r\n";
        $headers .= "From: $this->from\r\n";
        
        mail('portal@kostamail.ru', "Запрос на редактирование", $message, $headers);
    }
    
}

