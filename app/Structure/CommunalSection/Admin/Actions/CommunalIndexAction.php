<?php

namespace App\Structure\CommunalSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\Admin\Dto\CommunalIndexDto;
use App\Structure\CommunalSection\Admin\Tasks\CommunalSelectTask;
use App\Structure\CommunalSection\Admin\Tasks\CommunalSelectAllTask;
use App\Structure\CommunalSection\Admin\Tasks\CommunalSelectTotalTask;
use App\Structure\CommunalSection\Admin\Tasks\TarrifsSelectTask;

class CommunalIndexAction extends BaseAction
{
    /**
     * Возвращает коммунальные услуги за выбранный год и месяц
     * Возвращает ИТОГИ коммунальных услуг
     * Возвращает тарифы
     *
     * @param array $year, array $mounth
     * @return array
     */
    public function run(array $year, array $mounth): array
    {   
        if (count($year) == '1' AND count($mounth) == '1'){
            $result = $this->task(CommunalSelectTask::class)->run($year, $mounth);
            $tarrif = $this->task(TarrifsSelectTask::class)->run($year, $mounth);
            $variant = "one";
        } else {
            $result = $this->task(CommunalSelectAllTask::class)->run($year, $mounth);
            $tarrif = false;
            $variant = "many";
        }
        $total = $this->task(CommunalSelectTotalTask::class)->run($year, $mounth);
        
        $info = [
            "result"  => $result,
            "variant" => $variant,
            "total"   => $total,
            "tarrif"  => $tarrif,
            "year"    => $year,
            "mounth"  => $mounth,
        ];
        
        return $info;

    }
}

