<?php

namespace App\Structure\Ofs25Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs25Section\User\Tasks\Ofs25SelectOfsTask;
use App\Structure\Ofs25Section\User\Tasks\Ofs25SynchTask;

class Ofs25SynchAction extends BaseAction
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
            $info = $this->task(Ofs25SelectOfsTask::class)->SelectOfs24($user, $chapter);
            $this->task(Ofs25SynchTask::class)->StartSynchJanuary($mounth, $chapter, $user, $info);
        } else {
            $info = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($chapter, $mounth - 1, $user);
            $this->task(Ofs25SynchTask::class)->StartSynch($mounth, $chapter, $user, $info);
        }
        
    }
}

