<?php

namespace App\Structure\CommunalSection\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Core\Controllers\Controller;
use App\Structure\CommunalSection\Admin\Actions\CommunalIndexAction;
use App\Structure\CommunalSection\Admin\Dto\CommunalIndexDto;
use App\Structure\CommunalSection\Admin\Requests\CommunalIndexRequest;

class AdminCommunalController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает коммунальные услуги за выбранный год и месяц
     * Возвращает тарифы за выбранный год
     *
     * @param CommunalIndexRequest $request
     * @return array
     */
    public function index(CommunalIndexRequest $request)
    {
        $dto = CommunalIndexDto::fromRequest($request);
        $info = $this->action(CommunalIndexAction::class)->run($dto);
        
        return view('communal.back.admin', ['info' => $info]);        
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон и выбранный год и месяц
     *
     * @return view
     */
    public function user(CommunalIndexRequest $request)
    {
        $info = [
            'year'   => $request->year,
            'mounth' => $request->mounth,
        ];
        return view('communal.admin', ['info' => $info]);
    }
    
}

