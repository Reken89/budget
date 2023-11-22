<?php

namespace App\Structure\DevSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Structure\DevSection\Admin\Dto\DevIndexDto;
use App\Structure\DevSection\Admin\Dto\DevChangeDto;
use App\Structure\DevSection\Admin\Dto\DevSendingDto;
use App\Structure\DevSection\Admin\Actions\DevIndexAction;
use App\Structure\DevSection\Admin\Actions\DevUpdateAction;
use App\Structure\DevSection\Admin\Requests\DevIndexRequest;
use App\Structure\DevSection\Admin\Requests\DevChangeRequest;
use App\Structure\DevSection\Admin\Requests\DevSendingRequest;
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
        
        if (!$this->action(DevUpdateAction::class)->status_editor($id)) {
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
    public function change(DevChangeRequest $request)
    {                
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
        $dto = DevChangeDto::fromRequest($request);
        $result = $this->action(DevUpdateAction::class)->change($dto);
        return $result == true ? true : false;

    }
    
    /**
     * Изменение статуса в таблице communal
     * Статус отправлено
     * 
     * @param DevChangeRequest $request
     * @return bool
     */
    public function sending(DevSendingRequest $request)
    {                
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
        $dto = DevSendingDto::fromRequest($request);
        $status = $this->action(DevUpdateAction::class)->status_send($dto);
        
        if ($status['status'] == "NO") {
            $text = "\n";
	    echo "Обнаружены ошибки. Отправка в Финуправление невозможна!";
            echo $text;
            echo "Список ошибок:";
            echo $text;
            foreach ($status['result'] as $result) {
                echo $text;
                echo "В значении '$result[title]' Ваш тариф равен $result[tarif]";
                echo $text;
                echo "Не укладывается в диапазон от $result[one] до $result[two]";
                echo $text;
            }
	} else {
            echo "Информация отправлена в финансово-экономическое управление";
        }

    }
    
}


