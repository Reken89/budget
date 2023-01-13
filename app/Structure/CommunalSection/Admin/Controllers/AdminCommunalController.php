<?php

namespace App\Structure\CommunalSection\Admin\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\JsonResponse;
use App\Core\Controllers\Controller;
use App\Structure\CommunalSection\Admin\Exports\ExportAdminTable;
use App\Structure\CommunalSection\Admin\Actions\CommunalIndexAction;
use App\Structure\CommunalSection\Admin\Actions\CommunalUpdateStatusAction;
use App\Structure\CommunalSection\Admin\Actions\CommunalUpdateTarrifAction;
use App\Structure\CommunalSection\Admin\Dto\CommunalIndexDto;
use App\Structure\CommunalSection\Admin\Dto\CommunalUpdateTarrifDto;
use App\Structure\CommunalSection\Admin\Requests\CommunalIndexRequest;
use App\Structure\CommunalSection\Admin\Requests\CommunalUpdateTarrifRequest;

class AdminCommunalController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает коммунальные услуги за выбранный год и месяц
     * Возвращает тарифы за выбранный год
     *
     * @param CommunalIndexRequest $request
     * @return array
     */
    public function index(CommunalIndexRequest $request)
    {
        if (session('option') == NULL || session('option') == FALSE){
            $year = $request->year;
            $mounth = $request->mounth;
            session(['year' => $request->year]);
            session(['mounth' => $request->mounth]);
            $info = $this->action(CommunalIndexAction::class)->run($year, $mounth);
        } else {
            $year = session('year');
            $mounth = session('mounth');
            $info = $this->action(CommunalIndexAction::class)->run($year, $mounth);
            session(['option' => false]);           
        }
        
        session(['info' => $info]);
        
        return view('communal.back.admin', ['info' => $info]);        
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон и выбранный год и месяц
     *
     * @return view
     */
    public function user(CommunalIndexRequest $request)
    {
        $info = [
            'year'   => $request->year,
            'mounth' => $request->mounth,
        ];
        return view('communal.admin', ['info' => $info]);
    }
    
     /**
     * Обновление статуса в таблице communals
     * 
     * @param Request $request
     * @return bool
     */
    public function updatestatus(Request $request)
    { 
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
        $id = $request->input('id');
        if (!$this->action(CommunalUpdateStatusAction::class)->run($id)) {
	    return false;
	} else {
            return true;
        }
        
    }
    
    /**
     * Обновление значения в таблице tarrifs
     * 
     * @param CommunalUpdateTarrifRequest $request
     * @return bool
     */
    public function updatetarrif(CommunalUpdateTarrifRequest $request)
    { 
        //Значение для варианта отрисовки таблицы
        session(['option' => true]);
        
        $dto = CommunalUpdateTarrifDto::fromRequest($request);
        if (!$this->action(CommunalUpdateTarrifAction::class)->run($dto)) {
	    return false;
	} else {
            return true;
        }
        
    }
    
     /**
     * Выгрузка таблицы в EXCEL
     * 
     * @param 
     * @return Excel
     */
    public function export()
    { 
        return Excel::download(new ExportAdminTable, 'table.xlsx');

    }
    
}

