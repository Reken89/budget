<?php

namespace App\Structure\Count25Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count25Section\User\Dto\UpdateDto;
use App\Structure\Count25Section\User\Tasks\UpdateCountTask;
use App\Structure\Count25Section\User\Tasks\SelectCountTask;

class UpdateCountAction extends BaseAction
{
    
    /**
     * Обновляем одну строку в таблице counts25
     * По id
     *
     * @param UpdateDto $dto
     * @return bool
     */
    public function UpdateLine(UpdateDto $dto): bool
    {   
        return $this->task(UpdateCountTask::class)->UpdateLine($dto);
    }
    
    /**
     * Обновляем блок main в таблице counts25
     *
     * @param UpdateDto $dto
     * @return array
     */
    public function UpdateMain(UpdateDto $dto): array
    {   
        $number = $this->task(SelectCountTask::class)->SelectNumber($dto->id);
        $main = $this->task(SelectCountTask::class)->SelectMain($number);
        $this->task(UpdateCountTask::class)->UpdateMain($main, $number);
        return $number;
    }
    
    /**
     * Обновляем блок shared в таблице counts25
     *
     * @param array $number, array $ekr
     * @return bool
     */
    public function UpdateShared(array $number, array $ekr): bool
    {   
        if($number['ekr']['number'] >= 17 && $number['ekr']['number'] <=42 || $number['ekr']['number'] == 45){
            $shared = $this->task(SelectCountTask::class)->SelectShared($number, $ekr);
            return $this->task(UpdateCountTask::class)->UpdateShared($shared, $number, $ekr);
        }else{
            return false;
        }
    }
    
}
