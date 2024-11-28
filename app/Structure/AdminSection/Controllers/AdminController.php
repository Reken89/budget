<?php

namespace App\Structure\AdminSection\Controllers;

use App\Structure\AdminSection\Actions\UserSelectAction;
use App\Structure\AdminSection\Actions\UserAddAction;
use App\Structure\AdminSection\Actions\UserUpdateAction;
use App\Structure\AdminSection\Requests\UserAddRequest;
use App\Structure\AdminSection\Requests\UserUpdateRequest;
use App\Structure\AdminSection\Requests\UserUpdatePasswordRequest;
use App\Structure\AdminSection\Dto\UserAddDto;
use App\Structure\AdminSection\Dto\UserUpdateDto;
use App\Structure\AdminSection\Dto\UserUpdatePasswordDto;
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
    
    /**
     * Отрисовка админки (Back)
     *
     * @param 
     * @return 
     */
    public function BackView()
    { 
        $info = $this->action(UserSelectAction::class)->SelectUsers();
        return view('admin.back.admin', ['info' => $info]);        
    }
    
    /**
     * Запись нового пользователя
     *
     * @param UserAddRequest $request
     * @return 
     */
    public function InsertUser(UserAddRequest $request)
    { 
        $dto = UserAddDto::fromRequest($request);
        $result = $this->action(UserAddAction::class)->InsertUser($dto);
        return $result == true ? "Пользователь добавлен!" : "Возникла ошибка!"; 
    }
    
    /**
     * Обновление значений пользователя
     *
     * @param UserUpdateRequest $request
     * @return 
     */
    public function UpdateUser(UserUpdateRequest $request)
    { 
        $dto = UserUpdateDto::fromRequest($request);
        $this->action(UserUpdateAction::class)->UpdateInfo($dto);
    }
    
    /**
     * Обновление пароля пользователя
     *
     * @param UserUpdatePasswordRequest $request
     * @return 
     */
    public function UpdatePassword(UserUpdatePasswordRequest $request)
    { 
        $dto = UserUpdatePasswordDto::fromRequest($request);
        $this->action(UserUpdateAction::class)->UpdatePassword($dto);       
    }
    
}
