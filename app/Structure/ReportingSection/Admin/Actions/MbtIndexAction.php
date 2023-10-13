<?php

namespace App\Structure\ReportingSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ReportingSection\Admin\Models\Mbt;

class MbtIndexAction extends BaseAction
{
    /**
     * Получаем нужную информацию из таблицы mbt
     *
     * @param 
     * @return array
     */
    public function run(): array
    {
        $info = Mbt::select()
            ->where('title', 'Субвенции, всего')
            ->get()
            ->toArray();
        
        return $info;
    }
    
    /**
     * Получаем значение последнего месяца из таблицы mbt
     * Удаляем все записи по заданному месяцу и году
     *
     * @param 
     * @return array
     */
    public function delete(): bool
    {
        $mounth = Mbt::select('mounth')
            ->where('year', 2023)
            ->orderBy('mounth', 'desc')  
            ->take(1)    
            ->first()
            ->toArray();
        
        $delete = Mbt::where('mounth', $mounth['mounth'])
            ->where('year', 2023)
            ->delete();  
        
        return $delete == true ? true : false;
    }
    
}

