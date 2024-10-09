<?php

namespace App\Structure\OfsSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Models\Ofs;
use App\Structure\OfsSection\Admin\Dto\OfsIndexDto;

class OfsSelectAllTask extends BaseTask
{
    /**
     * Возвращает ОФС по заданным параметрам
     * Складывает значения
     *
     * @param OfsIndexDto $dto
     * @return array
     */
    public function run(OfsIndexDto $dto): array
    {        
        $info = Ofs::select('ekr_id')
            ->selectRaw('SUM(`lbo`) as lbo')
            ->selectRaw('SUM(`prepaid`) as prepaid')
            ->selectRaw('SUM(`credit_year_all`) as credit_year_all')
            ->selectRaw('SUM(`credit_year_term`) as credit_year_term') 
            ->selectRaw('SUM(`debit_year_all`) as debit_year_all') 
            ->selectRaw('SUM(`debit_year_term`) as debit_year_term')
            ->selectRaw('SUM(`fact_all`) as fact_all')
            ->selectRaw('SUM(`fact_mounth`) as fact_mounth')
            ->selectRaw('SUM(`kassa_all`) as kassa_all') 
            ->selectRaw('SUM(`kassa_mounth`) as kassa_mounth')
            ->selectRaw('SUM(`credit_end_all`) as credit_end_all')
            ->selectRaw('SUM(`credit_end_term`) as credit_end_term')
            ->selectRaw('SUM(`debit_end_all`) as debit_end_all')
            ->selectRaw('SUM(`debit_end_term`) as debit_end_term')
            ->selectRaw('SUM(`return_old_year`) as return_old_year')    
            ->selectRaw('((SUM(`credit_year_all`) + SUM(`fact_all`) - SUM(`debit_year_all`) - SUM(`kassa_all`)) - '
                    . '(SUM(`credit_end_all`) - SUM(`debit_end_all`)) + SUM(`return_old_year`)) AS total1')
            ->selectRaw('(SUM(`lbo`) - SUM(`fact_all`) + SUM(`prepaid`) - SUM(`credit_year_all`)) AS total2')
            ->with(['ekr'])
            ->whereIn('user_id', $dto->user)    
            ->whereIn('year', $dto->year)
            ->whereIn('mounth', $dto->mounth) 
            ->whereIn('chapter', $dto->chapter)
            ->join('ekr', 'ofs.ekr_id', '=', 'ekr.id')  
            ->orderBy('ekr.number', 'asc')
            ->orderBy('ekr.main', 'desc')
            ->orderBy('ekr.shared', 'desc')
            ->orderBy('ekr.title', 'asc')  
            ->groupBy('ekr_id')
            ->get()
            ->toArray();
        
        return $info;  

    }
}
