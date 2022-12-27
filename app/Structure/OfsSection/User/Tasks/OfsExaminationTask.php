<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Models\Ofs;
use Illuminate\Database\Eloquent\Builder;

class OfsExaminationTask extends BaseTask
{
    /**
     * Возвращает ИТОГИ ОФС по заданным параметрам
     *
     * @param string $user, string $year, string $mounth, string $chapter
     * @return array
     */
    public function run(string $user, string $year, string $mounth, string $chapter): array
    {        
        $total = Ofs::selectRaw('((SUM(`credit_year_all`) + SUM(`fact_all`) - SUM(`debit_year_all`) - SUM(`kassa_all`)) - '
                    . '(SUM(`credit_end_all`) - SUM(`debit_end_all`)) + SUM(`return_old_year`)) AS total1')
            ->selectRaw('(SUM(`lbo`) - SUM(`fact_all`) + SUM(`prepaid`) - SUM(`credit_year_all`)) AS total2')
            ->where('user_id', $user)
            ->where('year', $year)
            ->where('mounth', $mounth)
            ->where('chapter', $chapter)
            ->whereHas('ekr', function (Builder $query) {
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
            })
            ->groupBy('year')            
            ->first()
            ->toArray();
        return $total;  

    }
}

