<?php

namespace App\Structure\CommunalSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\User\Tasks\CommunalSelectAllTask;
use App\Structure\CommunalSection\User\Tasks\CommunalSelectTarrifTask;

class CommunalIndexAction extends BaseAction
{
    /**
     * Возвращает коммунальные услуги за выбранный год
     * Возвращает ИТОГИ коммунальных услуг за выбранный год
     * Возвращает тарифы за выбранный год
     *
     * @param int $year, int $mounth
     * @return array
     */
    public function run(int $year, int $mounth): array
    {   
        $result = $this->task(CommunalSelectAllTask::class)->run($year);
        $tarrifs = $this->task(CommunalSelectTarrifTask::class)->run($year);
        $total = $this->task(CommunalSelectAllTask::class)->total($year);
        
        $info = [
            "info"    => 'yes',
            "result"  => $result,
            "tarrifs" => $tarrifs,
            "total"   => $total,
            "mounth"  => $mounth
        ];
        
        return $info;

    }
}
