<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Models\Ofs;

class OfsSelectAllTask extends BaseTask
{
    /**
     * Возвращает ОФС по заданным параметрам
     *
     * @param int $user, int $year, int $mounth, int $chapter
     * @return array
     */
    public function run(int $user, int $year, int $mounth, int $chapter): array
    {
        $info = Ofs::select()
            ->selectRaw('((`credit_year_all` + `fact_all` - `debit_year_all` - `kassa_all`) - '
                    . '(`credit_end_all` - `debit_end_all`) + `return_old_year`) AS total1')
            ->selectRaw('(`lbo` - `fact_all` + `prepaid` - `credit_year_all`) AS total2')
            ->where('user_id', $user)
            ->where('year', $year) 
            ->where('mounth', $mounth) 
            ->where('chapter', $chapter)
            ->with([
                'ekr', 
                'user:id,name',
                ]) 
            ->get()
            ->toArray();
        return $info; 
                
    }
}

