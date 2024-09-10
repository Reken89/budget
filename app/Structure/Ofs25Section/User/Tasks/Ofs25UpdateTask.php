<?php

namespace App\Structure\Ofs25Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs25Section\User\Models\Ofs251;
use App\Structure\Ofs25Section\User\Models\Ofs252;
use App\Structure\Ofs25Section\User\Models\Ofs253;
use App\Structure\Ofs25Section\User\Models\Ofs254;
use App\Structure\Ofs25Section\User\Models\Ofs255;
use App\Structure\Ofs25Section\User\Dto\Ofs25UpdateDto;

class Ofs25UpdateTask extends BaseTask
{
    /**
     * Обновляет значение поля fact в таблице Ofs
     *
     * @param Ofs25UpdateDto $dto
     * @return bool
     */
    public function UpdateFact(Ofs25UpdateDto $dto): bool
    {      
        if($dto->chapter == "1"){
            $ofs = new Ofs251;
        }
        if($dto->chapter == "2"){
            $ofs = new Ofs252;
        }
        if($dto->chapter == "3"){
            $ofs = new Ofs253;
        }
        if($dto->chapter == "4"){
            $ofs = new Ofs254;
        }
        if($dto->chapter == "5"){
            $ofs = new Ofs255;
        }
        
        $result = $ofs::where('user_id', $dto->user_id)
            ->where('ekr_id', $dto->ekr_id)
            ->where('mounth', $dto->mounth)    
            ->where('fact_mounth', '!=', $dto->fact_mounth)    
            ->update([
                'fact_all' => $ofs::raw("fact_all + $dto->fact_mounth"),
            ]);    
        
        return $result == true ? true : false;
    }
    
     /**
     * Обновляет значение поля kassa в таблице Ofs
     *
     * @param Ofs25UpdateDto $dto
     * @return bool
     */
    public function UpdateKassa(Ofs25UpdateDto $dto): bool
    {     
        if($dto->chapter == "1"){
            $ofs = new Ofs251;
        }
        if($dto->chapter == "2"){
            $ofs = new Ofs252;
        }
        if($dto->chapter == "3"){
            $ofs = new Ofs253;
        }
        if($dto->chapter == "4"){
            $ofs = new Ofs254;
        }
        if($dto->chapter == "5"){
            $ofs = new Ofs255;
        }
        
        $result = $ofs::where('user_id', $dto->user_id)
            ->where('ekr_id', $dto->ekr_id)
            ->where('mounth', $dto->mounth)
            ->where('kassa_mounth', '!=', $dto->kassa_mounth)
            ->update([
                'kassa_all' => $ofs::raw("kassa_all + $dto->kassa_mounth"),
            ]);    
        
        return $result == true ? true : false;
    }
    
    /**
     * Обновляет значения в таблице Ofs
     *
     * @param Ofs25UpdateDto $dto
     * @return array
     */
    public function UpdateInfo(Ofs25UpdateDto $dto): bool
    {       
        if($dto->chapter == "1"){
            $ofs = new Ofs251;
        }
        if($dto->chapter == "2"){
            $ofs = new Ofs252;
        }
        if($dto->chapter == "3"){
            $ofs = new Ofs253;
        }
        if($dto->chapter == "4"){
            $ofs = new Ofs254;
        }
        if($dto->chapter == "5"){
            $ofs = new Ofs255;
        }
        
        $result = $ofs::where('user_id', $dto->user_id)
            ->where('ekr_id', $dto->ekr_id)
            ->where('mounth', $dto->mounth)   
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

