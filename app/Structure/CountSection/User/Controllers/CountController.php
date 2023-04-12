<?php

namespace App\Structure\CountSection\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\CountSection\Admin\Requests\CountIndexRequest;
use App\Structure\CountSection\User\Requests\CountUpdateRequest;
use App\Structure\CountSection\User\Dto\CountUpdateDto;
use App\Structure\CountSection\User\Actions\CountIndexAction;
use App\Structure\CountSection\User\Actions\CountUpdateAction;
use App\Structure\CountSection\User\Actions\CountUpdateStatusAction;
use App\Structure\CountSection\User\Exports\ExportUserTable;

class CountController extends Controller
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
        
        return view('count.back.user', ['info' => $info]);

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
        return view('count.user', ['info' => $info]);

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
        return Excel::download(new ExportUserTable, 'table.xlsx');
    }  
    
    /**
     * Меняем статус в таблице СМЕТА
     * Закрываем возможность редактировать таблицу для ЦБ
     * 
     * @param 
     * @return 
     */
    public function status()
    { 
        $year = session('year');
        $variant = session('variant');
        $result = $this->action(CountUpdateStatusAction::class)->run($variant, $year);
        
        if ($result == true){
            echo "Вы успешно отправили информацию в ФЭУ";
        } else {
            echo "Что то пошло не так...";
        }
        
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
    }  

}



