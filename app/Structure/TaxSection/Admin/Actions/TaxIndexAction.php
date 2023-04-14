<?php

namespace App\Structure\TaxSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\TaxSection\Admin\Models\Tax;
use App\Structure\TaxSection\Admin\Dto\TaxIndexDto;

class TaxIndexAction extends BaseAction
{
    /**
     * Получаем информацию из таблицы taxes
     *
     * @param TaxIndexDto $dto
     * @return 
     */
    public function run(TaxIndexDto $dto)
    {   
        $info = Tax::select('inn', 'title', 'kbk', 'inn_adb')  
            ->selectRaw('SUM(`sum`) as sum')  
            ->where('mounth', $dto->mounth)   
            ->groupBy(['inn', 'title', 'kbk', 'inn_adb'])
            ->get() 
            ->toArray();
        
        $result = [
            'info'   => $info,
            'mounth' => $dto->mounth,
        ];
        
        return $result;

    }
}




