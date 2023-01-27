<?php

namespace App\Structure\BuildSection\Admin\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Core\Controllers\Controller;
use App\Structure\BuildSection\Admin\Requests\BuildIndexRequest;
use App\Structure\BuildSection\Admin\Requests\BuildUpdateRequest;
use App\Structure\BuildSection\Admin\Dto\BuildUpdateDto;
use App\Structure\BuildSection\Admin\Actions\BuildIndexAction;
use App\Structure\BuildSection\Admin\Actions\BuildUpdateAction;

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
    
    /**
     * Обновляет значения в таблицах repairs и work по id
     *
     * @param BuildUpdateRequest $request
     * @return 
     */
    public function update(BuildUpdateRequest $request)
    {
        $dto = BuildUpdateDto::fromRequest($request);
        $status = $this->action(BuildUpdateAction::class)->run($dto);
        
        return $status;       
    }
    
}
