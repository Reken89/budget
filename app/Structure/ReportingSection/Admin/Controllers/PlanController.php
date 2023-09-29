<?php

namespace App\Structure\ReportingSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\ReportingSection\Admin\Actions\PlanUploadAction;

class PlanController extends Controller
{
    /**
     * Отрисовка страницы
     *
     * @param
     * @return view
     */
    public function index()
    {          
        $info = [];
        
        return view('reporting.back.plan', ['info' => $info]); 
    }
    
        /**
     * Загружаем Excel файл
     * Выполняем запись из Excel В БД
     *
     * @param 
     * @return 
     */
    public function upload(Request $request)
    {    
        if(isset($request->mounth)){
            session([
            'mounth'  => $request->mounth,
            ]);
        
            Excel::import(new PlanUploadAction,
            $request->file('file')->store('files'));

            $status = "yes";
        } else {
            $status = "error";
        }
               
        return view('reporting.back.report', ['status' => $status]); 
    }
    
}
