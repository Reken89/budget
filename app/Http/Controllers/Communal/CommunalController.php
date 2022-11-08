<?php

namespace App\Http\Controllers\Communal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\Communal\CommunalIndexAction;

class CommunalController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает коммунальные услуги за выбранный год
     *
     * @param Request $request
     * @return 
     */
    public function index(Request $request)
    {
        $year = $request->input('year');
        $result = $this->action(CommunalIndexAction::class)->run($year);
        
        return view('communal.back.user', ['info' => $result]);
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон и выбранный год
     *
     * @param int $year 
     * @return 
     */
    public function user(int $year)
    {      
        return view('communal.user', ['year' => $year]);
    }

}

