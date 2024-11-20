<?php

namespace App\Structure\AdminSection\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Отрисовка админки
     *
     * @param 
     * @return 
     */
    public function FrontView(Request $request)
    { 
        if($request->code == "teatr"){
            return view('admin.admin');
        }else{
            return redirect('/home');
        }

    }
    
}
