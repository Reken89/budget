<?php

namespace App\Structure\BuildSection\Admin\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Core\Controllers\Controller;
use App\Structure\BuildSection\Admin\Requests\BuildIndexRequest;

class AdminBuildController extends Controller
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
        $info = "ОК";
        return view('build.back.admin', ['info' => $info]);    
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
        return view('build.admin', ['info' => $info]);
    }       
    
}
