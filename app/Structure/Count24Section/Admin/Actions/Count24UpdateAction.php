<?php

namespace App\Structure\Count24Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count24Section\Admin\Dto\Count24UpdateDto;
use App\Structure\Count24Section\Admin\Tasks\Count24UpdateTask;
use App\Structure\Count24Section\Admin\Tasks\Count24SelectTask;

class Count24UpdateAction extends BaseAction
{
    /**
     * Обновляем значение в таблице counts24 по id
     *
     * @param Count24UpdateDto $dto
     * @return
     */
    public function UpdateInfo(Count24UpdateDto $dto)
    {   
        $this->task(Count24UpdateTask::class)->UpdateLine($dto);
        $number = $this->task(Count24SelectTask::class)->SelectNumber($dto);
        $main = $this->task(Count24SelectTask::class)->SelectSumMain($number);
        $update_main = $this->task(Count24UpdateTask::class)->UpdateMain($main ,$number);
        
        if($number['ekr']['number'] >= 17 && $number['ekr']['number'] <=42){
            $shared = $this->task(Count24SelectTask::class)->SelectSumShared($number);
            $update_shared = $this->task(Count24UpdateTask::class)->UpdateShared($shared ,$number);
        }  
        
        if($number['ekr']['number'] == 45){
            $shared = $this->task(Count24SelectTask::class)->SelectSumShared($number);
            $update_shared = $this->task(Count24UpdateTask::class)->UpdateShared($shared ,$number);
        }
    }
}
