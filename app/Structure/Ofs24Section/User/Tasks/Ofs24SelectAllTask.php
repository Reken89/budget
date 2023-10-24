<?php

namespace App\Structure\Ofs24Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs24Section\Admin\Models\Ofs24;

class Ofs24SelectAllTask extends BaseTask
{
    /**
     * Возвращает ОФС по заданным параметрам по одному разделу
     *
     * @param int $user, int $year, int $mounth, int $chapter
     * @return array
     */
    public function run(int $user, int $year, int $mounth, array $chapter): array
    {
        $info = Ofs24::select()
            ->selectRaw('((`credit_year_all` + `fact_all` - `debit_year_all` - `kassa_all`) - '
                    . '(`credit_end_all` - `debit_end_all`) + `return_old_year`) AS total1')
            ->selectRaw('(`lbo` - `fact_all` + `prepaid` - `credit_year_all`) AS total2')
            ->where('user_id', $user)
            ->where('year', $year) 
            ->where('mounth', $mounth) 
            ->whereIn('chapter', $chapter)  
            ->join('ekr', 'ekr.id', '=', 'ekr_id')    
            ->with([
                'ekr', 
                'user:id,name',
            ])   
            ->orderBy('ekr.number', 'asc')
            ->orderBy('ekr.main', 'desc')
            ->orderBy('ekr.shared', 'desc')    
            ->get()
            ->toArray();
        return $info; 
                
    }
    
    /**
     * Возвращает ОФС по заданным параметрам по нескольким разделам
     *
     * @param int $user, int $year, int $mounth, int $chapter
     * @return array
     */
    public function many(int $user, int $year, int $mounth, array $chapter): array
    {
        $info = Ofs24::select('ekr_id', 'user_id')
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
            ->join('ekr', 'ekr.id', '=', 'ekr_id')     
            ->with([
                'ekr', 
                'user:id,name',
            ])    
            ->where('user_id', $user)    
            ->where('year', $year)
            ->where('mounth', $mounth) 
            ->whereIn('chapter', $chapter)     
            ->groupBy(['ekr_id', 'user_id']) 
            ->orderBy('ekr.number', 'asc')
            ->orderBy('ekr.main', 'desc')
            ->orderBy('ekr.shared', 'desc')     
            ->get()
            ->toArray();
        
        return $info; 
                
    }
}

