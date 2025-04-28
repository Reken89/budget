<?php

namespace App\Structure\Count25Section\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\Count25Section\User\Exports\ExportTable;
use App\Structure\Count25Section\User\Actions\SelectCountAction;
use App\Structure\Count25Section\User\Actions\CalculatorCountAction;
use App\Structure\Count25Section\User\Actions\UpdateCountAction;
use App\Structure\Count25Section\User\Actions\SynchCountAction;
use App\Structure\Count25Section\User\Actions\StatusCountAction;
use App\Structure\Count25Section\User\Requests\IndexRequest;
use App\Structure\Count25Section\User\Requests\UpdateRequest;
use App\Structure\Count25Section\User\Dto\IndexDto;
use App\Structure\Count25Section\User\Dto\UpdateDto;

class UserCount25Controller extends Controller
{
    private string $day_x = "2025-10-01";
       
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
            'max_date' => $this->action(SelectCountAction::class)->DefineDate(),
            'today'  => date('Y-m-d'),
            'day_x'  => $this->day_x,
        ];
        
        return view('count25.user', ['info' => $info]);   
    }
    
    /**
     * Front отрисовка развернутой таблицы
     *
     * @param IndexRequest $request
     * @return 
     */
    public function FrontScale(IndexRequest $request)
    {      
        $info = [
            'year'     => $request->year,
            'variant'  => $request->variant,
        ];
        return view('count25.user_scale', ['info' => $info]);   
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
        $result = $this->action(SelectCountAction::class)->SelectInfo($dto);
        if($dto->variant == 8){
            $color = "blue";
            $total = [];
            $date = [];
            $status = "no";
        }else{
            $color = $result[0]['status'] == 2 ? "red" : "green";
            $total = $this->action(CalculatorCountAction::class)->CalculatorTotal($dto->variant, $result);
            $date = $this->action(SelectCountAction::class)->ChapterDate($dto->variant);
            $status = $result[0]['status'] == 2 ? "yes" : "no";
        }
        
        $info = [
            'color'  => $color,
            'date'   => $date,
            'result' => $result,
            'total'  => $total,
            'status' => $status,
            'today'  => date('Y-m-d'),
            'day_x'  => $this->day_x,
        ];
        
        //Сессия для выгрузки в EXCEL
        session(['info' => $info]);
        
        return view('count25.back.user', ['info' => $info]);  
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
       
    /**
     * Синхронизация таблиц
     * Наполнение 2026 и 2027
     * 
     * @param 
     * @return string
     */
    public function UpdateYears()
    { 
        $this->action(SynchCountAction::class)->SynchYears(); 
        echo "Информация в 2027 и 2028 годах обновлена!";                    
    } 
    
    /**
     * Обновляем статус в таблице counts25
     * 
     * @param IndexRequest $request
     * @return string
     */
    public function UpdateStatus(IndexRequest $request)
    { 
        $dto = IndexDto::fromRequest($request);
        $info = $this->action(StatusCountAction::class)->UpdateStatus($dto);        
        return $info == true ? "Информация отправлена в ФЭУ!" : "Возникла ошибка!";                   
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
    
}

