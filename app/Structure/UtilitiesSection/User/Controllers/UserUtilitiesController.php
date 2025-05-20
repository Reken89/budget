<?php

namespace App\Structure\UtilitiesSection\User\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\UtilitiesSection\User\Requests\IndexRequest;
use App\Structure\UtilitiesSection\User\Requests\UpdateRequest;
use App\Structure\UtilitiesSection\User\Dto\IndexDto;
use App\Structure\UtilitiesSection\User\Dto\UpdateDto;
use App\Structure\UtilitiesSection\User\Actions\SelectAction;
use App\Structure\UtilitiesSection\User\Actions\UpdateAction;

class UserUtilitiesController extends Controller
{
    private array $mounth = ['null', 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
    private array $type = ['heat', 'water', 'drainage', 'power', 'trash', 'negative'];
    private array $name = ['Теплоснабжение', 'Водоснабжение', 'Водоотведение', 'Электроснабжение', 'Вывоз мусора', 'Негативное воздействие'];
    
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
     * @param IndexRequest $request
     * @return 
     */
    public function TableView(IndexRequest $request)
    {  
        $dto = IndexDto::fromRequest($request);         
        $info = [
            'year'         => $dto->year,
            'mounth'       => $dto->mounth,
            'examin'       => $this->action(SelectAction::class)->ExaminCommunals(2025),
            'points'       => $this->action(SelectAction::class)->SelectPoints(),
            'mounth_name'  => $this->mounth,
        ];

        return view('utilities.back.user', ['info' => $info]);  
    }
    
    /**
     * Back отрисовка 
     * Таблица коммунальных услуг
     *
     * @param IndexRequest $request
     * @return 
     */
    public function TableCommunals(IndexRequest $request)
    {  
        $dto = IndexDto::fromRequest($request);         
        $info = [
            'year'      => $dto->year,
            'mounth'    => $dto->mounth,
            'communals' => $this->action(SelectAction::class)->SelectCommunals($dto),
            'tarrifs'   => $this->action(SelectAction::class)->SelectTarrifs($dto),
            'type'      => $this->type,
            'name'      => $this->name,
        ];

        return view('utilities.back.communals', ['info' => $info]);  
    }
    
    /**
     * Таблица коммунальных услуг (весь год)
     *
     * @param IndexRequest $request
     * @return 
     */
    public function TableWeb(IndexRequest $request)
    {       
        $dto = IndexDto::fromRequest($request); 
        $info = [
            'mounth'    => $this->mounth,
            'communals' => $this->action(SelectAction::class)->SelectAllCommunals($dto),
            'total'     => $this->action(SelectAction::class)->SelectTotal($dto),
        ];

        return view('utilities.web', ['info' => $info]);  
    }
    
    /**
     * Обновление значений в таблице communals
     *
     * @param UpdateRequest $request
     * @return bool
     */
    public function UpdateCommunals(UpdateRequest $request): bool
    {  
        $dto = UpdateDto::fromRequest($request);  
        return $this->action(UpdateAction::class)->UpdateCommunals($dto);
    }
    
}

