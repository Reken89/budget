<?php

namespace App\Structure\UtilitiesSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\UtilitiesSection\Admin\Requests\IndexRequest;
use App\Structure\UtilitiesSection\Admin\Requests\UpdateTarrifsRequest;
use App\Structure\UtilitiesSection\Admin\Requests\SynchTarrifsRequest;
use App\Structure\UtilitiesSection\Admin\Requests\UpdateStatusRequest;
use App\Structure\UtilitiesSection\Admin\Dto\IndexDto;
use App\Structure\UtilitiesSection\Admin\Dto\UpdateTarrifsDto;
use App\Structure\UtilitiesSection\Admin\Dto\SynchTarrifsDto;
use App\Structure\UtilitiesSection\Admin\Dto\UpdateStatusDto;
use App\Structure\UtilitiesSection\Admin\Actions\IndexAction;
use App\Structure\UtilitiesSection\Admin\Actions\UpdateAction;
use App\Structure\UtilitiesSection\Admin\Exports\ExportTable;

class AdminUtilitiesController extends Controller
{
    private array $mounth = ['null', 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
    private string $message = "Синхронизация тарифов выполнена!";
    private string $stop = "Синхронизация в январе невозможна!";
    
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
        if(session('option') == NULL || session('option') == FALSE){
            $dto = IndexDto::fromRequest($request);  
            session(['year' => $dto->year]);
            session(['mounth' => $dto->mounth]);
        }else{
            $request->merge(['year' => session('year'), 'mounth' => session('mounth')]);
            $dto = IndexDto::fromRequest($request); 
            session(['option' => false]);          
        }

        $examin = [
            '2024' => $this->action(IndexAction::class)->ExaminCommunals(2024),
            '2025' => $this->action(IndexAction::class)->ExaminCommunals(2025),
        ];
        
        $mounth = [];       
        foreach ($dto->mounth as $key => $value) {
            $mounth[$key] = $this->mounth[$value];
        }
        
        $info = [
            'year'         => $dto->year,
            'mounth'       => $dto->mounth,
            'mounth_name'  => $mounth,
            'info'         => $this->action(IndexAction::class)->SelectInfo($dto),
            'variant'      => $this->action(IndexAction::class)->DefineVariant($dto),
            'communals'    => $this->action(IndexAction::class)->SelectCommunals($dto),
            'total'        => $this->action(IndexAction::class)->SelectTotal($dto),
            'examin'       => $examin,
        ];
   
        session(['info' => $info]);
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
            'variant' => $this->action(IndexAction::class)->DefineVariant($dto),
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
    
    /**
     * Синхронизация тарифов
     *
     * @param SynchTarrifsRequest $request
     * @return 
     */
    public function SynchTarrifs(SynchTarrifsRequest $request)
    {  
        session(['option' => true]);
        $dto = SynchTarrifsDto::fromRequest($request);
        if($dto->mounth == "1"){
            echo $this->stop;
        }else{
            $this->action(UpdateAction::class)->SynchTarrifs($dto);
            echo $this->message;
        }       
    }
    
    /**
     * Обновление статуса
     *
     * @param UpdateStatusRequest $request
     * @return bool
     */
    public function UpdateStatus(UpdateStatusRequest $request)
    {  
        session(['option' => true]);
        $dto = UpdateStatusDto::fromRequest($request);
        $this->action(UpdateAction::class)->UpdateStatus($dto);
        $this->action(UpdateAction::class)->SendMail($dto);
    }
    
    /**
     * Выгрузка таблицы в EXCEL
     * 
     * @param 
     * @return Excel
     */
    public function ExportTable()
    { 
        return Excel::download(new ExportTable, 'table.xlsx');

    }
    
}
