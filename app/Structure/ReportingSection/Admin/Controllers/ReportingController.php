<?php

namespace App\Structure\ReportingSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\ReportingSection\Admin\Actions\ReportingUploadAction;
use App\Structure\ReportingSection\Admin\Actions\ReportingExaminAction;

class ReportingController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает ЕНП
     *
     * @param TaxIndexRequest $request
     * @return 
     */
    public function index()
    {          
        return view('reporting.back.admin'); 
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     *
     * @param TaxIndexRequest $request
     * @return view
     */
    public function user()
    {         
        return view('reporting.admin');
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
        session([
            'mounth'  => $request->mounth,
            'year'    => $request->year,
            'meaning' => $request->meaning,
            ]);
        
        Excel::import(new ReportingUploadAction,
        $request->file('file')->store('files'));
        
        $this->action(ReportingExaminAction::class)->run($request->mounth, $request->year, $request->meaning);
    }
}