<?php

namespace App\Structure\DevSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\CommunalSection\Admin\Actions\CommunalIndexAction;
use App\Structure\CommunalSection\Admin\Requests\CommunalIndexRequest;

class DevController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает коммунальные услуги за выбранный год и месяц
     * Возвращает тарифы за выбранный год
     *
     * @param CommunalIndexRequest $request
     * @return array
     */
    public function index(CommunalIndexRequest $request)
    {
        if (session('option') == NULL || session('option') == FALSE){
            $year = $request->year;
            $mounth = $request->mounth;
            session(['year' => $request->year]);
            session(['mounth' => $request->mounth]);
            $info = $this->action(CommunalIndexAction::class)->run($year, $mounth);
        } else {
            $year = session('year');
            $mounth = session('mounth');
            $info = $this->action(CommunalIndexAction::class)->run($year, $mounth);
            session(['option' => false]);           
        }
        
        session(['info' => $info]);
        
        return view('dev.back.dev', ['info' => $info]);        
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон и выбранный год и месяц
     *
     * @return view
     */
    public function user(CommunalIndexRequest $request)
    {
        $info = [
            'year'   => $request->year,
            'mounth' => $request->mounth,
        ];
        return view('dev.dev', ['info' => $info]);
    }
    
}


