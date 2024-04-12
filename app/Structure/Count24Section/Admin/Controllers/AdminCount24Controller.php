<?php

namespace App\Structure\Count24Section\Admin\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use App\Structure\Count24Section\Admin\Requests\Count24UpdateRequest;
use App\Structure\Count24Section\Admin\Dto\Count24UpdateDto;
use App\Structure\Count24Section\Admin\Actions\Count24SelectAction;
use App\Structure\Count24Section\Admin\Actions\Count24UpdateAction;

class AdminCount24Controller extends Controller
{
     /**
     * Front отрисовка страницы
     *
     * @param 
     * @return 
     */
    public function FrontView()
    {
        return view('count24.admin');   
    }
    
     /**
     * Back отрисовка 
     * Таблица Смета 2024 
     *
     * @param 
     * @return 
     */
    public function TableView()
    {
        $info = $this->action(Count24SelectAction::class)->SelectInfo(5, 2025); 
        return view('count24.back.admin', ['info' => $info]);         
    }
    
    /**
     * Обновляем значения в таблице counts24
     *
     * @param Count24UpdateRequest $request
     * @return 
     */
    public function UpdateInfo(Count24UpdateRequest $request)
    {
        $dto = Count24UpdateDto::fromRequest($request);
        $info = $this->action(Count24UpdateAction::class)->UpdateInfo($dto);          
    }
    
}




