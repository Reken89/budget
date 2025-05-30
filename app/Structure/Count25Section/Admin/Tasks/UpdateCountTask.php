<?php

namespace App\Structure\Count25Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Count25Section\Admin\Models\Count25;
use App\Structure\Count25Section\Admin\Dto\UpdateDto;
use Illuminate\Database\Eloquent\Builder;

class UpdateCountTask extends BaseTask
{
    /**
     * Обновляем одну строку в таблице counts25
     * по id
     *
     * @param UpdateDto $dto
     * @return bool
     */
    public function UpdateLine(UpdateDto $dto): bool
    {    
        $result = Count25::find($dto->id)
            ->update([                
                'sum_fu'  => $dto->sum,
                'date_fu' => date('Y-m-d'),
            ]);        
        return $result == true ? true : false;
    }  
    
    /**
     * Обновляет Main раздел в таблице counts25
     *
     * @param array $main, array $number
     * @return bool
     */
    public function UpdateMain(array $main, array $number): bool
    {        
        $result = Count25::where('user_id', $number['user_id'])
            ->where('year', $number['year']) 
            ->whereHas('ekr', function (Builder $query) use ($number) {
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
                $query->where('number', $number['ekr']['number']);
            })    
            ->update([                
                'sum_fu'  => $main['sum_fu'],
                'date_fu' => date('Y-m-d'),
            ]);       
        return $result == true ? true : false;
    }
    
    /**
     * Обновляет значения в таблице counts24
     *
     * @param array $shared, array $number, array $ekr
     * @return bool
     */
    public function UpdateShared(array $shared, array $number, array $ekr): bool
    {           
        $result = Count25::where('user_id', $number['user_id'])
            ->where('year', $number['year']) 
            ->whereHas('ekr', function (Builder $query) use ($ekr) {
                $query->where('shared', 'Yes');
                $query->where('main', 'Yes');
                $query->where('number', $ekr['key']);
            })    
            ->update([                
                'sum_fu' => $shared['sum_fu'],
                'date_fu' => date('Y-m-d'),
            ]);        
        return $result == true ? true : false;
    }
    
    /**
     * Обновляет значения в таблице counts25
     * Относительно коммунальных услуг
     *
     * @param int $ekr, int $user, float $sum
     * @return 
     */
    public function UpdateCommunal(int $ekr, int $user, float $sum): bool
    {        
        $result = Count25::where('user_id', $user)
            ->where('ekr_id', $ekr);
        $result->update([                
            'sum_fu'  => $sum,
            'date_fu' => date('Y-m-d'),
        ]);        
        return $result == true ? true : false;        
    }
    
    /**
     * Обновляет значения в таблице counts25
     * Записывает значения 2026 года в 2027-2028
     *
     * @param array $info
     * @return bool
     */
    public function UpdateYears(array $info): bool
    {        
        $result = Count25::where('user_id', $info['user_id'])
        ->whereIn('year', [2027,2028])
        ->where('ekr_id', $info['ekr_id']);          
        $result->update([
            'sum_fu' => $info['sum_fu'],
            'date_fu' => date('Y-m-d'),
        ]);       
        return $result == true ? true : false;        
    }
}
