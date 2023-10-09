<?php

namespace App\Structure\ReportingSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ReportingSection\Admin\Models\Mundebt;
  
class DebtIndexAction extends BaseAction
{    
     /**
     * Получаем нужную информацию из таблицы mundebts
     *
     * @param int $year
     * @return array
     */
    public function run(int $year): array
    {
        $info = Mundebt::select()
            ->where('year', $year)
            ->get()
            ->toArray();
        
        return $info;
    }

}

