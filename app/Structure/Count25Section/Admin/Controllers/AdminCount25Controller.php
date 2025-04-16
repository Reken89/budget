<?php

namespace App\Structure\Count25Section\Admin\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\Count25Section\Admin\Actions\ExaminCountAction;

class AdminCount25Controller extends Controller
{
    /**
     * Front отрисовка страницы
     *
     * @param 
     * @return 
     */
    public function FrontView()
    {      
        $info = [
            'examin' => $this->action(ExaminCountAction::class)->ExaminCount(),
        ];
        return view('count25.admin', ['info' => $info]);   
    }
    
}