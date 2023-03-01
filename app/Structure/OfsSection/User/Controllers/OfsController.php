<?php

namespace App\Structure\OfsSection\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\OfsSection\User\Dto\OfsUpdateDto;
use App\Structure\OfsSection\User\Dto\OfsResetDto;
use App\Structure\OfsSection\User\Requests\OfsIndexRequest;
use App\Structure\OfsSection\User\Requests\OfsUpdateRequest;
use App\Structure\OfsSection\User\Requests\OfsUserRequest;
use App\Structure\OfsSection\User\Requests\OfsResetRequest;
use App\Structure\OfsSection\User\Actions\OfsIndexAction;
use App\Structure\OfsSection\User\Actions\OfsUpdateAction;
use App\Structure\OfsSection\User\Actions\OfsResetAction;
use App\Structure\OfsSection\User\Actions\OfsStatusAction;
use App\Structure\OfsSection\User\Actions\OfsSynchAction;
use App\Structure\OfsSection\User\Exports\ExportUserTable;

class OfsController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает ОФС
     *
     * @param OfsIndexRequest $request
     * @return array
     */
    public function index(OfsIndexRequest $request)
    {   
        //Отрисовка таблицы при нажатии кнопки "сформировать таблицу"
        if (session('option') == NULL || session('option') == FALSE){
            if ($request->info == "no"){
                $info = ['info' => 'no',];
            } else {
                $user = $request->user;
                session(['user' => $request->user]);
                $year = $request->year;
                session(['year' => $request->year]);
                $mounth = $request->mounth;
                session(['mounth' => $request->mounth]);
                $chapter = $request->chapter;
                session(['chapter' => $request->chapter]);
                
                $info = $this->action(OfsIndexAction::class)->run($user, $year, $mounth, $chapter);
            }
        
        //Отрисовка таблице при нажатии клавиши "ENTER"    
        } else {
            $user = session('user');
            $year = session('year');
            $mounth = session('mounth');
            $chapter = session('chapter');
            
            $info = $this->action(OfsIndexAction::class)->run($user, $year, $mounth, $chapter);
            session(['option' => false]);
        }
        session(['info' => $info]);
               
        return view('ofs.back.user', ['info' => $info]); 
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     * Так же передает информацию 
     *
     * @param OfsUserRequest $request
     * @return view
     */
    public function user(OfsIndexRequest $request)
    {        
        $info = [
            'year'    => $request->year,
            'mounth'  => $request->mounth,
            'user'    => $request->user,
            'chapter' => $request->chapter,
            'info'    => $request->info,
        ];
        
        return view('ofs.user', ['info' => $info]);
    }
    
     /**
     * Обновляет значения в таблице ofs
     *
     * @param OfsUpdateRequest $request
     * @return 
     */
    public function update(OfsUpdateRequest $request)
    { 
        $dto = OfsUpdateDto::fromRequest($request);
        $info = $this->action(OfsUpdateAction::class)->run($dto);
        
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
    }
    
    /**
     * Выполняем сброс в таблице ofs
     *
     * @param OfsResetRequest $request
     * @return 
     */
    public function reset(OfsResetRequest $request)
    { 
        $dto = OfsResetDto::fromRequest($request);
        $info = $this->action(OfsResetAction::class)->run($dto);
        
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
    }
    
     /**
     * Меняем статус строк в таблице ofs
     *
     * @param
     * @return 
     */
    public function stat()
    { 
        $user = session('user');
        $year = session('year');
        $mounth = session('mounth');
        $chapter = session('chapter');
        $chapter = $chapter[0];
        
        if (!$this->action(OfsStatusAction::class)->run($user, $year, $mounth, $chapter)) {
	    echo "В таблице присутствуют ошибки, отправку в ФЭУ невозможна";
	} else {
            echo "Информация успешно отправлена в ФЭУ";
        }

        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
    }
    
     /**
     * Выполняем заполнение значений за предыдущий месяц
     *
     * @param
     * @return 
     */
    public function synch()
    {     
        $user = session('user');
        $year = session('year');
        $mounth = session('mounth');
        $chapter = session('chapter');
        
        if($mounth == '1'){
            echo "Вы не можете синхронизировать январь!";
        } else {
            $this->action(OfsSynchAction::class)->run($user, $year, $mounth, $chapter);
            echo "Синхронизация выполнена успешно";
        }

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
}



