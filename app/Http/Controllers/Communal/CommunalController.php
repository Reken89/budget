<?php

namespace App\Http\Controllers\Communal;

use Illuminate\Http\Request;
use App\Request\CommunalRequest;
use App\Dto\CommunalUpdateDto;
use App\Http\Controllers\Controller;
use App\Actions\Communal\CommunalIndexAction;
use App\Actions\Communal\CommunalUpdateAction;

class CommunalController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает коммунальные услуги за выбранный год
     *
     * @param Request $request
     * @return array
     */
    public function index(Request $request)
    {
        $year = $request->input('year');
        $result = $this->action(CommunalIndexAction::class)->run($year);
        
        return view('communal.back.user', ['info' => $result]);
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон и выбранный год
     *
     * @param int $year 
     * @return view
     */
    public function user(int $year)
    {      
        return view('communal.user', ['year' => $year]);
    }
    
     /**
     * Обновление значений в таблице communals для пользователей
     * 
     * @param CommunalRequest $request
     * @return bool
     */
    public function update(CommunalRequest $request)
    {
        $dto = CommunalUpdateDto::fromRequest($request);
        $status = $this->action(CommunalUpdateAction::class)->run($dto);
        
        return $status;
    }

}

