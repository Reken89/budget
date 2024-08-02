<?php

namespace App\Structure\CSection\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\CSection\Admin\Models\TableOne;
use App\Structure\CSection\Admin\Dto\AdminUpdateDto;
use Illuminate\Database\Eloquent\Builder;

class AdminUpdateTask extends BaseTask
{
    /**
     * Обновляем таблицу №1
     *
     * @param AdminUpdateDto $dto
     * @return 
     */
    public function UpdateTable1(AdminUpdateDto $dto)
    {       
        $result = TableOne::where('year', $dto->year) 
            ->where('user_id', $dto->user) 
            ->where('indicator_id', $dto->indicator) 
            ->where('mounth', $dto->mounth) 
            ->update([                
                'average' => $dto->meaning1,
                'report'  => $dto->meaning2,
                'classes' => $dto->meaning3,
            ]);
        
        return $result == true ? true : false;
    }
    
    /**
     * Обновляем таблицу №1 (main)
     *
     * @param AdminUpdateDto $dto, array $main
     * @return array
     */
    public function UpdateMainTable1(AdminUpdateDto $dto, array $main): bool
    {        
        $result = TableOne::where('user_id', $dto->user)
            ->where('year', $dto->year) 
            ->where('mounth', $dto->mounth)     
            ->whereHas('indicator', function (Builder $query) use ($dto) {
                $query->where('shared', 'No');
                $query->where('main', 'Yes');
                $query->where('number', $dto->number);
            })    
            ->update([                
                'average' => $main['average'],
                'report'  => $main['report'],
                'classes' => $main['classes'],
            ]);
        
        return $result == true ? true : false;

    }
    
    /**
     * Обновляем таблицу №1 (main)
     *
     * @param AdminUpdateDto $dto, array $shared
     * @return array
     */
    public function UpdateSharedTable1(AdminUpdateDto $dto, array $shared): bool
    {        
        $result = TableOne::where('user_id', $dto->user)
            ->where('year', $dto->year) 
            ->where('mounth', $dto->mounth) 
            ->where('indicator_id', 1) 
            ->update([                
                'average' => $shared['average'],
                'report'  => $shared['report'],
                'classes' => $shared['classes'],
            ]);
        
        return $result == true ? true : false;

    }
}

