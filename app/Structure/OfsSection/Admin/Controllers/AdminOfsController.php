<?php

namespace App\Structure\OfsSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Structure\OfsSection\Admin\Dto\OfsIndexDto;
use App\Structure\OfsSection\Admin\Requests\OfsIndexRequest;
use App\Structure\OfsSection\Admin\Actions\OfsIndexAction;
use App\Structure\OfsSection\Admin\Actions\OfsUpdateStatusAction;
use App\Structure\OfsSection\Admin\Exports\ExportAdminTable;

class AdminOfsController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает ОФС
     *
     * @param OfsIndexRequest $request
     * @return array
     */
    public function index(Request $request)
    { 
        if (isset($request->mounth) && isset($request->chapter) && isset($request->user)){
            
            $dto = OfsIndexDto::fromRequest($request);
            $info = $this->action(OfsIndexAction::class)->run($dto);
            
            session(['user' => $request->user]);
            session(['year' => $request->year]);
            session(['mounth' => $request->mounth]);
            session(['chapter' => $request->chapter]);
        } else {
            $info = ['info' => 'no',];

        }
        
        session(['info' => $info]);
        
        return view('ofs.back.admin', ['info' => $info]); 
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     * Так же передает информацию 
     *
     * @param OfsIndexRequest $request
     * @return view
     */
    public function user(Request $request)
    {    
        $info = [
            'year'    => $request->year,
            'mounth'  => $request->mounth,
            'user'    => $request->user,
            'chapter' => $request->chapter,
            'info'    => $request->info,
        ];
        return view('ofs.admin', ['info' => $info]);

    }
    
     /**
     * Обновляем статусы в таблице ofs по заданным параметрам
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
        
        $result = $this->action(OfsUpdateStatusAction::class)->run($user, $year, $mounth, $chapter);
        if ($result == true){
            echo "Вы разрешили редактировать таблицу";
        } else {
            echo "Что то пошло не так! Сообщите разработчику...";
        }

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

