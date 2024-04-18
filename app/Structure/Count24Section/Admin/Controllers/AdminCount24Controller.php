<?php

namespace App\Structure\Count24Section\Admin\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\Count24Section\Admin\Exports\ExportTable;
use App\Structure\Count24Section\Admin\Requests\Count24UpdateRequest;
use App\Structure\Count24Section\Admin\Requests\Count24IndexRequest;
use App\Structure\Count24Section\Admin\Dto\Count24UpdateDto;
use App\Structure\Count24Section\Admin\Dto\Count24IndexDto;
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
    public function FrontView(Count24IndexRequest $request)
    {
        $info = [
            'year'    => $request->year,
            'variant' => $request->variant,
        ];
        return view('count24.admin', ['info' => $info]);   
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
    
    /**
     * Выгрузка таблицы в EXCEL
     * 
     * @param 
     * @return Excel
     */
    public function ExportTable()
    { 
        return Excel::download(new ExportTable, 'table.xlsx');
    }  
    
    /**
     * Синхронизация таблиц
     * Прогноз коммунальных услус
     * с таблицей смета24
     * 
     * @param 
     * @return Excel
     */
    public function GetCommunal()
    { 
        echo "Синхронизация выполнена, страница будет перезагружена!";
    } 
    
}




