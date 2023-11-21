<?php

namespace App\Structure\DevSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Structure\DevSection\Admin\Dto\DevIndexDto;
use App\Structure\DevSection\Admin\Actions\DevIndexAction;
use App\Structure\DevSection\Admin\Actions\DevUpdateAction;
use App\Structure\DevSection\Admin\Requests\DevIndexRequest;
use App\Structure\DevSection\Admin\Requests\DevChangeRequest;
use App\Structure\DevSection\Admin\Exports\ExportTable;

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
    
    /**
     * Выгрузка таблицы в EXCEL
     * 
     * @param 
     * @return Excel
     */
    public function export()
    { 
        return Excel::download(new ExportTable, 'table.xlsx');

    }
    
     /**
     * Обновление значений в таблице communals для пользователей
     * 
     * @param CommunalUpdateRequest $request
     * @return bool
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
        if (!$this->action(DevUpdateAction::class)->status($id)) {
	    echo "Обнаружена системная ошибка, сообщите разработчику!";
	} else {
            echo "Запрос отправлен в финансово-экономическое управление";
        }
    }
    
    /**
     * Обновление значений в таблице communals для пользователей
     * 
     * @param DevChangeRequest $request
     * @return bool
     */
    public function change(Request $request)
    {             
        var_dump($request);
        
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
    }
    
}


