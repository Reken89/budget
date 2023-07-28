<?php

namespace App\Structure\ReportingSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ReportingSection\Admin\Models\Reporting;
use App\Structure\ReportingSection\Admin\Dto\ReportingIndexDto;
  
class ReportingSelectAction extends BaseAction
{    
     /**
     * Получаем нужную информацию из таблицы reporting
     *
     * @param ReportingIndexDto $dto
     * @return array
     */
    public function run(ReportingIndexDto $dto): array
    {
        $info = Reporting::select()
            ->where('meaning', $dto->meaning)
            ->where('mounth', $dto->mounth)
            ->where('year', $dto->year)
            ->get()
            ->toArray();
        
        return $info;
    }

}

