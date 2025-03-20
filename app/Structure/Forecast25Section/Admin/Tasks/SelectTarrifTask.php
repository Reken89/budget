<?php

namespace App\Structure\Forecast25Section\Admin\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Forecast25Section\Admin\Models\Tarrif;

class SelectTarrifTask extends BaseTask
{
    /**
     * Возвращает тарифы
     *
     * @param 
     * @return array
     */
    public function SelectAll(): array
    {    
        return Tarrif::select()  
            ->get() 
            ->toArray();
    }
}
