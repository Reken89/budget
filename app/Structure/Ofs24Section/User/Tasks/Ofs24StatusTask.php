<?php

namespace App\Structure\Ofs24Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs24Section\Admin\Models\Ofs24;
use Illuminate\Database\Eloquent\Builder;

class Ofs24StatusTask extends BaseTask
{
    /**
     * Получаем строки из таблицы ofs24
     * Строки только со значениями main по таблице ekr
     *
     * @param string $user, string $mounth, string $chapter
     * @return array
     */
    public function select(string $user, string $mounth, string $chapter): array
    {        
        $total = Ofs24::selectRaw('((`credit_year_all` + `fact_all` - `debit_year_all` - `kassa_all`) - '
                    . '(`credit_end_all` - `debit_end_all`) + `return_old_year`) AS total1')
            ->selectRaw('(`lbo` - `fact_all` + `prepaid` - `credit_year_all`) AS total2')
            ->where('user_id', $user)
            ->where('mounth', $mounth)
            ->where('chapter', $chapter)
            ->whereHas('ekr', function (Builder $query) {
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
            })        
            ->get()
            ->toArray();
        return $total;  

    }
    
    /**
     * Обновляет статус в таблице Ofs по заданным параметрам
     *
     * @param string $user, string $mounth, string $chapter
     * @return bool
     */
    public function update(string $user, string $mounth, string $chapter): bool
    {                
        $result = Ofs24::where('user_id', $user) 
            ->where('mounth', $mounth)
            ->where('chapter', $chapter)
            ->update([
                'status' => 1,
            ]);    
        
        return $result == true ? true : false;
    }
}

