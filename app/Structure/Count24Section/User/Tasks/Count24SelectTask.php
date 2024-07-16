<?php

namespace App\Structure\Count24Section\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Count24Section\Admin\Models\Count24;
use App\Structure\Count24Section\User\Dto\Count24UpdateDto;
use Illuminate\Database\Eloquent\Builder;

class Count24SelectTask extends BaseTask
{
    /**
     * Возвращает смету по заданным параметрам
     *
     * @param array $users, int $year
     * @return array
     */
    public function SelectAll(array $users, int $year): array
    {       
        
        //$info = Count24::select()
        $info = Count24::whereIn('user_id', $users)    
            ->where('year', $year)  
            ->join('ekr', 'counts24.ekr_id', '=', 'ekr.id')    
            ->select('counts24.id', 'user_id', 'ekr_id', 'year', 'status', 'sum_fu', 'sum_cb')  
            ->with(['user:id,name', 'ekr'])  
            ->orderBy('ekr.number', 'asc')
            ->orderBy('ekr.main', 'desc')
            ->orderBy('ekr.shared', 'desc')
            ->orderBy('ekr.title', 'asc')
            ->orderBy('user_id', 'asc')
            ->get()
            ->toArray();
        
        return $info;  

    }
    
    /**
     * Возвращает свод сметы
     * По всем пользователям
     *
     * @param int $year
     * @return array
     */
    public function SelectVault(int $year): array
    {       

        $info = Count24::where('year', $year)  
            ->join('ekr', 'counts24.ekr_id', '=', 'ekr.id')    
            ->select('ekr_id', 'year')  
            ->selectRaw('SUM(`sum_fu`) as sum_fu')
            ->selectRaw('SUM(`sum_cb`) as sum_cb')     
            ->with(['ekr'])  
            ->orderBy('ekr.number', 'asc')
            ->orderBy('ekr.main', 'desc')
            ->orderBy('ekr.shared', 'desc')
            ->orderBy('ekr.title', 'asc')
            ->groupBy('ekr_id')   
            ->groupBy('year')       
            ->get()
            ->toArray();
        
        return $info;  

    }

     /**
     * Возвращает number
     *
     * @param Count24UpdateDto $dto
     * @return array
     */
    public function SelectNumber(Count24UpdateDto $dto): array
    {      
        $result = Count24::select()
            ->where('id', $dto->id)
            ->with(['ekr:id,number'])
            ->first()
            ->toArray();
        return $result;
    }
    
    /**
     * Возвращает сумму поля Main
     *
     * @param array $number
     * @return array
     */
    public function SelectSumMain(array $number): array
    {      
        $result = Count24::selectRaw('SUM(`sum_cb`) as sum_cb')
            ->where('user_id', $number['user_id'])    
            ->where('year', $number['year']) 
            ->whereHas('ekr', function (Builder $query) use ($number) {
                $query->where('shared', 'No');
                $query->where('main', 'No');
                $query->where('number', $number['ekr']['number']);
            })    
            ->first()
            ->toArray();
        
        return $result; 
    }   
    
    /**
     * Возвращает сумму поля Shared
     *
     * @param array $number
     * @return array
     */
    public function SelectSumShared(array $number): array
    {      
        if($number['ekr']['number'] >= 17 && $number['ekr']['number'] <= 19){
            $num = [17, 18, 19];
        } elseif($number['ekr']['number'] >= 21 && $number['ekr']['number'] <= 25){
            $num = [21, 22, 23, 24, 25];
        } elseif($number['ekr']['number'] >= 27 && $number['ekr']['number'] <= 34){
            $num = [27, 28, 29, 30, 31, 32];
        } elseif($number['ekr']['number'] >= 36 && $number['ekr']['number'] <= 42){
            $num = [36, 37, 38, 39, 40, 41, 42, 45];
        } elseif($number['ekr']['number'] == 45){
            $num = [36, 37, 38, 39, 40, 41, 42, 45];
        }
        
        $result = Count24::selectRaw('SUM(`sum_cb`) as sum_cb')
            ->where('user_id', $number['user_id'])    
            ->where('year', $number['year']) 
            ->whereHas('ekr', function (Builder $query) use ($num) {
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
                $query->whereIn('number', $num);
            })    
            ->first()
            ->toArray();
        
        return $result; 
    }
    
    /**
     * Возвращает таблицу за 2025 год
     *
     * @param 
     * @return array
     */
    public function SelectYear(): array
    {              
        $result = Count24::select()   
            ->where('year', 2025)    
            ->get()
            ->toArray();
        
        return $result;   
    }

}

