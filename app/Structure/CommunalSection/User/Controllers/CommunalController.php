<?php

namespace App\Structure\CommunalSection\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Structure\CommunalSection\User\Dto\CommunalChangeDto;
use App\Structure\CommunalSection\User\Dto\CommunalSendingDto;
use App\Structure\CommunalSection\User\Actions\CommunalIndexAction;
use App\Structure\CommunalSection\User\Actions\CommunalUpdateAction;
use App\Structure\CommunalSection\User\Requests\CommunalIndexRequest;
use App\Structure\CommunalSection\User\Requests\CommunalChangeRequest;
use App\Structure\CommunalSection\User\Requests\CommunalSendingRequest;
use App\Structure\CommunalSection\User\Exports\ExportTable;

class CommunalController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает коммунальные услуги за выбранный год и месяц
     * Возвращает тарифы за выбранный год
     *
     * @param CommunalIndexRequest $request
     * @return array
     */
    public function index(CommunalIndexRequest $request)
    {
        if (session('option') == NULL || session('option') == FALSE){
            if ($request->info == "no"){
                $info = ['info' => 'no',];
            } else {
                $year = $request->year;
                $mounth = $request->mounth;
                session(['year' => $request->year]);
                session(['mounth' => $request->mounth]);
                
                $info = $this->action(CommunalIndexAction::class)->run($year, $mounth);            
            }
        } else {
            $year = session('year');
            $mounth = session('mounth');
            $info = $this->action(CommunalIndexAction::class)->run($year, $mounth);
            session(['option' => false]);
        }
        
        session(['info' => $info]);
        
        return view('communal.back.user', ['info' => $info]);        
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон и выбранный год и месяц
     *
     * @return view
     */
    public function user(CommunalIndexRequest $request)
    {
        $info = [
            'year'    => $request->year,
            'mounth'  => $request->mounth,
            'info'    => $request->info,
        ];
        
        return view('communal.user', ['info' => $info]);
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
        
        return view('communal.web', ['info' => $info]);
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
        $mounth = $request->input('mounth');
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
        if (!$this->action(CommunalUpdateAction::class)->status_editor($id, $mounth)) {
	    echo "Обнаружена системная ошибка, сообщите разработчику!";
	} else {
            $date = date("d");
            if ($date < 18 && ltrim(date('m'),'0') - 1 == $mounth){
                echo "Запрос на редактирование согласован";
            }else{
                echo "Запрос отправлен в финансово-экономическое управление";
            }
        }
    }
    
    /**
     * Обновление значений в таблице communals для пользователей
     * 
     * @param CommunalChangeRequest $request
     * @return bool
     */
    public function change(CommunalChangeRequest $request)
    {                
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
        $dto = CommunalChangeDto::fromRequest($request);
        $result = $this->action(CommunalUpdateAction::class)->change($dto);
        return $result == true ? true : false;

    }
    
    /**
     * Изменение статуса в таблице communal
     * Статус отправлено
     * 
     * @param CommunalChangeRequest $request
     * @return bool
     */
    public function sending(CommunalSendingRequest $request)
    {                
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
        $dto = CommunalSendingDto::fromRequest($request);
        $status = $this->action(CommunalUpdateAction::class)->status_send($dto);
        
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

