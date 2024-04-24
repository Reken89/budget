<?php

namespace App\Structure\Count24Section\User\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\Count24Section\User\Requests\Count24IndexRequest;
use App\Structure\Count24Section\User\Requests\Count24UpdateRequest;
use App\Structure\Count24Section\User\Dto\Count24IndexDto;
use App\Structure\Count24Section\User\Dto\Count24UpdateDto;
use App\Structure\Count24Section\User\Actions\Count24SelectAction;
use App\Structure\Count24Section\User\Actions\Count24UpdateAction;
use App\Structure\Count24Section\User\Actions\Count24StatusAction;

class UserCount24Controller extends Controller
{
     /**
     * Front отрисовка страницы
     *
     * @param 
     * @return 
     */
    public function FrontView(Count24IndexRequest $request)
    {
        $info = [
            'year'    => $request->year,
            'variant' => $request->variant,
        ];
        return view('count24.user', ['info' => $info]);   
    }
    
     /**
     * Back отрисовка 
     * Таблица Смета 2024 
     *
     * @param Count24IndexRequest $request
     * @return 
     */
    public function TableView(Count24IndexRequest $request)
    {  
        $dto = Count24IndexDto::fromRequest($request);
        $info = $this->action(Count24SelectAction::class)->SelectInfo($dto); 
        
        //Сессия для выгрузки в EXCEL
        session(['info' => $info]);
      
        return view('count24.back.user', ['info' => $info]);  
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
    
    /**
     * Обновляем значения в таблице counts24
     *
     * @param Count24UpdateRequest $request
     * @return 
     */
    public function UpdateStatus(Count24IndexRequest $request)
    {
        $dto = Count24IndexDto::fromRequest($request);
        $info = $this->action(Count24StatusAction::class)->UpdateStatus($dto);
        
        return $info == true ? "Информация отправлена в ФЭУ!" : "Возникла ошибка!"; 
    }
   
}
