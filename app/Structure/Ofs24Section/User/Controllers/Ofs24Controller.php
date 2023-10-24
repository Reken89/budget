<?php

namespace App\Structure\Ofs24Section\User\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\OfsSection\User\Dto\OfsUpdateDto;
use App\Structure\OfsSection\User\Dto\OfsResetDto;
use App\Structure\OfsSection\User\Requests\OfsIndexRequest;
use App\Structure\OfsSection\User\Requests\OfsUpdateRequest;
use App\Structure\OfsSection\User\Requests\OfsUserRequest;
use App\Structure\OfsSection\User\Requests\OfsResetRequest;
use App\Structure\Ofs24Section\User\Actions\Ofs24IndexAction;

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
        
}




