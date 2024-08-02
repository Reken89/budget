<?php

namespace App\Structure\CSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CSection\Admin\Models\TableOne;
use App\Structure\CSection\Admin\Dto\AdminSelectDto;
use App\Structure\CSection\Admin\Dto\AdminUpdateDto;
use Illuminate\Database\Eloquent\Builder;

class AdminSelectTask extends BaseTask
{
    /**
     * Возвращает таблицу по заданным параметрам
     *
     * @param AdminSelectDto $dto
     * @return array
     */
    public function SelectAll(AdminSelectDto $dto): array
    {       
        $info = TableOne::select('indicator_id')
            ->selectRaw('SUM(`average`) as average')
            ->selectRaw('SUM(`report`) as report')
            ->selectRaw('SUM(`classes`) as classes')
            ->whereIn('user_id', $dto->user)    
            ->where('year', $dto->year)  
            ->where('mounth', $dto->mounth) 
            ->join('indicators', 'tc1.indicator_id', '=', 'indicators.id')    
            //->select('tc1.id', 'user_id', 'indicator_id', 'year', 'mounth', 'status', 'average', 'report', 'classes')  
            ->with(['indicator'])  
            ->orderBy('indicators.number', 'asc')
            ->orderBy('indicators.code', 'asc')
            //->orderBy('indicators.shared', 'desc')
            //->orderBy('indicators.title', 'asc')
            //->orderBy('user_id', 'asc')
            ->groupBy('indicator_id')
            ->get()
            ->toArray();
        
        return $info;  
    }
    
    /**
     * Возвращает сумму поля Main
     *
     * @param AdminUpdateDto $dto
     * @return array
     */
    public function SelectMain(AdminUpdateDto $dto): array
    {      
        $result = TableOne::selectRaw('SUM(`average`) as average')
            ->selectRaw('SUM(`report`) as report')
            ->selectRaw('SUM(`classes`) as classes')
            ->where('user_id', $dto->user)    
            ->where('year', $dto->year) 
            ->where('mounth', $dto->mounth) 
            ->whereHas('indicator', function (Builder $query) use ($dto) {
                $query->where('shared', 'No');
                $query->where('main', 'No');
                $query->where('number', $dto->number);
            })    
            ->first()
            ->toArray();
        
        return $result; 
    }  
    
    /**
     * Возвращает сумму поля Shared table1
     *
     * @param AdminUpdateDto $dto
     * @return array
     */
    public function SelectSharedTable1(AdminUpdateDto $dto): array
    {      
        $num = [2, 3];
        
        $result = TableOne::selectRaw('SUM(`average`) as average')
            ->selectRaw('SUM(`report`) as report')
            ->selectRaw('SUM(`classes`) as classes')
            ->where('user_id', $dto->user)    
            ->where('year', $dto->year) 
            ->where('mounth', $dto->mounth) 
            ->whereHas('indicator', function (Builder $query) use ($num) {
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
                $query->whereIn('number', $num);
            })    
            ->first()
            ->toArray();
        
        return $result; 
    }  
}




