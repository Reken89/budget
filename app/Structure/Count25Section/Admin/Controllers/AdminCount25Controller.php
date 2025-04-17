<?php

namespace App\Structure\Count25Section\Admin\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\Count25Section\Admin\Actions\ExaminCountAction;
use App\Structure\Count25Section\Admin\Actions\CalculatorCountAction;
use App\Structure\Count25Section\Admin\Requests\IndexRequest;
use App\Structure\Count25Section\Admin\Dto\IndexDto;

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
        $color = $result[0]['status'] == 2 ? "red" : "green";
        $info = [
            'color'  => $color,
            'date'   => $this->action(ExaminCountAction::class)->ChapterDate($dto->variant),
            'result' => $result,
            'total'  => $this->action(CalculatorCountAction::class)->CalculatorTotal($dto->variant, $result),
        ];
   
        return view('count25.back.admin', ['info' => $info]);  
    }
    
}