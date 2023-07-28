<?php

namespace App\Structure\ReportingSection\Admin\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use App\Structure\ReportingSection\Admin\Requests\ReportingIndexRequest;
use App\Structure\ReportingSection\Admin\Dto\ReportingIndexDto;
use App\Structure\ReportingSection\Admin\Actions\ReportingSelectAction;
use App\Structure\ReportingSection\Admin\Actions\ReportingDeleteAction;

class ReportingDetailingController extends Controller
{
     /**
     * Back отрисовка страницы
     * Возвращает ЕНП
     *
     * @param ReportingIndexRequest $request
     * @return 
     */
    public function index(ReportingIndexRequest $request)
    {   
        $options = [
            'year' => $request->year,
            'mounth' => $request->mounth,
            'meaning' => $request->meaning,
        ];
        
        session([
            'year' => $request->year,
            'mounth' => $request->mounth,
            'meaning' => $request->meaning,
        ]);
        
        $dto = ReportingIndexDto::fromRequest($request);
        $info = $this->action(ReportingSelectAction::class)->run($dto);
        
        $result = [
            'options' => $options,
            'info'    => $info,
        ];
               
        
        return view('reporting.back.detailing', ['result' => $result]); 
    }
    
     /**
     * Front отрисовка страницы
     * Возвращает front шаблон
     *
     * @param ReportingIndexRequest $request
     * @return view
     */
    public function user(ReportingIndexRequest $request)
    {       
        $info = [
            'year'    => $request->year,
            'mounth'  => $request->mounth,
            'meaning' => $request->meaning,
        ];
        
        return view('reporting.detailing', ['info' => $info]);
    }
    
    /**
     * Удаление значений из таблицы reporting
     *
     * @param 
     * @return 
     */
    public function delete()
    {       
        $delete = $this->action(ReportingDeleteAction::class)->run(session('year'), session('mounth'), session('meaning'));
        
        if ($delete == true){
            echo "Удаление выполенено";
        } else {
            echo "В этом разделе невозможно выполнить удаление";
        }
    }
    
}

