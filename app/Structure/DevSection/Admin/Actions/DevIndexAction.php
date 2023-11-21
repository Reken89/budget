<?php

namespace App\Structure\DevSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DevSection\Admin\Tasks\DevSelectAllTask;
use App\Structure\DevSection\Admin\Tasks\DevSelectTarrifTask;

class DevIndexAction extends BaseAction
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
        $result = $this->task(DevSelectAllTask::class)->run($year);
        $tarrifs = $this->task(DevSelectTarrifTask::class)->run($year);
        $total = $this->task(DevSelectAllTask::class)->total($year);
        
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
