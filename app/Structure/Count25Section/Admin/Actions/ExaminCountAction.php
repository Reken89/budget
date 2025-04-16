<?php

namespace App\Structure\Count25Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count25Section\Admin\Tasks\SelectCountTask;

class ExaminCountAction extends BaseAction
{
    private array $admin = [53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 73, 74];
    private array $omsu = [27, 28, 35];
    private array $zakupki = [29, 26];
    private array $kinder = [9, 10, 13, 15];
    private array $music = [18, 19];
    private array $voknavolok = [8, 36];
    private array $kums = [23, 37, 38];
    
    /**
     * Проверка таблицы counts25
     * На определения статуса 2 
     * Статус 2 = (ЦБ не отправили информацию в ФЭУ)
     *
     * @param 
     * @return array
     */
    public function ExaminCount()
    {   
        $result = [];
        $users = ['0' => $this->admin, '1' => $this->omsu, '2' => $this->zakupki, '3' => $this->kinder, '4' => $this->music, '5' => $this->voknavolok, '6' => $this->kums];
        for($i = 0; $i < 7; $i++){
            $result['2026'][$i] = $this->task(SelectCountTask::class)->ExaminStatus(2026, $users[$i]);
            $result['2027'][$i] = $this->task(SelectCountTask::class)->ExaminStatus(2027, $users[$i]);
            $result['2028'][$i] = $this->task(SelectCountTask::class)->ExaminStatus(2028, $users[$i]);
        }
        return $result;
    }
}
