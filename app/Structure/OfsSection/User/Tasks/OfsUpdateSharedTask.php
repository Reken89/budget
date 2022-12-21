<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Models\Ofs;

class OfsUpdateSharedTask extends BaseTask
{
    /**
     * Обновляет значения поле shared в таблице Ofs
     *
     * @param int $number, array $shared
     * @return bool
     */
    public function run(int $id, array $shared)//: bool
    {           
        
        $result = Ofs::find($id)
            ->update([                
                'lbo'              => $shared['lbo'],
                'prepaid'          => $shared['prepaid'],
                'credit_year_all'  => $shared['credit_year_all'],
                'credit_year_term' => $shared['credit_year_term'],
                'debit_year_all'   => $shared['debit_year_all'],
                'debit_year_term'  => $shared['debit_year_term'],
                'fact_all'         => $shared['fact_all'],
                'fact_mounth'      => $shared['fact_mounth'],
                'kassa_all'        => $shared['kassa_all'],
                'kassa_mounth'     => $shared['kassa_mounth'],
                'credit_end_all'   => $shared['credit_end_all'],
                'credit_end_term'  => $shared['credit_end_term'],
                'debit_end_all'    => $shared['debit_end_all'],
                'debit_end_term'   => $shared['debit_end_term'],
                'return_old_year'  => $shared['return_old_year'],
            ]);        
        
        //return $result == true ? true : false;
        return var_dump($id);

    }
}

