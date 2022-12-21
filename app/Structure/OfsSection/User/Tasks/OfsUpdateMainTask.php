<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Models\Ofs;

class OfsUpdateMainTask extends BaseTask
{
    /**
     * Обновляет значения поля main в таблице Ofs
     *
     * @param int $id, array $main
     * @return bool
     */
    public function run(int $id, array $main): bool
    {        
        $result = Ofs::find($id)
            ->update([                
                'lbo'              => $main['lbo'],
                'prepaid'          => $main['prepaid'],
                'credit_year_all'  => $main['credit_year_all'],
                'credit_year_term' => $main['credit_year_term'],
                'debit_year_all'   => $main['debit_year_all'],
                'debit_year_term'  => $main['debit_year_term'],
                'fact_all'         => $main['fact_all'],
                'fact_mounth'      => $main['fact_mounth'],
                'kassa_all'        => $main['kassa_all'],
                'kassa_mounth'     => $main['kassa_mounth'],
                'credit_end_all'   => $main['credit_end_all'],
                'credit_end_term'  => $main['credit_end_term'],
                'debit_end_all'    => $main['debit_end_all'],
                'debit_end_term'   => $main['debit_end_term'],
                'return_old_year'  => $main['return_old_year'],
            ]);        
        
        return $result == true ? true : false;

    }
}

