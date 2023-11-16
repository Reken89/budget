<?php

namespace App\Structure\Ofs24Section\Admin\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\OfsSection\Admin\Dto\OfsIndexDto;
use App\Structure\OfsSection\Admin\Requests\OfsIndexRequest;
use App\Structure\Ofs24Section\Admin\Actions\Ofs24IndexAction;
use App\Structure\Ofs24Section\Admin\Actions\Ofs24UpdateStatusAction;
use App\Structure\Ofs24Section\Admin\Exports\AdminTable;

class AdminOfs24IndexController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает ОФС24
     *
     * @param OfsIndexRequest $request
     * @return array
     */
    public function index(OfsIndexRequest $request)
    { 
        if ($request->info == "no"){
            $info = ['info' => 'no',];
        } else {
            $dto = OfsIndexDto::fromRequest($request);
            $info = $this->action(Ofs24IndexAction::class)->run($dto);
            
            session(['user' => $request->user]);
            session(['year' => $request->year]);
            session(['mounth' => $request->mounth]);
            session(['chapter' => $request->chapter]);
        }
        
        session(['info' => $info]);
        
        return view('ofs24.back.admin', ['info' => $info]); 
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     * Так же передает информацию 
     *
     * @param OfsIndexRequest $request
     * @return view
     */
    public function front(OfsIndexRequest $request)
    {    
        $info = [
            'year'    => $request->year,
            'mounth'  => $request->mounth,
            'user'    => $request->user,
            'chapter' => $request->chapter,
            'info'    => $request->info,
        ];
        return view('ofs24.admin', ['info' => $info]);

    }

    /**
     * Выгрузка таблицы в EXCEL
     * 
     * @param 
     * @return Excel
     */
    public function export()
    { 
        return Excel::download(new AdminTable, 'table.xlsx');
    } 

    /**
     * Обновляем статусы в таблице ofs24 по заданным параметрам
     *
     * @param 
     * @return 
     */
    public function status()
    {    
        $user = session('user');
        $year = session('year');
        $mounth = session('mounth');
        $chapter = session('chapter');
        
        $result = $this->action(Ofs24UpdateStatusAction::class)->run($user, $year, $mounth, $chapter);
        if ($result == true){
            echo "Вы разрешили редактировать таблицу";
        } else {
            echo "Что то пошло не так! Сообщите разработчику...";
        }

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
        
        return view('ofs24.web', ['info' => $info]);
    }
           
}
