<?php

namespace App\Structure\Ofs25Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs25Section\User\Models\Ofs251;
use App\Structure\Ofs25Section\User\Models\Ofs252;
use App\Structure\Ofs25Section\User\Models\Ofs253;
use App\Structure\Ofs25Section\User\Models\Ofs254;
use App\Structure\Ofs25Section\User\Models\Ofs255;
use Illuminate\Database\Eloquent\Builder;

class Ofs25StatusTask extends BaseTask
{   
    /**
     * Обновляет статус в таблице Ofs по заданным параметрам
     *
     * @param int $mounth, int $chapter, int $user
     * @return 
     */
    public function UpdateStatus(int $mounth, int $chapter, int $user): bool
    {         
        if($chapter == "1"){
            $ofs = new Ofs251;
        }
        if($chapter == "2"){
            $ofs = new Ofs252;
        }
        if($chapter == "3"){
            $ofs = new Ofs253;
        }
        if($chapter == "4"){
            $ofs = new Ofs254;
        }
        if($chapter == "5"){
            $ofs = new Ofs255;
        }
        
        $result = $ofs::where('user_id', $user) 
            ->where('mounth', $mounth)
            ->update([
                'status' => 3,
            ]);    
        
        return $result == true ? true : false;
    }
    
    /**
     * Получаем строки из таблицы ofs
     *
     * @param int $mounth, int $chapter, int $user
     * @return array
     */
    public function SelectInfo(int $mounth, int $chapter, int $user): array
    {        
        if($chapter == "1"){
            $ofs = new Ofs251;
        }
        if($chapter == "2"){
            $ofs = new Ofs252;
        }
        if($chapter == "3"){
            $ofs = new Ofs253;
        }
        if($chapter == "4"){
            $ofs = new Ofs254;
        }
        if($chapter == "5"){
            $ofs = new Ofs255;
        }
        
        $total = $ofs::selectRaw('((`credit_year_all` + `fact_all` - `debit_year_all` - `kassa_all`) - '
                    . '(`credit_end_all` - `debit_end_all`) + `return_old_year`) AS total1')
            ->selectRaw('(`lbo` - `fact_all` + `prepaid` - `credit_year_all`) AS total2')
            ->where('user_id', $user)
            ->where('mounth', $mounth)
            ->whereHas('ekr', function (Builder $query) {
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
            })        
            ->get()
            ->toArray();
        return $total;  

    }
}

