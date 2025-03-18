<?php

namespace App\Structure\Forecast25Section\Admin\Controllers;

use App\Core\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Structure\Forecast25Section\Admin\Actions\ExaminCommunalAction;

class Forecast25Controller extends Controller
{
     /**
     * Front отрисовка страницы
     *
     * @param
     * @return 
     */
    public function FrontView()
    {
        return view('forecast25.forecast');   
    }
    
     /**
     * Back отрисовка страницы
     *
     * @param 
     * @return 
     */
    public function BackView()
    { 
        $info = [
            '2024' => $this->action(ExaminCommunalAction::class)->ExaminCommunal(2024),
            '2025' => $this->action(ExaminCommunalAction::class)->ExaminCommunal(2025),
        ];
        return view('forecast25.back.forecast', ['info' => $info]);         
    }
    
}
