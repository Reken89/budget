<?php

namespace App\Structure\BuildSection\Build\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\BuildSection\Build\Actions\BuildIndexAction;
use App\Structure\BuildSection\Build\Requests\BuildIndexRequest;

class BuildController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает таблицу по выбранным параметрам
     *
     * @param BuildIndexRequest $request
     * @return array
     */
    public function index(BuildIndexRequest $request)
    {
        if (session('option') == NULL || session('option') == FALSE){
            $year = $request->year;
            $mounth = $request->mounth;
            $variant = $request->variant;
            
            session(['year' => $request->year]);
            session(['mounth' => $request->mounth]);
            session(['variant' => $request->variant]);
        } else {
            $year = session('year');
            $mounth = session('mounth');
            $variant = session('variant');
            session(['option' => false]);
        }
        
        if ($variant == '1'){
            $info = [
                'result' => 'no',
                'variant' => 1,
            ];
        } else {
            $info = $this->action(BuildIndexAction::class)->run($year, $mounth, $variant);
        }
        
        //Записываем $info в сессию, для работы с ним в шаблоне excel
        session(['info' => $info]);

        return view('build.back.build', ['info' => $info]);    
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     *
     * @param BuildIndexRequest $request
     * @return view
     */
    public function user(BuildIndexRequest $request)
    {
        $info = [
            'year'   => $request->year,
            'mounth' => $request->mounth,
            'variant' => $request->variant,
        ];
        return view('build.build', ['info' => $info]);
    }             
}

