<?php

namespace App\Structure\DeloSection\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Structure\DeloSection\User\Actions\DeloInfoAction;

class DeloController extends Controller
{
     /**
     * Front отрисовка страницы
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
     * Возвращает таблицу documents
     *
     * @return 
     */
    public function BackView()
    {
        $info = $this->action(DeloInfoAction::class)->SelectAll();  
        return view('delo.back.delo', ['info' => $info]);         
    }
    
}

