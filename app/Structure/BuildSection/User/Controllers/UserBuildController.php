<?php

namespace App\Structure\BuildSection\User\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Core\Controllers\Controller;
use App\Structure\BuildSection\User\Requests\BuildIndexRequest;

class UserBuildController extends Controller
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

        }
        
        //Записываем $info в сессию, для работы с ним в шаблоне excel
        session(['info' => $info]);

        return view('build.back.user', ['info' => $info]);    
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
        return view('build.user', ['info' => $info]);
    }         
    
}
