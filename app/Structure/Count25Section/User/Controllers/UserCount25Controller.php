<?php

namespace App\Structure\Count25Section\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class UserCount25Controller extends Controller
{
    /**
     * Front отрисовка страницы
     *
     * @param IndexRequest $request
     * @return 
     */
    public function FrontView()
    {      
        return view('count25.user');   
    }
    
    /**
     * Front отрисовка развернутой таблицы
     *
     * @param IndexRequest $request
     * @return 
     */
    public function FrontScale()
    {      
 
    }
    
    /**
     * Back отрисовка 
     * Таблица бюджета 2026-2028
     *
     * @param IndexRequest $request
     * @return 
     */
    public function TableView()
    {     
        return view('count25.back.user');  
    }
    
    /**
     * Обновляем значения в таблице counts25
     *
     * @param UpdateRequest $request
     * @return 
     */
    public function UpdateInfo()
    {

    }
       
    /**
     * Синхронизация таблиц
     * Наполнение 2026 и 2027
     * 
     * @param 
     * @return string
     */
    public function UpdateYears()
    { 
                    
    } 
    
    /**
     * Выгрузка таблицы в EXCEL
     * 
     * @param 
     * @return Excel
     */
    public function ExportTable()
    { 
        
    } 
    
}

