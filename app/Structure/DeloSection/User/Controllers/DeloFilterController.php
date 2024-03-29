<?php

namespace App\Structure\DeloSection\User\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use App\Structure\DeloSection\User\Actions\DeloFilterAction;
use App\Structure\DeloSection\User\Actions\DeloSelectDocsAction;

class DeloFilterController extends Controller
{
     /**
     * Front отрисовка таблицы documents
     * Отрисовка с учетом фильтров
     *
     * @param 
     * @return 
     */
    public function FrontView()
    {
        return view('delo.filters');   
    }
    
     /**
     * Back отрисовка таблицы documents
     * Отрисовка с учетом фильтров
     *
     * @param 
     * @return 
     */
    public function FilterView(Request $request)    
    {
        if($request->datestart){
            $table = $this->action(DeloSelectDocsAction::class)->SelectForFilter($request); 
        }else{
            $table = false;
        }
        $info = $this->action(DeloFilterAction::class)->SelectInfo(); 
        return view('delo.back.filters', ['info' => $info, 'table' => $table]);         
    }
    
}

