<?php

namespace App\Structure\OfsSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\OfsSection\User\Tasks\OfsSelectAllTask;
use App\Structure\OfsSection\User\Tasks\OfsSynchTask;

class OfsSynchAction extends BaseAction
{
    /**
     * Выполняет синхронизацию значений
     *
     * @param int $user, int $year, int $mounth, int $chapter
     * @return 
     */
    public function run(int $user, int $year, int $mounth, array $chapter)
    {   
        $old_mounth = $mounth - 1;
        $info = $this->task(OfsSelectAllTask::class)->run($user, $year, $old_mounth, $chapter);
        $this->task(OfsSynchTask::class)->run($user, $year, $mounth, $chapter, $info);
        
    }
}

