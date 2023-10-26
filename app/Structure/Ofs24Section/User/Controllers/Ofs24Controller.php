<?php

namespace App\Structure\Ofs24Section\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\Ofs24Section\User\Dto\Ofs24UpdateDto;
use App\Structure\Ofs24Section\User\Dto\Ofs24ResetDto;
use App\Structure\OfsSection\User\Requests\OfsIndexRequest;
use App\Structure\Ofs24Section\User\Requests\Ofs24UpdateRequest;
use App\Structure\OfsSection\User\Requests\OfsUserRequest;
use App\Structure\Ofs24Section\User\Requests\Ofs24ResetRequest;
use App\Structure\Ofs24Section\User\Actions\Ofs24IndexAction;
use App\Structure\Ofs24Section\User\Actions\Ofs24UpdateAction;
use App\Structure\Ofs24Section\User\Actions\Ofs24ResetAction;
use App\Structure\Ofs24Section\User\Actions\Ofs24SynchAction;

class Ofs24Controller extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает ОФС
     *
     * @param OfsIndexRequest $request
     * @return array
     */
    public function index(OfsIndexRequest $request)
    {   
        //Отрисовка таблицы при нажатии кнопки "сформировать таблицу"
        if (session('option') == NULL || session('option') == FALSE){
            if ($request->info == "no"){
                $info = ['info' => 'no',];
            } else {
                $user = $request->user;
                session(['user' => $request->user]);
                $year = $request->year;
                session(['year' => $request->year]);
                $mounth = $request->mounth;
                session(['mounth' => $request->mounth]);
                $chapter = $request->chapter;
                session(['chapter' => $request->chapter]);
                
                $info = $this->action(Ofs24IndexAction::class)->run($user, $year, $mounth, $chapter);
            }
        
        //Отрисовка таблице при нажатии клавиши "ENTER"    
        } else {
            $user = session('user');
            $year = session('year');
            $mounth = session('mounth');
            $chapter = session('chapter');
            
            $info = $this->action(Ofs24IndexAction::class)->run($user, $year, $mounth, $chapter);
            session(['option' => false]);
        }
        session(['info' => $info]);
               
        return view('ofs24.back.user', ['info' => $info]); 
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     * Так же передает информацию 
     *
     * @param OfsUserRequest $request
     * @return view
     */
    public function front(OfsIndexRequest $request)
    {        
        $info = [
            'year'    => $request->year,
            'mounth'  => $request->mounth,
            'user'    => $request->user,
            'chapter' => $request->chapter,
            'info'    => $request->info,
        ];
        
        return view('ofs24.user', ['info' => $info]);
    }
    
    /**
     * Обновляет значения в таблице ofs24
     *
     * @param OfsUpdateRequest $request
     * @return 
     */
    public function update(Ofs24UpdateRequest $request)
    { 
        $dto = Ofs24UpdateDto::fromRequest($request);
        $info = $this->action(Ofs24UpdateAction::class)->run($dto);
        
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
    }
    
    /**
     * Выполняем сброс в таблице ofs24
     *
     * @param Ofs24ResetRequest $request
     * @return 
     */
    public function reset(Ofs24ResetRequest $request)
    { 
        $dto = Ofs24ResetDto::fromRequest($request);
        $info = $this->action(Ofs24ResetAction::class)->run($dto);
        
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
    }
    
    /**
     * Выполняем заполнение значений за предыдущий месяц
     *
     * @param
     * @return 
     */
    public function synch()
    {     
        $user = session('user');
        $year = session('year');
        $mounth = session('mounth');
        $chapter = session('chapter');
        
        $this->action(Ofs24SynchAction::class)->run($user, $year, $mounth, $chapter);
        echo "Синхронизация выполнена успешно";

        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
    }
        
}




