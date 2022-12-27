<?php

namespace App\Structure\OfsSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\User\Tasks\OfsExaminationTask;
use App\Structure\OfsSection\User\Tasks\OfsUpdateStatusTask;

class OfsStatusAction extends BaseAction
{
    /**
     * Меняем статус строк в таблице ofs
     *
     * @param string $user, string $year, string $mounth, string $chapter
     * @return array
     */
    public function run(string $user, string $year, string $mounth, string $chapter): bool
    {   
        $examination = $this->task(OfsExaminationTask::class)->run($user, $year, $mounth, $chapter);
        
        if($examination['total1'] == '0' && $examination['total2'] >= '0'){
            $this->task(OfsUpdateStatusTask::class)->run($user, $year, $mounth, $chapter);
            return true;
        } else {
            return false;
        }

    }
}

