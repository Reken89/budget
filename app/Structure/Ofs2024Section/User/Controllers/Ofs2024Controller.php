<?php

namespace App\Structure\Ofs2024Section\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Structure\Ofs2024Section\User\Requests\Ofs2024UpdateRequest;
use App\Structure\Ofs2024Section\User\Requests\Ofs2024ResetRequest;
use App\Structure\Ofs2024Section\User\Dto\Ofs2024SelectDto;
use App\Structure\Ofs2024Section\User\Dto\Ofs2024UpdateDto;
use App\Structure\Ofs2024Section\User\Dto\Ofs2024ResetDto;
use App\Structure\Ofs2024Section\User\Actions\Ofs2024SelectAction;
use App\Structure\Ofs2024Section\User\Actions\Ofs2024UpdateAction;
use App\Structure\Ofs2024Section\User\Actions\Ofs2024ResetAction;
use App\Structure\Ofs2024Section\User\Actions\Ofs2024StatusAction;
use App\Structure\Ofs2024Section\User\Actions\Ofs2024SynchAction;
use App\Structure\Ofs2024Section\User\Exports\Export2024UserTable;

class Ofs2024Controller extends Controller
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
        
        return view('ofs2024.user', ['info' => $info]);   
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
            $dto = Ofs2024SelectDto::fromRequest($request);
            $table = $this->action(Ofs2024SelectAction::class)->SelectInfo($dto);
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
        
        return view('ofs2024.table.user', ['info' => $info]);  
    }
    
    /**
     * Обновляем информацию в ОФС
     *
     * @param Ofs2024UpdateRequest $request
     * @return 
     */
    public function UpdateInfo(Ofs2024UpdateRequest $request)
    {  
        $dto = Ofs2024UpdateDto::fromRequest($request);
        $this->action(Ofs2024UpdateAction::class)->UpdateInfo($dto);

    }
    
    /**
     * Выполняем сброс информации в ОФС
     *
     * @param Ofs2024ResetRequest $request
     * @return 
     */
    public function ResetInfo(Ofs2024ResetRequest $request)
    {  
        $dto = Ofs2024ResetDto::fromRequest($request);
        $this->action(Ofs2024ResetAction::class)->ResetInfo($dto);

    }
    
    /**
     * Обновляем статус в таблице ofs
     *
     * @param Request $request
     * @return 
     */
    public function UpdateStatus(Request $request)
    {  
        $result = $this->action(Ofs2024StatusAction::class)->UpdateStatus($request->mounth, $request->chapter, $request->user);
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
        return Excel::download(new Export2024UserTable, 'table.xlsx');
    }
    
    /**
     * Синхронизация таблицы
     *
     * @param Request $request
     * @return 
     */
    public function SynchInfo(Request $request)
    {  
        $this->action(Ofs2024SynchAction::class)->StartSynch($request->mounth, $request->chapter, $request->user);  
        echo "Синхронизация успешно выполнена!";
    }
   
}
