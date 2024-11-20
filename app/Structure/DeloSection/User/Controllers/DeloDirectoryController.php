<?php

namespace App\Structure\DeloSection\User\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use App\Structure\DeloSection\User\Actions\DeloSelectNpaAction;
use App\Structure\DeloSection\User\Actions\DeloAddNpaAction;

class DeloDirectoryController extends Controller
{
     /**
     * Front отрисовка страницы справочников
     *
     * @param 
     * @return 
     */
    public function FrontView()
    {
        return view('delo.directory');   
    }
    
     /**
     * Back отрисовка страницы справочников
     *
     * @param 
     * @return 
     */
    public function TableView()
    {
        $info = $this->action(DeloSelectNpaAction::class)->SelectNpa(); 
        return view('delo.back.directory', ['info' => $info]);         
    }
       
    /**
     * Добавляем строку в таблицу npa
     *
     * @param Request $request
     * @return 
     */
    public function AddNpa(Request $request)
    {
        $result = $this->action(DeloAddNpaAction::class)->CreateNpa($request->title);
        return $result == true ? "Вид документа успешно добавлен!" : "Что то пошло не так!";              
    }
    
}

