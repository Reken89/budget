<?php

namespace App\Structure\Count25Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count25Section\User\Dto\IndexDto;
use App\Structure\Count25Section\User\Tasks\UpdateCountTask;

class StatusCountAction extends BaseAction
{
    private array $admin = [53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 73, 74];
    private array $omsu = [27, 28, 35];
    private array $zakupki = [29, 26];
    private array $kinder = [9, 10, 13, 15];
    private array $music = [18, 19];
    private array $voknavolok = [8, 36];
    private array $kums = [23, 37, 38];
    
    /**
     * Обновляем статус в таблице counts25
     *
     * @param IndexDto $dto
     * @return array
     */
    public function UpdateStatus(IndexDto $dto)
    {   
        if($dto->variant !== 8){
            $users = ['1' => $this->admin, '2' => $this->omsu, '3' => $this->zakupki, '4' => $this->kinder, '5' => $this->music, '6' => $this->voknavolok, '7' => $this->kums];
            $result = $this->task(UpdateCountTask::class)->UpdateStatus($users[$dto->variant], $dto->year);
            return $result;
        }else{
            return false;
        }

    }

}



