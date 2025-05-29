<?php

namespace App\Structure\UtilitiesSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\UtilitiesSection\Admin\Dto\UpdateTarrifsDto;
use App\Structure\UtilitiesSection\Admin\Dto\SynchTarrifsDto;
use App\Structure\UtilitiesSection\Admin\Dto\UpdateStatusDto;
use App\Structure\UtilitiesSection\Admin\Tasks\SelectTarrifsTask;
use App\Structure\UtilitiesSection\Admin\Tasks\UpdateTarrifsTask;
use App\Structure\UtilitiesSection\Admin\Tasks\UpdateCommunalsTask;
use App\Structure\UtilitiesSection\Admin\Tasks\SelectCommunalsTask;
use App\Structure\UtilitiesSection\Admin\Tasks\EmailTask;

class UpdateAction extends BaseAction
{
    private array $tarrifs = ['heat', 'water', 'drainage', 'energy', 'trash', 'negative'];
    private string $topic = "Портал коммунальные услуги";
    
    /**
     * Обновление тарифов
     *
     * @param UpdateTarrifsDto $dto
     * @return bool
     */
    public function UpdateTarrifs(UpdateTarrifsDto $dto): bool
    {           
        return $this->task(UpdateTarrifsTask::class)->UpdateTarrifs($dto);
    }
    
    /**
     * Синхронизация тарифов
     *
     * @param SynchTarrifsDto $dto
     * @return 
     */
    public function SynchTarrifs(SynchTarrifsDto $dto)
    {    
        foreach ($this->tarrifs as $value) {
            $tarrif = $this->task(SelectTarrifsTask::class)->SelectOneTarrif($dto->year, $dto->mounth, $value);
            $this->task(UpdateTarrifsTask::class)->UpdateOneTarrif($dto->year, $dto->mounth, $value, $tarrif);
        }

    }
    
    /**
     * Обновление статуса
     * записи в таблице communals
     *
     * @param UpdateStatusDto $dto
     * @return bool
     */
    public function UpdateStatus(UpdateStatusDto $dto): bool
    {           
        return $this->task(UpdateCommunalsTask::class)->UpdateStatus($dto);
    }
    
    /**
     * Отправляем уведомление по email
     *
     * @param UpdateStatusDto $dto
     * @return
     */
    public function SendMail(UpdateStatusDto $dto)
    {
        $info = $this->task(SelectCommunalsTask::class)->SelectLine($dto->id);
        $this->task(EmailTask::class)->SendMail($info['user']['email'], $this->topic, $info);  
    }
              
}

