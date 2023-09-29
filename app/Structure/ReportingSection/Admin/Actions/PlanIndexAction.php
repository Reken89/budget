<?php

namespace App\Structure\ReportingSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ReportingSection\Admin\Models\Plan;

class PlanIndexAction extends BaseAction
{
    /**
     * Получаем нужную информацию из таблицы plan
     *
     * @param 
     * @return array
     */
    public function run(): array
    {
        $info = Plan::select()
            ->where('meaning', 'expenses')
            ->get()
            ->toArray();
        
        return $info;
    }
    
}

