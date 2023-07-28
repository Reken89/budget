<?php

namespace App\Structure\ReportingSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ReportingSection\Admin\Models\Reporting;
  
class ReportingDeleteAction extends BaseAction
{    
     /**
     * Удаляем значения из таблицы reporting
     * по заданным параметрам
     *
     * @param int $year, int $mounth, string $meaning
     * @return array
     */
    public function run(int $year, int $mounth, string $meaning): bool
    {
        $delete = Reporting::where('meaning', $meaning)
            ->where('mounth', $mounth)
            ->where('year', $year)
            ->delete();  
        
        return $delete == true ? true : false;
    }

}

