<?php

namespace App\Structure\CountSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\CountSection\Admin\Requests\CountIndexRequest;
use App\Structure\CountSection\Admin\Requests\CountUpdateRequest;
use App\Structure\CountSection\Admin\Dto\CountUpdateDto;
use App\Structure\CountSection\Admin\Actions\CountIndexAction;
use App\Structure\CountSection\Admin\Actions\CountUpdateAction;
use App\Structure\CountSection\Admin\Exports\ExportAdminTable;

class AdminCountController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает 
     *
     * @param CountIndexRequest $request
     * @return array
     */
    public function index(CountIndexRequest $request)
    { 
        if (session('option') == NULL || session('option') == FALSE){
            session(['variant' => $request->variant]);
            session(['year' => $request->year]);
            $info = $this->action(CountIndexAction::class)->run($request->variant, $request->year);
        }else{
            $year = session('year');
            $variant = session('variant');
            $info = $this->action(CountIndexAction::class)->run($variant, $year);
            session(['option' => false]);
        }
        
        //Сессия для выгрузки в EXCEL
        session(['info' => $info]);
        
        return view('count.back.admin', ['info' => $info]);

    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     * Так же передает информацию 
     *
     * @param CountIndexRequest $request
     * @return view
     */
    public function user(CountIndexRequest $request)
    {  
        $info = [
            'year'    => $request->year,
            'variant' => $request->variant,
        ];
        return view('count.admin', ['info' => $info]);

    }
      
    /**
     * Обновляет значение в таблице смета по id
     *
     * @param CountUpdateRequest $request
     * @return
     */
    public function update(CountUpdateRequest $request)
    { 
        $dto = CountUpdateDto::fromRequest($request);
        $info = $this->action(CountUpdateAction::class)->run($dto);
        
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);

    }
    
    /**
     * Выгрузка таблицы в EXCEL
     * 
     * @param 
     * @return Excel
     */
    public function export()
    { 
        return Excel::download(new ExportAdminTable, 'table.xlsx');
    }  
           
}

