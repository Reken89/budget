<?php

namespace App\Structure\Forecast25Section\Admin\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class Forecast25Controller extends Controller
{
     /**
     * Front отрисовка страницы
     *
     * @param
     * @return 
     */
    public function FrontView()
    {
        return view('forecast25.forecast');   
    }
    
     /**
     * Back отрисовка страницы
     *
     * @param 
     * @return 
     */
    public function BackView()
    { 
        return view('forecast25.back.forecast');         
    }
    
}
