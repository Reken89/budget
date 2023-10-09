<?php

namespace App\Structure\ReportingSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\ReportingSection\Admin\Requests\DebtIndexRequest;
use App\Structure\ReportingSection\Admin\Requests\DebtUpdateRequest;
use App\Structure\ReportingSection\Admin\Dto\DebtUpdateDto;
use App\Structure\ReportingSection\Admin\Actions\DebtIndexAction;
use App\Structure\ReportingSection\Admin\Actions\DebtUpdateAction;

class DebtController extends Controller
{
    /**
     * Front отрисовка страницы
     * Возвращает front шаблон и выбранный год и месяц
     *
     * @return view
     */
    public function user(DebtIndexRequest $request)
    {
        $info = [
            'year' => $request->year,
        ];
        return view('reporting.debt', ['info' => $info]);
    }
    
    /**
     * Back отрисовка страницы
     * Возвращает таблицу за выбранный год и месяц
     * Возвращает тарифы за выбранный год
     *
     * @param DebtIndexRequest $request
     * @return array
     */
    public function index(DebtIndexRequest $request)
    {
        if (session('option') == NULL || session('option') == FALSE){
            $year = $request->year;
            session(['year' => $request->year]);
            $info = $this->action(DebtIndexAction::class)->run($year);
        } else {
            $year = session('year');
            $info = $this->action(DebtIndexAction::class)->run($year);
            session(['option' => false]);           
        }
        
        //session(['info' => $info]);
        
        return view('reporting.back.debt', ['info' => $info]);        
    }
    
    /**
     * Обновление значений в таблице debts
     * 
     * @param DebtUpdateRequest $request
     * @return bool
     */
    public function update(DebtUpdateRequest $request)
    {
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
        $dto = DebtUpdateDto::fromRequest($request);
        $status = $this->action(DebtUpdateAction::class)->run($dto);
        
        return $status;
    }
}
