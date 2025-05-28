<?php

namespace App\Structure\APISection\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use App\Structure\APISection\Actions\CommunalAction;
use App\Structure\APISection\Actions\OfsAction;

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
    
     /**
     * Работа с ofs
     *
     * @param Request $request
     * @return 
     */
    public function OFSInfo(Request $request)
    {
        if(isset($request->key) && $request->key == $this->key){
            $this->action(OfsAction::class)->SendMail();
        }else{
            return false;
        }
    }
    
    /**
     * Работа с communals
     * Отправка email уведомлений пользователям
     *
     * @param Request $request
     * @return 
     */
    public function CommunalUsers(Request $request)
    {
        if(isset($request->key) && $request->key == $this->key){
            $this->action(CommunalAction::class)->ExaminUsers();
        }else{
            return false;
        }
    }
    
}


