<?php

namespace App\Structure\Forecast25Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Forecast25Section\Admin\Models\Tarrif;

class SelectTarrifAction extends BaseAction
{
    /**
     * Возвращает тарифы
     *
     * @param 
     * @return 
     */
    public function SelectAll(): array
    {        
        $info = Tarrif::select()  
            ->get() 
            ->toArray();
        
        return $info;
    }   
}
