<?php

namespace App\Structure\BlockSection\Admin\Controllers;

use Illuminate\Http\Request;
use App\Core\Controllers\Controller;
use App\Structure\BlockSection\Admin\Actions\WorkAction;

class StopController extends Controller
{
    /**
     * Отрисовка 
     *
     * @param 
     * @return 
     */
    public function ShowPage()
    {       
        $info = $this->action(WorkAction::class)->SelectInfo(); 
        return view('stop.stop', ['info' => $info]);
    }
    
    /**
     * Выполнение приказа
     *
     * @param 
     * @return 
     */
    public function ExecuteOrder(Request $request)
    {       
        $this->action(WorkAction::class)->UpdateInfo($request->key);
        return back();
    }
    
}