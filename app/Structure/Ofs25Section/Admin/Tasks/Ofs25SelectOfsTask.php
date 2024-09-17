<?php

namespace App\Structure\Ofs25Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs25Section\User\Models\Ofs251;
use App\Structure\Ofs25Section\User\Models\Ofs252;
use App\Structure\Ofs25Section\User\Models\Ofs253;
use App\Structure\Ofs25Section\User\Models\Ofs254;
use App\Structure\Ofs25Section\User\Models\Ofs255;

class Ofs25SelectOfsTask extends BaseTask
{
    /**
     * Возвращает ОФС по заданным параметрам
     *
     * @param int $chapter, array $mounth, array $user
     * @return array
     */
    public function SelectOfs(int $chapter, array $mounth, array $user): array
    {
        if($chapter == "1"){
            $ofs = new Ofs251;
            $ekr_id = "ofs251.ekr_id";
        }
        if($chapter == "2"){
            $ofs = new Ofs252;
            $ekr_id = "ofs252.ekr_id";
        }
        if($chapter == "3"){
            $ofs = new Ofs253;
            $ekr_id = "ofs253.ekr_id";
        }
        if($chapter == "4"){
            $ofs = new Ofs254;
            $ekr_id = "ofs254.ekr_id";
        }
        if($chapter == "5"){
            $ofs = new Ofs255;
            $ekr_id = "ofs255.ekr_id";
        }
        
        $info = $ofs::select('ekr_id')  
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
            ->whereIn('user_id', $user)
            ->whereIn('mounth', $mounth) 
            ->join('ekr', $ekr_id, '=', 'ekr.id')    
            ->with([
                'ekr', 
                'user:id,name',
            ])   
            ->groupBy('ekr_id')
            ->orderBy('ekr.number', 'asc')
            ->orderBy('ekr.main', 'desc')
            ->orderBy('ekr.shared', 'desc')
            ->orderBy('ekr.title', 'asc')    
            ->get()
            ->toArray();
        return $info;                 
    }   

}
