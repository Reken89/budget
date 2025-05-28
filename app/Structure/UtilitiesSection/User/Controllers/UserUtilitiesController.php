<?php

namespace App\Structure\UtilitiesSection\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\UtilitiesSection\User\Exports\ExportTable;
use App\Structure\UtilitiesSection\User\Requests\IndexRequest;
use App\Structure\UtilitiesSection\User\Requests\UpdateRequest;
use App\Structure\UtilitiesSection\User\Requests\StatusRequest;
use App\Structure\UtilitiesSection\User\Dto\IndexDto;
use App\Structure\UtilitiesSection\User\Dto\UpdateDto;
use App\Structure\UtilitiesSection\User\Dto\StatusDto;
use App\Structure\UtilitiesSection\User\Actions\SelectAction;
use App\Structure\UtilitiesSection\User\Actions\UpdateAction;
use App\Structure\UtilitiesSection\User\Actions\StatusAction;

class UserUtilitiesController extends Controller
{
    private array $mounth = ['null', 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
    private array $type = ['heat', 'water', 'drainage', 'power', 'trash', 'negative'];
    private array $name = ['Теплоснабжение', 'Водоснабжение', 'Водоотведение', 'Электроснабжение', 'Вывоз мусора', 'Негативное воздействие'];
    private string $message1 = "Вам разрешено редактировать данные!";
    private string $message2 = "Вы отправили запрос на редактирование в ФЭУ!";
    private string $message3 = "Вы отправили инормацию в ФЭУ!";
    private string $message4 = "В таблице обнаружены ошибки!";
    private string $message5 = "Вы уже отправляли в ФЭУ запрос на редактирование!";
    
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
        if(session('option') == NULL || session('option') == FALSE){
            $dto = IndexDto::fromRequest($request);  
            session(['year' => $dto->year]);
            session(['mounth' => $dto->mounth]);
        }else{
            $request->merge(['year' => session('year'), 'mounth' => session('mounth')]);
            $dto = IndexDto::fromRequest($request); 
            session(['option' => false]); 
        }
        
        $info = [
            'year'         => $dto->year,
            'mounth'       => $dto->mounth,
            'examin'       => $this->action(SelectAction::class)->ExaminCommunals(2025),
            'points'       => $this->action(SelectAction::class)->SelectPoints(),
            'communals'    => $this->action(SelectAction::class)->SelectCommunals($dto),
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
    
    /**
     * Обновление статуса в таблице
     *
     * @param StatusRequest $request
     * @return 
     */
    public function UpdateStatus(StatusRequest $request)
    {  
        session(['option' => true]);
        $dto = StatusDto::fromRequest($request);  
        if($dto->status == 1){
            //Выполняем проверку на дату и месяц!
            if (date('d') < 18 && ltrim(date('m'),'0') - 1 == $dto->mounth){
                echo $this->message1;
                $this->action(UpdateAction::class)->UpdateStatus($dto->id, 2);
            }else{
                echo $this->message2;
                $this->action(UpdateAction::class)->UpdateStatus($dto->id, 3);
                $this->action(StatusAction::class)->SendMail($dto, $this->mounth);
            }
        }elseif ($dto->status == 2) {
            $result = $this->action(StatusAction::class)->ExaminStatus($dto, $this->type);
            if($result == true){
                $this->action(UpdateAction::class)->UpdatePoints();
                $this->action(UpdateAction::class)->UpdateStatus($dto->id, 1);
                echo $this->message3;
            }else{
                echo $this->message4;
            }
        }else{
            echo $this->message5;
        }
    }
    
    /**
     * Экспорт таблицы в excel
     *
     * @param IndexRequest $request
     * @return 
     */
    public function ExportTable(IndexRequest $request)
    {     
        $dto = IndexDto::fromRequest($request); 
        $info = [
            'mounth'    => $this->mounth,
            'communals' => $this->action(SelectAction::class)->SelectAllCommunals($dto),
            'total'     => $this->action(SelectAction::class)->SelectTotal($dto),
        ];
        session(['info' => $info]);
        return Excel::download(new ExportTable, 'table.xlsx');
    }
    
}

