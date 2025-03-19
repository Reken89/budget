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

class Forecast25Controller extends Controller
{
     /**
     * Front отрисовка страницы
     *
     * @param
     * @return 
     */
    public function FrontView()
    {
        return view('forecast25.forecast');   
    }
    
     /**
     * Back отрисовка страницы
     *
     * @param 
     * @return 
     */
    public function BackView()
    { 
        $examin = [
            '2024' => $this->action(ExaminCommunalAction::class)->ExaminCommunal(2024),
            '2025' => $this->action(ExaminCommunalAction::class)->ExaminCommunal(2025),
        ];
        
        $info = [
            'examin' => $examin,
            'tarrif' => $this->action(SelectTarrifAction::class)->SelectAll(),
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
    
}
