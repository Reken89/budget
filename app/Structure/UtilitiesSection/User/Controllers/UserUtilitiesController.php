<?php

namespace App\Structure\UtilitiesSection\User\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\UtilitiesSection\User\Requests\IndexRequest;
use App\Structure\UtilitiesSection\User\Dto\IndexDto;
use App\Structure\UtilitiesSection\User\Actions\SelectAction;

class UserUtilitiesController extends Controller
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
        return view('utilities.user', ['info' => $info]);   
    }
    
    /**
     * Back отрисовка 
     *
     * @param Request $request
     * @return 
     */
    public function TableView(IndexRequest $request)
    {  
        $dto = IndexDto::fromRequest($request);         
        $info = [
            'year'   => $dto->year,
            'mounth' => $dto->mounth,
            'examin' => $this->action(SelectAction::class)->ExaminCommunals(2025),
        ];

        return view('utilities.back.user', ['info' => $info]);  
    }
    
}

