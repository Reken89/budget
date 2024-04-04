<?php

namespace App\Structure\Count24Section\Admin\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCount24Controller extends Controller
{
     /**
     * Front отрисовка страницы
     *
     * @param 
     * @return 
     */
    public function FrontView()
    {
        return view('count24.admin');   
    }
    
     /**
     * Back отрисовка 
     * Таблица Смета 2024 
     *
     * @param 
     * @return 
     */
    public function TableView()
    {
        $info = []; 
        return view('count24.back.admin', ['info' => $info]);         
    }
    
}




