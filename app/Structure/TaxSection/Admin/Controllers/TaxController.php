<?php

namespace App\Structure\TaxSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\TaxSection\Admin\Exports\ExportTaxTable;
use App\Structure\TaxSection\Admin\Requests\TaxIndexRequest;
use App\Structure\TaxSection\Admin\Dto\TaxIndexDto;
use App\Structure\TaxSection\Admin\Actions\TaxUploadAction;
use App\Structure\TaxSection\Admin\Actions\TaxIndexAction;

class TaxController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает ЕНП
     *
     * @param TaxIndexRequest $request
     * @return 
     */
    public function index(TaxIndexRequest $request)
    {    
        $dto = TaxIndexDto::fromRequest($request);
        $info = $this->action(TaxIndexAction::class)->run($dto);
        
        //Информация для выгрузки в EXCEL
        session(['info' => $info]);
        
        return view('tax.back.admin', ['info' => $info]); 
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     *
     * @param TaxIndexRequest $request
     * @return view
     */
    public function user(TaxIndexRequest $request)
    {    
        $info = [
            'mounth' => $request->mounth,
        ];
        
        return view('tax.admin', ['info' => $info]);
    }
    
     /**
     * Загружаем XML файл
     * Выполняем запись из XML В БД
     *
     * @param 
     * @return 
     */
    public function upload(Request $request)
    {   
        $info = $request->file;
        $type = $_FILES['file']['type'];
        
        if ($type == 'text/xml'){ 
            $result = $this->action(TaxUploadAction::class)->run($info);        
            if ($result == true){
                $status = 1;
            } else {
                $status = 2;
            }
            
        } else {
            $status = 3;         
        }
        
        return view('tax.back.report', ['status' => $status]); 

    }
    
    /**
     * Выгрузка таблицы в EXCEL
     * 
     * @param 
     * @return Excel
     */
    public function export()
    { 
        return Excel::download(new ExportTaxTable, 'table.xlsx');

    }
    
           
}



