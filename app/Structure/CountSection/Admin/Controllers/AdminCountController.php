<?php

namespace App\Structure\CountSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use App\Structure\CountSection\Admin\Requests\CountIndexRequest;

class AdminCountController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает 
     *
     * @param CountIndexRequest $request
     * @return array
     */
    public function index(CountIndexRequest $request)
    { 
        return view('count.back.admin');

    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     * Так же передает информацию 
     *
     * @param CountIndexRequest $request
     * @return view
     */
    public function user(CountIndexRequest $request)
    {  
        $info = [
            'year'    => $request->year,
            'variant' => $request->variant,
        ];
        return view('count.admin', ['info' => $info]);

    }
        
           
}

