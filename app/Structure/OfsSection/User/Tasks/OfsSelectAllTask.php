<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Dto\OfsIndexDto;
use App\Structure\OfsSection\User\Models\Ofs;

class OfsSelectAllTask extends BaseTask
{
    /**
     * Возвращает ОФС по заданным параметрам
     *
     * @param OfsIndexDto $dto
     * @return array
     */
    public function run(OfsIndexDto $dto): array
    {
        $info = Ofs::select()
            ->selectRaw('((`credit_year_all` + `fact_all` - `debit_year_all` - `kassa_all`) - '
                    . '(`credit_end_all` - `debit_end_all`) + `return_old_year`) AS total1')
            ->selectRaw('(`lbo` - `fact_all` + `prepaid` - `credit_year_all`) AS total2')
            ->where('user_id', $dto->user)
            ->where('year', $dto->year) 
            ->where('mounth', $dto->mounth) 
            ->where('chapter', $dto->chapter)
            ->with([
                'ekr', 
                'user:id,name',
                ]) 
            ->get()
            ->toArray();
        return $info; 
                
    }
}

