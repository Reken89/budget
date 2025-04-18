<?php

namespace App\Structure\Count25Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Count25Section\Admin\Tasks\SelectCountTask;
use App\Structure\Count25Section\Admin\Dto\IndexDto;

class ExaminCountAction extends BaseAction
{
    private array $admin = [53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 73, 74];
    private array $omsu = [27, 28, 35, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 73, 74];
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
    
    /**
     * Получаем даты
     * Последнего редактирования
     * По всем разделам
     *
     * @param 
     * @return array
     */
    public function DefineDate()
    {   
        $result = [];
        $users = ['0' => $this->admin, '1' => $this->omsu, '2' => $this->zakupki, '3' => $this->kinder, '4' => $this->music, '5' => $this->voknavolok, '6' => $this->kums];
        for($i = 0; $i < 7; $i++){
            $result[$i] = $this->task(SelectCountTask::class)->MaxDate($users[$i]);
        }
        return $result;
    }
    
    /**
     * Получаем даты
     * Последнего редактирования
     * Для одного раздела
     *
     * @param int $variant
     * @return array
     */
    public function ChapterDate(int $variant)
    {   
        $users = ['1' => $this->admin, '2' => $this->omsu, '3' => $this->zakupki, '4' => $this->kinder, '5' => $this->music, '6' => $this->voknavolok, '7' => $this->kums]; 
        $result = [];
        foreach ($users[$variant] as $value) {
            $result[$value] = $this->task(SelectCountTask::class)->OneDate($value);   
        }    
        return $result;
    }
    
    /**
     * Получаем информацию из таблицы count25
     * По заданным параметрам
     *
     * @param IndexDto $dto
     * @return array
     */
    public function SelectInfo(IndexDto $dto)
    {   
        $users = ['1' => $this->admin, '2' => $this->omsu, '3' => $this->zakupki, '4' => $this->kinder, '5' => $this->music, '6' => $this->voknavolok, '7' => $this->kums];
        if($dto->variant == 8){
            $result = $this->task(SelectCountTask::class)->SelectVault($dto->year);
        }else{
            $result = $this->task(SelectCountTask::class)->SelectAll($users[$dto->variant], $dto->year);
        }
        return $result;
    }
}
