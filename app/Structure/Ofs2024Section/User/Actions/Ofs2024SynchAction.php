<?php

namespace App\Structure\Ofs2024Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs2024Section\User\Tasks\Ofs2024SelectOfsTask;
use App\Structure\Ofs2024Section\User\Tasks\Ofs2024SynchTask;

class Ofs2024SynchAction extends BaseAction
{
    /**
     * Выполняет синхронизацию значений
     *
     * @param int $mounth, int $chapter, int $user
     * @return 
     */
    public function StartSynch(int $mounth, int $chapter, int $user)
    {   
        if($mounth == '1'){
            $info = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs23($user, $chapter);
            $this->task(Ofs2024SynchTask::class)->StartSynchJanuary($mounth, $chapter, $user, $info);
        } else {
            $info = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($chapter, $mounth - 1, $user);
            $this->task(Ofs2024SynchTask::class)->StartSynch($mounth, $chapter, $user, $info);
        }
        
    }
}

