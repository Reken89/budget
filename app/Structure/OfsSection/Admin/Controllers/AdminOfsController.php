<?php

namespace App\Structure\OfsSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Structure\OfsSection\Admin\Dto\OfsIndexDto;
use App\Structure\OfsSection\Admin\Requests\OfsIndexRequest;
use App\Structure\OfsSection\Admin\Actions\OfsIndexAction;

class AdminOfsController extends Controller
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
            $info = ['info' => 'no',];
        } else {
            $dto = OfsIndexDto::fromRequest($request);
            $info = $this->action(OfsIndexAction::class)->run($dto);
        }
        
        return view('ofs.back.admin', ['info' => $info]); 
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
            'year'    => $request->year,
            'mounth'  => $request->mounth,
            'user'    => $request->user,
            'chapter' => $request->chapter,
            'info'    => $request->info,
        ];
        return view('ofs.admin', ['info' => $info]);

    }
           
}

