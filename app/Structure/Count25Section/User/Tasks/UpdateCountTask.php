<?php

namespace App\Structure\Count25Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Count25Section\Admin\Models\Count25;
use App\Structure\Count25Section\User\Dto\UpdateDto;
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
                'sum_cb'  => $dto->sum,
                'date_fu' => date('Y-m-d'),
                'date_cb' => date('Y-m-d'),
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
                'sum_cb'  => $main['sum_cb'],
                'date_fu' => date('Y-m-d'),
                'date_cb' => date('Y-m-d'),
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
                'sum_cb' => $shared['sum_cb'],
                'date_fu' => date('Y-m-d'),
                'date_cb' => date('Y-m-d'),
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
            'sum_cb' => $info['sum_cb'],
            'date_fu' => date('Y-m-d'),
            'date_cb' => date('Y-m-d'),
        ]);       
        return $result == true ? true : false;        
    }
    
    /**
     * Обновляет значение статуса в таблице count25
     *
     * @param array $users, int $year
     * @return bool
     */
    public function UpdateStatus(array $users, int $year): bool
    {     
        $result = Count25::where('year', $year)
            ->whereIn('user_id', $users)  
            ->update([                
                'status' => '1',
            ]);
           
        return $result == true ? true : false;        
    }

}


