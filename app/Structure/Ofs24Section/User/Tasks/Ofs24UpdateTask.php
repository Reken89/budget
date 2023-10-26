<?php

namespace App\Structure\Ofs24Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs24Section\Admin\Models\Ofs24;
use App\Structure\Ofs24Section\User\Dto\Ofs24UpdateDto;

class Ofs24UpdateTask extends BaseTask
{
    /**
     * Обновляет значение поля fact в таблице Ofs24 по id
     *
     * @param Ofs24UpdateDto $dto
     * @return bool
     */
    public function fact(Ofs24UpdateDto $dto): bool
    {                
        $result = Ofs24::where('user_id', $dto->user_id)
            ->where('ekr_id', $dto->ekr_id)
            ->where('mounth', $dto->mounth)
            ->where('chapter', $dto->chapter)    
            ->where('fact_mounth', '!=', $dto->fact_mounth)    
            ->update([
                'fact_all' => Ofs24::raw("fact_all + $dto->fact_mounth"),
            ]);    
        
        return $result == true ? true : false;
    }
    
     /**
     * Обновляет значение поля kassa в таблице Ofs24 по id
     *
     * @param Ofs24UpdateDto $dto
     * @return bool
     */
    public function kassa(Ofs24UpdateDto $dto): bool
    {                
        $result = Ofs24::where('user_id', $dto->user_id)
            ->where('ekr_id', $dto->ekr_id)
            ->where('mounth', $dto->mounth)
            ->where('chapter', $dto->chapter)
            ->where('kassa_mounth', '!=', $dto->kassa_mounth)
            ->update([
                'kassa_all' => Ofs24::raw("kassa_all + $dto->kassa_mounth"),
            ]);    
        
        return $result == true ? true : false;
    }
    
    /**
     * Обновляет значения в таблице Ofs24 по id
     *
     * @param Ofs24UpdateDto $dto
     * @return array
     */
    public function run(Ofs24UpdateDto $dto): bool
    {        
        $result = Ofs24::where('user_id', $dto->user_id)
            ->where('ekr_id', $dto->ekr_id)
            ->where('mounth', $dto->mounth)
            ->where('chapter', $dto->chapter)    
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
                'credit_end_term'  => $dto->credit_end_term,
                'debit_end_all'    => $dto->debit_end_all,
                'debit_end_term'   => $dto->debit_end_term,
                'return_old_year'  => $dto->return_old_year,
            ]);
        
        return $result == true ? true : false;
    }
}

