<?php

namespace App\Structure\DevSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\DevSection\Admin\Dto\DevIndexDto;
use App\Structure\DevSection\Admin\Actions\DevIndexAction;
use App\Structure\DevSection\Admin\Requests\DevIndexRequest;

class DevController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает коммунальные услуги за выбранный год и месяц
     * Возвращает тарифы за выбранный год
     *
     * @param DevIndexRequest $request
     * @return array
     */
    public function index(DevIndexRequest $request)
    {
        if (session('option') == NULL || session('option') == FALSE){
            if ($request->info == "no"){
                $info = ['info' => 'no',];
            } else {
                $year = $request->year;
                $mounth = $request->mounth;
                session(['year' => $request->year]);
                session(['mounth' => $request->mounth]);
                
                $info = $this->action(DevIndexAction::class)->run($year, $mounth);            
            }
        } else {
            $year = session('year');
            $mounth = session('mounth');
            $info = $this->action(DevIndexAction::class)->run($year, $mounth);
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
    public function user(DevIndexRequest $request)
    {
        $info = [
            'year'    => $request->year,
            'mounth'  => $request->mounth,
            'info'    => $request->info,
        ];
        
        return view('dev.dev', ['info' => $info]);
    }
    
    /**
     * Front отрисовка страницы
     * Возвращает front шаблон и выбранный год и месяц
     *
     * @return view
     */
    public function web()
    {
        $info = session('info');
        
        return view('dev.web', ['info' => $info]);
    }
    
}


