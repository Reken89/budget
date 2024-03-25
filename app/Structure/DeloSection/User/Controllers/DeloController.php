<?php

namespace App\Structure\DeloSection\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Structure\DeloSection\User\Actions\DeloInfoAction;
use App\Structure\DeloSection\User\Actions\DeloUploadAction;

class DeloController extends Controller
{
     /**
     * Front отрисовка страницы
     *
     * @param string $variant
     * @return 
     */
    public function FrontView(string $variant)
    {
        return view('delo.delo', ['variant' => $variant]);   
    }
    
     /**
     * Back отрисовка страницы
     * Возвращает таблицу documents
     *
     * @param Request $request
     * @return 
     */
    public function BackView(Request $request)
    {
        if(!isset(session('variant'))){
            //$variant = $_SESSION['variant'];
            $variant = $request->variant;
            session(['variant' => $request->variant]); 
            //echo 123456789;
        }else{
            $variant = session('variant');
        }
        $info = $this->action(DeloInfoAction::class)->SelectAll($variant);  
        return view('delo.back.delo', ['info' => $info]);         
    }
    
    /**
     * Показываем шаблон загрузки
     *
     * @return 
     */
    public function UploadView()
    {
        return view('delo.upload');      
    }
    
    /**
     * Загрузка Excel файла
     *
     * @return 
     */
    public function Upload(Request $request)
    {
        Excel::import(new DeloUploadAction,
        $request->file('file')->store('files')); 
        echo "Таблица заполнена!";
    }
    
}

