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
    
}

