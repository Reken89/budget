<?php

namespace App\Structure\DeloSection\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Structure\DeloSection\User\Dto\DeloDocAddDto;
use App\Structure\DeloSection\User\Requests\DeloDocAddRequest;
use App\Structure\DeloSection\User\Actions\DeloInfoAction;
use App\Structure\DeloSection\User\Actions\DeloUploadAction;
use App\Structure\DeloSection\User\Actions\DeloExaminAction;
use App\Structure\DeloSection\User\Actions\DeloAddAction;

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
     * Back отрисовка исходящей корреспонденции
     * Возвращает таблицу documents
     *
     * @param 
     * @return 
     */
    public function OutView()
    {
        $info = $this->action(DeloInfoAction::class)->SelectAll("out");  
        return view('delo.back.delo', ['info' => $info]);         
    }
    
    /**
     * Back отрисовка исходящей корреспонденции
     * Возвращает таблицу documents
     *
     * @param 
     * @return 
     */
    public function InView()
    {
        $info = $this->action(DeloInfoAction::class)->SelectAll("in");  
        return view('delo.back.delo', ['info' => $info]);         
    }
    
    /**
     * Проверяем оригинальность номера
     * Добавляем информацию в таблицу documents
     *
     * @param DeloDocAddRequest $request
     * @return 
     */
    public function DocAdd(DeloDocAddRequest $request)
    {
        $dto = DeloDocAddDto::fromRequest($request);
        $examin = $this->action(DeloExaminAction::class)->ExaminNumber($dto->number, $dto->variant);
        
        if($examin == true){
            return "Номер занят...";
        }else{
            $result = $this->action(DeloAddAction::class)->DocAdd($dto);
            if($result){
                return "Запись добавлена!";
            }
        }
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

