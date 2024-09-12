<?php

namespace App\Structure\Ofs25Section\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Structure\Ofs25Section\User\Requests\Ofs25UpdateRequest;
use App\Structure\Ofs25Section\User\Requests\Ofs25ResetRequest;
use App\Structure\Ofs25Section\User\Dto\Ofs25SelectDto;
use App\Structure\Ofs25Section\User\Dto\Ofs25UpdateDto;
use App\Structure\Ofs25Section\User\Dto\Ofs25ResetDto;
use App\Structure\Ofs25Section\User\Actions\Ofs25SelectAction;
use App\Structure\Ofs25Section\User\Actions\Ofs25UpdateAction;
use App\Structure\Ofs25Section\User\Actions\Ofs25ResetAction;
use App\Structure\Ofs25Section\User\Actions\Ofs25StatusAction;
use App\Structure\Ofs25Section\User\Exports\Export25UserTable;

class Ofs25Controller extends Controller
{
     /**
     * Front отрисовка страницы
     *
     * @param 
     * @return 
     */
    public function FrontView(Request $request)
    {
        $info = [
            'role'    => Auth::user()->role(),
            'mounth'  => $request->mounth,
            'chapter' => $request->chapter,
            'user'    => $request->user,
        ];
        
        return view('ofs25.user', ['info' => $info]);   
    }
    
     /**
     * Back отрисовка 
     *
     * @param
     * @return 
     */
    public function TableView(Request $request)
    {  
        if(isset($request->mounth) && isset($request->chapter) && isset($request->user)){
            $dto = Ofs25SelectDto::fromRequest($request);
            $table = $this->action(Ofs25SelectAction::class)->SelectInfo($dto);
        }else{
            $table = false;
        }
        
        if(count($request->chapter) < 2){
            $variant = "one";
            $chapter = $request->chapter[0];
        }else{
            $variant = "many";
            $chapter = $request->chapter[0];
        }
        
        $info = [
            'role'    => Auth::user()->role(),
            'table'   => $table,
            'variant' => $variant,
            'chapter' => $chapter,
        ];
        
        //Сохраняем таблицу в сессию
        //Для использования при выгрузке в excel
        session(['table' => $table]);
        
        return view('ofs25.table.user', ['info' => $info]);  
    }
    
    /**
     * Обновляем информацию в ОФС
     *
     * @param Ofs25UpdateRequest $request
     * @return 
     */
    public function UpdateInfo(Ofs25UpdateRequest $request)
    {  
        $dto = Ofs25UpdateDto::fromRequest($request);
        $this->action(Ofs25UpdateAction::class)->UpdateInfo($dto);

    }
    
    /**
     * Выполняем сброс информации в ОФС
     *
     * @param Ofs25ResetRequest $request
     * @return 
     */
    public function ResetInfo(Ofs25ResetRequest $request)
    {  
        $dto = Ofs25ResetDto::fromRequest($request);
        $this->action(Ofs25ResetAction::class)->ResetInfo($dto);

    }
    
    /**
     * Обновляем статус в таблице ofs
     *
     * @param Request $request
     * @return 
     */
    public function UpdateStatus(Request $request)
    {  
        $result = $this->action(Ofs25StatusAction::class)->UpdateStatus($request->mounth, $request->chapter, $request->user);
        if ($result == true){
            echo "Информация отправлена в ФЭУ";
        }else{
            echo "Информация не отправлена в ФЭУ, в таблице присутствуют ошибки";
        }
    }
    
    /**
     * Выгрузка таблицы в excel
     *
     * @param Request $request
     * @return 
     */
    public function ExportTable(Request $request)
    {  
        return Excel::download(new Export25UserTable, 'table.xlsx');
    }
   
}



