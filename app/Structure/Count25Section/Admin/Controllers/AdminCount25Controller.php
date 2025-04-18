<?php

namespace App\Structure\Count25Section\Admin\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\Count25Section\Admin\Actions\ExaminCountAction;
use App\Structure\Count25Section\Admin\Actions\CalculatorCountAction;
use App\Structure\Count25Section\Admin\Actions\UpdateCountAction;
use App\Structure\Count25Section\Admin\Requests\IndexRequest;
use App\Structure\Count25Section\Admin\Requests\UpdateRequest;
use App\Structure\Count25Section\Admin\Dto\IndexDto;
use App\Structure\Count25Section\Admin\Dto\UpdateDto;

class AdminCount25Controller extends Controller
{
    /**
     * Front отрисовка страницы
     *
     * @param IndexRequest $request
     * @return 
     */
    public function FrontView(IndexRequest $request)
    {      
        $info = [
            'year'     => $request->year,
            'variant'  => $request->variant,
            'examin'   => $this->action(ExaminCountAction::class)->ExaminCount(),
            'max_date' => $this->action(ExaminCountAction::class)->DefineDate(),
        ];
        return view('count25.admin', ['info' => $info]);   
    }
    
    /**
     * Back отрисовка 
     * Таблица бюджета 2026-2028
     *
     * @param IndexRequest $request
     * @return 
     */
    public function TableView(IndexRequest $request)
    {  
        $dto = IndexDto::fromRequest($request);
        $result = $this->action(ExaminCountAction::class)->SelectInfo($dto);
        if($dto->variant == 8){
            $color = "blue";
            $total = [];
            $date = [];
        }else{
            $color = $result[0]['status'] == 2 ? "red" : "green";
            $total = $this->action(CalculatorCountAction::class)->CalculatorTotal($dto->variant, $result);
            $date = $this->action(ExaminCountAction::class)->ChapterDate($dto->variant);
        }
        $info = [
            'color'  => $color,
            'date'   => $date,
            'result' => $result,
            'total'  => $total,
        ];
   
        return view('count25.back.admin', ['info' => $info]);  
    }
    
    /**
     * Обновляем значения в таблице counts25
     *
     * @param UpdateRequest $request
     * @return 
     */
    public function UpdateInfo(UpdateRequest $request)
    {
        $dto = UpdateDto::fromRequest($request);
        $this->action(UpdateCountAction::class)->UpdateLine($dto);    
        $number = $this->action(UpdateCountAction::class)->UpdateMain($dto);
        $ekr = $this->action(CalculatorCountAction::class)->SelectEkr($number);
        $this->action(UpdateCountAction::class)->UpdateShared($number, $ekr); 
    }
    
}