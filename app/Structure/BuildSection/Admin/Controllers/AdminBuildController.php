<?php

namespace App\Structure\BuildSection\Admin\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Core\Controllers\Controller;
use App\Structure\BuildSection\Admin\Requests\BuildIndexRequest;
use App\Structure\BuildSection\Admin\Actions\BuildIndexAction;

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
        $year = $request->year;
        $mounth = $request->mounth;
        $variant = $request->variant;
        
        if ($variant == '1'){
            $info = [
                'result' => 'no',
                'variant' => 1,
            ];
        } else {
            $info = $this->action(BuildIndexAction::class)->run($year, $mounth, $variant);
        }

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
