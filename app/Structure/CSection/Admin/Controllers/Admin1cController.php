<?php

namespace App\Structure\CSection\Admin\Controllers;

use Illuminate\Http\Request;
use App\Core\Controllers\Controller;
use App\Structure\CSection\Admin\Actions\AdminSelectAction;
use App\Structure\CSection\Admin\Actions\AdminUpdateAction;
use App\Structure\CSection\Admin\Actions\AdminStatusAction;
use App\Structure\CSection\Admin\Dto\AdminSelectDto;
use App\Structure\CSection\Admin\Dto\AdminUpdateDto;
use App\Structure\CSection\Admin\Dto\AdminStatusDto;
use App\Structure\CSection\Admin\Requests\AdminSelectRequest;
use App\Structure\CSection\Admin\Requests\AdminUpdateRequest;
use App\Structure\CSection\Admin\Requests\AdminStatusRequest;

class Admin1cController extends Controller
{
     /**
     * Front отрисовка страницы
     *
     * @param AdminSelectRequest $request
     * @return 
     */
    public function FrontView(AdminSelectRequest $request)
    {
        $info = [
            'year'    => $request->year,
            'mounth'  => $request->mounth,
            'user'    => $request->user,
            'variant' => $request->variant,
        ];
        
        return view('csection.admin', ['info' => $info]);   
    }
    
    /**
     * Back отрисовка 
     *
     * @param AdminSelectRequest $request
     * @return 
     */
    public function TableView(AdminSelectRequest $request)
    {            
        $dto = AdminSelectDto::fromRequest($request);       
        $position = count($dto->user) == 1 ? "one" : "many";      
        $info = $this->action(AdminSelectAction::class)->SelectInfo($dto); 
        
        $result = [
            'year'     => $dto->year,
            'mounth'   => $dto->mounth,
            'user'     => $dto->user,
            'variant'  => $dto->variant,
            'info'     => $info,
            'position' => $position,
            'users'    => $this->action(AdminSelectAction::class)->SelectUser($dto),
            'status'   => $this->action(AdminSelectAction::class)->SelectStatus($dto),
        ];
        
        return view('csection.back.table', ['info' => $result]);  
    }
    
    /**
     * Обновляем значения в таблице
     *
     * @param AdminUpdateRequest $request
     * @return 
     */
    public function UpdateInfo(AdminUpdateRequest $request)
    {
        $dto = AdminUpdateDto::fromRequest($request);
        $info = $this->action(AdminUpdateAction::class)->UpdateInfo($dto);          
    }
    
    /**
     * Обновляем статус
     *
     * @param AdminStatusRequest $request
     * @return 
     */
    public function UpdateStatus(AdminStatusRequest $request)
    {
        $dto = AdminStatusDto::fromRequest($request);    
        $this->action(AdminStatusAction::class)->UpdateStatus($dto); 
    }
   
}

