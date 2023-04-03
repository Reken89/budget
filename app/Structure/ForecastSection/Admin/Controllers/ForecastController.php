<?php

namespace App\Structure\ForecastSection\Admin\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Core\Controllers\Controller;
use App\Structure\ForecastSection\Admin\Exports\ExportTable;
use App\Structure\ForecastSection\Admin\Dto\ForecastIndexDto;
use App\Structure\ForecastSection\Admin\Dto\ForecastUpdateDto;
use App\Structure\ForecastSection\Admin\Dto\ForecastSynchDto;
use App\Structure\ForecastSection\Admin\Requests\ForecastIndexRequest;
use App\Structure\ForecastSection\Admin\Requests\ForecastUpdateRequest;
use App\Structure\ForecastSection\Admin\Requests\ForecastSynchRequest;
use App\Structure\ForecastSection\Admin\Actions\ForecastIndexAction;
use App\Structure\ForecastSection\Admin\Actions\ForecastUpdateAction;
use App\Structure\ForecastSection\Admin\Actions\ForecastSynchAction;
use App\Structure\ForecastSection\Admin\Actions\ForecastExaminAction;

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
        
        //Записываем результат таблицы в сессию
        //Для последующей выгрузки в EXCEL
        session(['info' => $info]);
        
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
    
    /**
     * Выгрузка таблицы в EXCEL
     * 
     * @param 
     * @return Excel
     */
    public function export()
    { 
        return Excel::download(new ExportTable, 'table.xlsx');

    }
    
    /**
     * Синхронизация таблиц
     * Коммунальные услуги и прогноза
     * 
     * @param ForecastSynchRequest $request
     * @return string
     */
    public function synch(ForecastSynchRequest $request)
    { 
        $dto = ForecastSynchDto::fromRequest($request);
        $synch = $this->action(ForecastSynchAction::class)->run($dto);
        
        $examin = $this->action(ForecastExaminAction::class)->run($dto);
        
        if ($synch == true){
            $text = "\n";
            echo "Синхронизация успешно выполнена!";
            echo $text;
            echo "Ошибки обнаруженные в таблице коммунальных услуг";
            echo $text;
            echo "Год: $dto->year_one, Месяца:";           
            foreach ($examin['year_one'] as $exam) {
                echo "$exam,";
            }
            echo $text;
            echo "Год: $dto->year_two, Месяца:";           
            foreach ($examin['year_two'] as $exam) {
                echo "$exam,";
            }
        } else {
            echo "Что то пошло не так!";
        }

    }
    
}

