<?php

namespace App\Structure\DeloSection\User\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use App\Structure\DeloSection\User\Actions\DeloCorrAction;
use App\Structure\DeloSection\User\Actions\DeloUpdateCorrAction;
use App\Structure\DeloSection\User\Actions\DeloAddCorrAction;
use App\Structure\DeloSection\User\Actions\DeloDeleteAction;

class DeloCorrController extends Controller
{
     /**
     * Front отрисовка страницы корреспондентов
     *
     * @param 
     * @return 
     */
    public function FrontView()
    {
        return view('delo.corr');   
    }
    
     /**
     * Back отрисовка страницы корреспондентов
     *
     * @param 
     * @return 
     */
    public function TableView()
    {
        $info = $this->action(DeloCorrAction::class)->SelectInfo(); 
        return view('delo.back.corr', ['info' => $info]);         
    }
    
    /**
     * Обновляем значения в таблице correspondents
     *
     * @param Request $request
     * @return 
     */
    public function UpdateTable(Request $request)
    {
        return $this->action(DeloUpdateCorrAction::class)->UpdateCorr($request->id, $request->title);        
    }
    
    /**
     * Добавляем строку в таблицу correspondents
     *
     * @param Request $request
     * @return 
     */
    public function AddCorr(Request $request)
    {
        $result = $this->action(DeloAddCorrAction::class)->CreateCorr($request->title);
        return $result == true ? "Корреспондент успешно добавлен!" : "Что то пошло не так!";       
    }
    
    /**
     * Удаляем строку в таблицу correspondents
     *
     * @param Request $request
     * @return 
     */
    public function DeleteCorr(Request $request)
    {
        $this->action(DeloDeleteAction::class)->DeleteCorr($request->id);   
    }
    
}

