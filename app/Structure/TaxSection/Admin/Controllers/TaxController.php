<?php

namespace App\Structure\TaxSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use App\Structure\TaxSection\Admin\Actions\TaxUploadAction;

class TaxController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает ЕНП
     *
     * @param 
     * @return 
     */
    public function index()
    {        
        return view('tax.back.admin'); 
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     *
     * @param OfsIndexRequest $request
     * @return view
     */
    public function user()
    {    
        return view('tax.admin');
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
        $result = $this->action(TaxUploadAction::class)->run($info);
        
        if ($result == true){
            echo "XML файл загружен в БД Laravel";
        } else {
            echo "Загрузка в Laravel не удалась";
        }

    }
    
           
}



