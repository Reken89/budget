<?php

namespace App\Structure\DevSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\OfsSection\Admin\Dto\OfsIndexDto;
use App\Structure\Ofs24Section\Admin\Actions\Ofs24IndexAction;
use App\Structure\OfsSection\Admin\Requests\OfsIndexRequest;

class DevController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает коммунальные услуги за выбранный год и месяц
     * Возвращает тарифы за выбранный год
     *
     * @param OfsIndexRequest $request
     * @return array
     */
    public function index(OfsIndexRequest $request)
    {
        if ($request->info == "no"){
            $info = ['info' => 'no',];
        } else {
            $dto = OfsIndexDto::fromRequest($request);
            $info = $this->action(Ofs24IndexAction::class)->run($dto);
            
            session(['user' => $request->user]);
            session(['year' => $request->year]);
            session(['mounth' => $request->mounth]);
            session(['chapter' => $request->chapter]);
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
    public function user(OfsIndexRequest $request)
    {
        $info = [
            'year'    => $request->year,
            'mounth'  => $request->mounth,
            'user'    => $request->user,
            'chapter' => $request->chapter,
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


