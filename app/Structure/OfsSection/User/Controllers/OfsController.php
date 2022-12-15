<?php

namespace App\Structure\OfsSection\User\Controllers;

use Illuminate\Http\Request;
use App\Core\Controllers\Controller;
use App\Structure\OfsSection\User\Dto\OfsIndexDto;
use App\Structure\OfsSection\User\Dto\OfsUpdateDto;
use App\Structure\OfsSection\User\Requests\OfsIndexRequest;
use App\Structure\OfsSection\User\Requests\OfsUpdateRequest;
use App\Structure\OfsSection\User\Actions\OfsIndexAction;
use App\Structure\OfsSection\User\Actions\OfsUpdateAction;

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
        if ($request->info == "no"){
            $info = ["info"   => 'no',];
        } else {       
            $dto = OfsIndexDto::fromRequest($request);
            $info = $this->action(OfsIndexAction::class)->run($dto);
        }
        
        return view('ofs.back.user', ['info' => $info]); 
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     * Так же передает информацию 
     *
     * @param OfsIndexRequest $request
     * @return view
     */
    public function user(OfsIndexRequest $request)
    {   
        $info = [
            'user'    => $request->user,
            'year'    => $request->year,
            'mounth'  => $request->mounth,
            'chapter' => $request->chapter,
            'info'    => $request->info,
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

    }
        
}



