<?php

namespace App\Structure\ForecastSection\Admin\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Core\Controllers\Controller;
use App\Structure\ForecastSection\Admin\Dto\ForecastIndexDto;
use App\Structure\ForecastSection\Admin\Dto\ForecastUpdateDto;
use App\Structure\ForecastSection\Admin\Requests\ForecastIndexRequest;
use App\Structure\ForecastSection\Admin\Requests\ForecastUpdateRequest;
use App\Structure\ForecastSection\Admin\Actions\ForecastIndexAction;
use App\Structure\ForecastSection\Admin\Actions\ForecastUpdateAction;

class ForecastController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает таблицу по выбранным параметрам
     *
     * @param ForecastIndexRequest $request
     * @return array
     */
    public function index(ForecastIndexRequest $request)
    {
        $dto = ForecastIndexDto::fromRequest($request);
        $info = $this->action(ForecastIndexAction::class)->run($dto);
        
        return view('forecast.back.forecast', ['info' => $info]);  
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     *
     * @param ForecastIndexRequest $request
     * @return view
     */
    public function user(ForecastIndexRequest $request)
    {
        $info = [
            'chapter' => $request->chapter,
        ];
        return view('forecast.forecast', ['info' => $info]);

    }   
    
    /**
     * Обнавляет значения тарифов для прогноза
     *
     * @param ForecastUpdateRequest $request
     * @return 
     */
    public function update(ForecastUpdateRequest $request)
    {
        $dto = ForecastUpdateDto::fromRequest($request);
        $update = $this->action(ForecastUpdateAction::class)->run($dto);

    }  
    
}

