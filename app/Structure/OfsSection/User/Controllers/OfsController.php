<?php

namespace App\Structure\OfsSection\User\Controllers;

use Illuminate\Http\Request;
use App\Core\Controllers\Controller;
use App\Structure\OfsSection\User\Dto\OfsIndexDto;
use App\Structure\OfsSection\User\Dto\OfsUpdateDto;
use App\Structure\OfsSection\User\Dto\OfsResetDto;
use App\Structure\OfsSection\User\Dto\OfsStatusDto;
use App\Structure\OfsSection\User\Requests\OfsIndexRequest;
use App\Structure\OfsSection\User\Requests\OfsUpdateRequest;
use App\Structure\OfsSection\User\Requests\OfsUserRequest;
use App\Structure\OfsSection\User\Requests\OfsResetRequest;
use App\Structure\OfsSection\User\Requests\OfsStatusRequest;
use App\Structure\OfsSection\User\Actions\OfsIndexAction;
use App\Structure\OfsSection\User\Actions\OfsUpdateAction;
use App\Structure\OfsSection\User\Actions\OfsResetAction;
use App\Structure\OfsSection\User\Actions\OfsStatusAction;

class OfsController extends Controller
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
                
                $info = $this->action(OfsIndexAction::class)->run($user, $year, $mounth, $chapter);
            }
        
        //Отрисовка таблице при нажатии клавиши "ENTER"    
        } else {
            $user = session('user');
            $year = session('year');
            $mounth = session('mounth');
            $chapter = session('chapter');
            
            $info = $this->action(OfsIndexAction::class)->run($user, $year, $mounth, $chapter);
            session(['option' => false]);
        }
               
        return view('ofs.back.user', ['info' => $info]); 
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     * Так же передает информацию 
     *
     * @param OfsUserRequest $request
     * @return view
     */
    public function user()
    {        
        $info = [
            'user'    => 3,
            'year'    => 2023,
            'mounth'  => 1,
            'chapter' => 1,
            'info'    => 'no',
        ];
        
        return view('ofs.user', ['info' => $info]);
    }
    
     /**
     * Обновляет значения в таблице ofs
     *
     * @param OfsUpdateRequest $request
     * @return 
     */
    public function update(OfsUpdateRequest $request)
    { 
        $dto = OfsUpdateDto::fromRequest($request);
        $info = $this->action(OfsUpdateAction::class)->run($dto);
        
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);

    }
    
    /**
     * Выполняем сброс в таблице ofs
     *
     * @param OfsResetRequest $request
     * @return 
     */
    public function reset(OfsResetRequest $request)
    { 
        $dto = OfsResetDto::fromRequest($request);
        $info = $this->action(OfsResetAction::class)->run($dto);
        
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);

    }
    
     /**
     * Меняем статус строк в таблице ofs
     *
     * @param OfsStatusRequest $request
     * @return 
     */
    public function stat(OfsStatusRequest $request)
    { 
        $dto = OfsStatusDto::fromRequest($request);
        if (!$this->action(OfsStatusAction::class)->run($dto)) {
	    echo "В таблице присутствуют ошибки, отправку в ФЭУ невозможна";
            $mounth = session('mounth');
            var_dump($mounth);
	} else {
            echo "Информация успешно отправлена в ФЭУ";
            $mounth = session('mounth');
            var_dump($mounth);
        }
        
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);

    }
        
}



