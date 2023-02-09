<?php

namespace App\Structure\BuildSection\User\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Core\Controllers\Controller;
use App\Structure\BuildSection\User\Requests\BuildIndexRequest;
use App\Structure\BuildSection\User\Requests\BuildUpdateRequest;
use App\Structure\BuildSection\User\Requests\BuildAddRequest;
use App\Structure\BuildSection\User\Dto\BuildUpdateDto;
use App\Structure\BuildSection\User\Dto\BuildAddDto;
use App\Structure\BuildSection\User\Actions\BuildIndexAction;
use App\Structure\BuildSection\User\Actions\BuildUpdateAction;
use App\Structure\BuildSection\User\Actions\BuildAddAction;

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
            $info = $this->action(BuildIndexAction::class)->run($year, $mounth, $variant);
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
    
     /**
     * Обновляет значения в таблицах repairs
     *
     * @param BuildUpdateRequest $request
     * @return 
     */
    public function update(BuildUpdateRequest $request)
    {
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
        $dto = BuildUpdateDto::fromRequest($request);
        $status = $this->action(BuildUpdateAction::class)->run($dto);
        
        return $status;       
    }
    
    /**
     * Добавляет строки в таблицах repairs и work
     *
     * @param BuildAddRequest $request
     * @return 
     */
    public function add(BuildAddRequest $request)
    {
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
        $dto = BuildAddDto::fromRequest($request);
        $result = $this->action(BuildAddAction::class)->run($dto);
        
        return $result;       
    }
    
}
