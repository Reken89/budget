<?php

namespace App\Structure\Ofs25Section\User\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Structure\Ofs25Section\User\Dto\Ofs25SelectDto;
use App\Structure\Ofs25Section\User\Actions\Ofs25SelectAction;

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
        return view('ofs25.table.user', ['info' => $info]);  
    }
   
}



