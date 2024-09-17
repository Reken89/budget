<?php

namespace App\Structure\Ofs25Section\Admin\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\Ofs25Section\Admin\Dto\Ofs25SelectDto;
use App\Structure\Ofs25Section\Admin\Actions\Ofs25SelectAction;
use Illuminate\Http\Request;

class AdminOfs25Controller extends Controller
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
        
        return view('ofs25.admin', ['info' => $info]);   
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
        
        return view('ofs25.table.admin', ['info' => $info]);  
    }
       
}







