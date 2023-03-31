<?php

namespace App\Structure\CommunalSection\Ugkh\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\CommunalSection\Admin\Actions\CommunalIndexAction;
use App\Structure\CommunalSection\Admin\Requests\CommunalIndexRequest;

class UgkhCommunalController extends Controller
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
        $year = $request->year;
        $mounth = $request->mounth;
        $info = $this->action(CommunalIndexAction::class)->run($year, $mounth);
       
        session(['info' => $info]);
        
        return view('communal.back.ugkh', ['info' => $info]);        
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
        return view('communal.ugkh', ['info' => $info]);
    }
    
}
