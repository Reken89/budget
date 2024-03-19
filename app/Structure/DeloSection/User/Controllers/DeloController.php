<?php

namespace App\Structure\DeloSection\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;


class DeloController extends Controller
{
     /**
     * Front отрисовка страницы
     * Возвращает коммунальные услуги за выбранный год и месяц
     * Возвращает тарифы за выбранный год
     *
     * @param 
     * @return 
     */
    public function FrontView()
    {
        return view('delo.delo');   
    }
    
     /**
     * Back отрисовка страницы
     * Возвращает front шаблон и выбранный год и месяц
     *
     * @return 
     */
    public function BackView()
    {
        return view('delo.back.delo');         
    }
    
}

