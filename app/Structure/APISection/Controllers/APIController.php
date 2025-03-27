<?php

namespace App\Structure\APISection\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use App\Structure\APISection\Actions\CommunalAction;

class APIController extends Controller
{
    private int $key = 21052023;
    
     /**
     * Работа с communals
     *
     * @param Request $request
     * @return 
     */
    public function CommunalInfo(Request $request)
    {
        if(isset($request->key) && $request->key == $this->key){
            $this->action(CommunalAction::class)->SendMail();
        }else{
            return false;
        }
    }
    
}


