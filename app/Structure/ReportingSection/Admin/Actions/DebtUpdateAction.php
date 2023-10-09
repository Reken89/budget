<?php

namespace App\Structure\ReportingSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ReportingSection\Admin\Models\Mundebt;
use App\Structure\ReportingSection\Admin\Dto\DebtUpdateDto;
  
class DebtUpdateAction extends BaseAction
{    
     /**
     * Обновляем информацию в таблице debts по id
     *
     * @param DebtUpdateDto $dto
     * @return bool
     */
    public function run(DebtUpdateDto $dto): bool
    {
        $result = Mundebt::find($dto->id)
            ->update([                
                 'mundeb'     => $dto->mundeb,
                 'servmundeb' => $dto->servmundeb,
                 'maxmunded'  => $dto->maxmunded,
                 'bank'       => $dto->bank,
                 'credit'     => $dto->credit                
            ]);
        
        return $result == true ? true : false; 
    }

}

