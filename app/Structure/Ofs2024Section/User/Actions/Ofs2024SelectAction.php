<?php

namespace App\Structure\Ofs2024Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs2024Section\User\Dto\Ofs2024SelectDto;
use App\Structure\Ofs2024Section\User\Tasks\Ofs2024SelectOfsTask;
use App\Structure\Ofs2024Section\User\Tasks\Ofs2024AssemblyTask;

class Ofs2024SelectAction extends BaseAction
{
    /**
     * Возвращает ОФС по заданным параметрам
     *
     * @param Ofs2024SelectDto $dto
     * @return 
     */
    public function SelectInfo(Ofs2024SelectDto $dto): array
    {   
        if(count($dto->chapter) < 2){
            $result = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[0], $dto->mounth, $dto->user);
        }else{
            if(count($dto->chapter) == 2){
                $table1 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[0], $dto->mounth, $dto->user);
                $table2 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[1], $dto->mounth, $dto->user);
                $result = $this->task(Ofs2024AssemblyTask::class)->SummationTwo($table1, $table2);
            }
            if(count($dto->chapter) == 3){
                $table1 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[0], $dto->mounth, $dto->user);
                $table2 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[1], $dto->mounth, $dto->user);
                $table3 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[2], $dto->mounth, $dto->user);
                $result = $this->task(Ofs2024AssemblyTask::class)->SummationThree($table1, $table2, $table3);
            }
            if(count($dto->chapter) == 4){
                $table1 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[0], $dto->mounth, $dto->user);
                $table2 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[1], $dto->mounth, $dto->user);
                $table3 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[2], $dto->mounth, $dto->user);
                $table4 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[3], $dto->mounth, $dto->user);
                $result = $this->task(Ofs2024AssemblyTask::class)->SummationFour($table1, $table2, $table3, $table4);
            }
            if(count($dto->chapter) == 5){
                $table1 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[0], $dto->mounth, $dto->user);
                $table2 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[1], $dto->mounth, $dto->user);
                $table3 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[2], $dto->mounth, $dto->user);
                $table4 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[3], $dto->mounth, $dto->user);
                $table5 = $this->task(Ofs2024SelectOfsTask::class)->SelectOfs($dto->chapter[4], $dto->mounth, $dto->user);
                $result = $this->task(Ofs2024AssemblyTask::class)->SummationFive($table1, $table2, $table3, $table4, $table5);
            }
        }
        
        return $result;

    }
}

