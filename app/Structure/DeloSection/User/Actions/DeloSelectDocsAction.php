<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Task\BaseTask;
use Illuminate\Http\Request;
use App\Structure\DeloSection\User\Models\Document;

class DeloSelectDocsAction extends BaseTask
{
    /**
     * Возвращает таблицу documents
     * С применением фильтров
     *
     * @param Request $request
     * @return
     */
    public function SelectForFilter(Request $request)
    {       
        $result = Document::select()      
            ->with([
                'user:id,name',
                'npa',
                'correspondent'
                ])
            ->whereDate('date', '>=', $request->datestart[0])
            ->whereDate('date', '<=', $request->datestop[0])    
            ->where('type', $request->type[0]);
                if($request->npa[0] !== 'no'){
                    $result = $result->where('npa_id', $request->npa[0]);
                }
                if($request->corr[0] !== 'no'){
                    $result = $result->where('correspondent_id', $request->corr[0]);
                }
                if($request->user[0] !== 'no'){
                    $result = $result->where('user_id', $request->user[0]);
                }
            $result = $result->orderBy('id', 'desc');
            $result = $result->get();
            $result->toArray();
        return $result;
    }
} 

