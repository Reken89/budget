<?php

namespace App\Structure\Ofs24Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs24Section\User\Tasks\Ofs24SelectAllTask;
use App\Structure\Ofs24Section\User\Tasks\Ofs24SynchTask;

class Ofs24SynchAction extends BaseAction
{
    /**
     * Выполняет синхронизацию значений
     *
     * @param int $user, int $mounth, int $chapter
     * @return 
     */
    public function run(int $user, int $year, int $mounth, array $chapter)
    {   
        if($mounth == '1'){
            $info = $this->task(Ofs24SelectAllTask::class)->old($user, $chapter);
            $result = $this->task(Ofs24SynchTask::class)->old($user, $mounth, $chapter, $info);
        } else {
            $old_mounth = $mounth - 1;
            $info = $this->task(Ofs24SelectAllTask::class)->run($user, $year, $old_mounth, $chapter);
            $result = $this->task(Ofs24SynchTask::class)->run($user, $mounth, $chapter, $info);
        }
        
    }
}

