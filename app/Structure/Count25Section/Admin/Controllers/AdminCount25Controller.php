<?php

namespace App\Structure\Count25Section\Admin\Controllers;

use App\Core\Controllers\Controller;

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
        return view('count25.admin');   
    }
    
}