<?php

namespace App\Structure\CommunalSection\User\Controllers;

use Illuminate\Http\Request;
use App\Core\Controllers\Controller;
use App\Structure\CommunalSection\User\Dto\CommunalUpdateDto;
use App\Structure\CommunalSection\User\Dto\CommunalSendingDto;
use App\Structure\CommunalSection\User\Requests\CommunalUpdateRequest;
use App\Structure\CommunalSection\User\Requests\CommunalSendingRequest;
use App\Structure\CommunalSection\User\Actions\CommunalIndexAction;
use App\Structure\CommunalSection\User\Actions\CommunalUpdateAction;
use App\Structure\CommunalSection\User\Actions\CommunalSendingAction;
use App\Structure\CommunalSection\User\Actions\CommunalChangeAction;

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
     * @param CommunalUpdateRequest $request
     * @return bool
     */
    public function update(CommunalUpdateRequest $request)
    {
        $dto = CommunalUpdateDto::fromRequest($request);
        $status = $this->action(CommunalUpdateAction::class)->run($dto);
        
        return $status;
    }
    
     /**
     * Обновление статуса в таблице communals (отправка)
     * 
     * @param CommunalSendingRequest $request
     * @return string
     */
    public function sending(CommunalSendingRequest $request)
    { 
        $dto = CommunalSendingDto::fromRequest($request);
        if (!$this->action(CommunalSendingAction::class)->run($dto)) {
	    echo "Обнаружена ошибка в расчете тарифа. Отправка в Финуправление невозможна!";
	} else {
            echo "Информация отправлена в Финуправление";
        }

    }
    
     /**
     * Обновление статуса в таблице communals (запрос на редактирование)
     * 
     * @param Request $request
     * @return string
     */
    public function change(Request $request)
    { 
        $id = $request->input('id');
        if (!$this->action(CommunalChangeAction::class)->run($id)) {
	    echo "Обнаружена системная ошибка, сообщите разработчику!";
	} else {
            echo "Запрос отправлен в Финуправление";
        }
       
    }

}

