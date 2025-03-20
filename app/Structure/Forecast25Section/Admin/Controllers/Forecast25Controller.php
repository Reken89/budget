<?php

namespace App\Structure\Forecast25Section\Admin\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Structure\Forecast25Section\Admin\Requests\UpdateRequest;
use App\Structure\Forecast25Section\Admin\Dto\UpdateDto;
use App\Structure\Forecast25Section\Admin\Actions\ExaminCommunalAction;
use App\Structure\Forecast25Section\Admin\Actions\SelectTarrifAction;
use App\Structure\Forecast25Section\Admin\Actions\UpdateTarrifAction;
use App\Structure\Forecast25Section\Admin\Actions\SelectForecastAction;
use App\Structure\Forecast25Section\Admin\Actions\SynchTableAction;

class Forecast25Controller extends Controller
{
     /**
     * Front отрисовка страницы
     *
     * @param
     * @return 
     */
    public function FrontView(Request $request)
    {
        if(isset($request->title)){
            $title = $request->title;
        }else{
            $title = "heat";
        }
        $info = [
            'title' => $title,
        ];
        
        return view('forecast25.forecast', ['info' => $info]);   
    }
    
     /**
     * Back отрисовка страницы
     *
     * @param 
     * @return 
     */
    public function BackView(Request $request)
    { 
        $examin = [
            '2024' => $this->action(ExaminCommunalAction::class)->ExaminCommunal(2024),
            '2025' => $this->action(ExaminCommunalAction::class)->ExaminCommunal(2025),
        ];
        
        $info = [
            'examin'   => $examin,
            'tarrif'   => $this->action(SelectTarrifAction::class)->SelectAll(),
            'forecast' => $this->action(SelectForecastAction::class)->SelectForecast($request->title),
        ];
        
        return view('forecast25.back.forecast', ['info' => $info]);         
    }
    
    /**
     * Обновление тарифа
     *
     * @param UpdateRequest $request
     * @return 
     */
    public function UpdateTarrif(UpdateRequest $request)
    { 
        $dto = UpdateDto::fromRequest($request);
        return $this->action(UpdateTarrifAction::class)->UpdateTarrif($dto);
    }
    
    /**
     * Синхронизация таблиц
     * communals и forecast25
     *
     * @param 
     * @return 
     */
    public function SynchTable()
    { 
        $result = $this->action(SynchTableAction::class)->SynchTable();
        if($result == true){
            echo "Синхронизация выполнена успешно!";
        }else{
            echo "Что то пошло не так...";
        }
    }
    
}
