<?php

namespace App\Structure\ReportingSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ReportingSection\Admin\Models\Reporting;
  
class ReportingIndexAction extends BaseAction
{    
     /**
     * Получаем нужную информацию из таблицы reporting
     *
     * @param 
     * @return array
     */
    public function run(): array
    {
        $info = Reporting::select()
            ->where('meaning', 'expenses')
            ->get()
            ->toArray();
        
        return $info;
    }

}