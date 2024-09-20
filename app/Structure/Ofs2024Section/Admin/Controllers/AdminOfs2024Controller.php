<?php

namespace App\Structure\Ofs2024Section\Admin\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\Ofs2024Section\Admin\Dto\Ofs2024SelectDto;
use App\Structure\Ofs2024Section\Admin\Actions\Ofs2024SelectAction;
use App\Structure\Ofs2024Section\Admin\Actions\Ofs2024StatusAction;
use Illuminate\Http\Request;

class AdminOfs2024Controller extends Controller
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
            'mounth'  => $request->mounth,
            'chapter' => $request->chapter,
            'user'    => $request->user,
        ];
        
        return view('ofs2024.admin', ['info' => $info]);   
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
        
        if(count($request->chapter) < 2 && count($request->mounth) < 2 && count($request->user) < 2){
            $variant = "one";
            $chapter = $request->chapter[0];
        }else{
            $variant = "many";
            $chapter = $request->chapter[0];
        }
        
        $info = [
            'table'   => $table,
            'variant' => $variant,
            'chapter' => $chapter,
        ];
        
        //Сохраняем таблицу в сессию
        //Для использования при выгрузке в excel
        session(['table' => $table]);
        
        return view('ofs2024.table.admin', ['info' => $info]);  
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
            echo "Вы разрешили редактирование для централизованной бухгалтерии";
        }else{
            echo "Ошибка открытия редактирования!";
        }
    }
       
}









