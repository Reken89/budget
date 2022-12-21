<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Dto\OfsUpdateDto;
use App\Structure\OfsSection\User\Models\Ofs;

class OfsUpdateTask extends BaseTask
{
    /**
     * Обновляет значения в таблице Ofs по id
     *
     * @param OfsIndexDto $dto
     * @return array
     */
    public function run(OfsUpdateDto $dto): bool
    {        
        $result = Ofs::find($dto->id)
            ->update([                
                'lbo'              => $dto->lbo,
                'prepaid'          => $dto->prepaid,
                'credit_year_all'  => $dto->credit_year_all,
                'credit_year_term' => $dto->credit_year_term,
                'debit_year_all'   => $dto->debit_year_all,
                'debit_year_term'  => $dto->debit_year_term,
                'fact_mounth'      => $dto->fact_mounth,
                'kassa_mounth'     => $dto->kassa_mounth,
                'credit_end_all'   => $dto->credit_end_all,
                'credit_end_term'  => $dto->credit_year_term,
                'debit_end_all'    => $dto->debit_end_all,
                'debit_end_term'   => $dto->debit_end_term,
                'return_old_year'  => $dto->return_old_year,
                'fact_all'         => Ofs::raw("fact_all + $dto->fact_mounth"),
                'kassa_all'        => Ofs::raw("kassa_all + $dto->kassa_mounth"),
            ]);        
        
        return $result == true ? true : false;

    }
}

