<?php

namespace App\Structure\UtilitiesSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use App\Structure\UtilitiesSection\Admin\Requests\IndexRequest;
use App\Structure\UtilitiesSection\Admin\Requests\UpdateTarrifsRequest;
use App\Structure\UtilitiesSection\Admin\Dto\IndexDto;
use App\Structure\UtilitiesSection\Admin\Dto\UpdateTarrifsDto;
use App\Structure\UtilitiesSection\Admin\Actions\IndexAction;
use App\Structure\UtilitiesSection\Admin\Actions\UpdateAction;

class AdminUtilitiesController extends Controller
{
    /**
     * Front отрисовка страницы
     *
     * @param IndexRequest $request
     * @return 
     */
    public function FrontView(IndexRequest $request)
    {      
        $dto = IndexDto::fromRequest($request);
        $info = [
            'year'   => $dto->year,
            'mounth' => $dto->mounth,
        ];
        return view('utilities.admin', ['info' => $info]);   
    }
    
    /**
     * Back отрисовка 
     *
     * @param Request $request
     * @return 
     */
    public function TableView(IndexRequest $request)
    {  
        $examin = [
            '2024' => $this->action(IndexAction::class)->ExaminCommunals(2024),
            '2025' => $this->action(IndexAction::class)->ExaminCommunals(2025),
        ];
        
        $dto = IndexDto::fromRequest($request);
        $info = [
            'year'   => $dto->year,
            'mounth' => $dto->mounth,
            'info'   => $this->action(IndexAction::class)->SelectInfo($dto),
            'examin' => $examin,
        ];
   
        return view('utilities.back.admin', ['info' => $info]);  
    }
    
    /**
     * Back отрисовка 
     * Таблица тарифы
     *
     * @param Request $request
     * @return
     */
    public function TableTarrifs(IndexRequest $request)
    {  
        $dto = IndexDto::fromRequest($request);
        $info = [
            'year'    => $dto->year,
            'mounth'  => $dto->mounth,
            'tarrifs' => $this->action(IndexAction::class)->SelectTarrifs($dto),
        ];
   
        return view('utilities.back.tarrifs', ['info' => $info]);  
    }
    
    /**
     * Обновление тарифов
     *
     * @param UpdateTarrifsRequest $request
     * @return bool
     */
    public function UpdateTarrifs(UpdateTarrifsRequest $request): bool
    {  
        $dto = UpdateTarrifsDto::fromRequest($request);
        return $this->action(UpdateAction::class)->UpdateTarrifs($dto);
    }
    
}
