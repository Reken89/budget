<?php

namespace App\Structure\Count24Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use Illuminate\Database\Eloquent\Builder;
use App\Structure\Count24Section\Admin\Models\Count24;
use App\Structure\Count24Section\Admin\Dto\Count24UpdateDto;

class Count24UpdateTask extends BaseTask
{
    /**
     * Обновляет значения в таблице counts24 по id
     *
     * @param Count24UpdateDto $dto
     * @return array
     */
    public function UpdateLine(Count24UpdateDto $dto): bool
    {        
        $result = Count24::find($dto->id)
            ->update([                
                'sum_fu' => $dto->sum,
            ]);
        
        return $result == true ? true : false;

    }
    
    /**
     * Обновляет значения в таблице counts24
     *
     * @param array $main
     * @return array
     */
    public function UpdateMain(array $main, array $number): bool
    {        
        $result = Count24::where('user_id', $number['user_id'])
            ->where('year', $number['year']) 
            ->whereHas('ekr', function (Builder $query) use ($number) {
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
                $query->where('number', $number['ekr']['number']);
            })    
            ->update([                
                'sum_fu' => $main['sum_fu'],
            ]);
        
        return $result == true ? true : false;

    }
    
    /**
     * Обновляет значения в таблице counts24
     *
     * @param array $main
     * @return array
     */
    public function UpdateShared(array $shared, array $number): bool
    {   
        if($number['ekr']['number'] >= 17 && $number['ekr']['number'] <= 19){
            $num = 16;
        } elseif($number['ekr']['number'] >= 21 && $number['ekr']['number'] <= 25){
            $num = 20;
        } elseif($number['ekr']['number'] >= 27 && $number['ekr']['number'] <= 34){
            $num = 26;
        } elseif($number['ekr']['number'] >= 36 && $number['ekr']['number'] <= 42){
            $num = 35;
        } elseif($number['ekr']['number'] == 45){
            $num = 35;
        }
        
        $result = Count24::where('user_id', $number['user_id'])
            ->where('year', $number['year']) 
            ->whereHas('ekr', function (Builder $query) use ($num) {
                $query->where('shared', 'Yes');
                $query->where('main', 'Yes');
                $query->where('number', $num);
            })    
            ->update([                
                'sum_fu' => $shared['sum_fu'],
            ]);
        
        return $result == true ? true : false;

    }
    
    /**
     * Обновляет значения в таблице counts24
     * Относительно коммунальных услуг
     *
     * @param int $key, int $user, float $sum
     * @return 
     */
    public function UpdateCommunal(int $key, int $user, float $sum): bool
    {        
        $result = Count24::where('user_id', $user)
            ->where('ekr_id', $key);
        $result->update([                
            'sum_fu' => $sum,
        ]);
        
        return $result == true ? true : false;        
    }
    
    /**
     * Обновляет значения в таблице counts24
     * Относительно коммунальных услуг
     *
     * @param array $info
     * @return bool
     */
    public function UpdateYears(array $info): bool
    {        
        foreach ($info as $inf){
            if($inf['sum_fu'] == 0){
                //Заглушка
                $result = true;
            }else{
                $result = Count24::where('user_id', $inf['user_id'])
                ->whereIn('year', [2026,2027])
                ->where('ekr_id', $inf['ekr_id']);          
                $result->update([
                    'sum_fu' => $inf['sum_fu'],
                ]);
            }
              
        } 
        
        return $result == true ? true : false;        
    }
}

