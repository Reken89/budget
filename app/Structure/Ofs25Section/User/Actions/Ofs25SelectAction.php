<?php

namespace App\Structure\Ofs25Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs25Section\User\Dto\Ofs25SelectDto;
use App\Structure\Ofs25Section\User\Tasks\Ofs25SelectOfsTask;
use App\Structure\Ofs25Section\User\Tasks\Ofs25AssemblyTask;

class Ofs25SelectAction extends BaseAction
{
    /**
     * Возвращает ОФС по заданным параметрам
     *
     * @param Ofs25SelectDto $dto
     * @return 
     */
    public function SelectInfo(Ofs25SelectDto $dto): array
    {   
        if(count($dto->chapter) < 2){
            $result = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[0], $dto->mounth, $dto->user);
        }else{
            if(count($dto->chapter) == 2){
                $table1 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[0], $dto->mounth, $dto->user);
                $table2 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[1], $dto->mounth, $dto->user);
                $result = $this->task(Ofs25AssemblyTask::class)->SummationTwo($table1, $table2);
            }
            if(count($dto->chapter) == 3){
                $table1 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[0], $dto->mounth, $dto->user);
                $table2 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[1], $dto->mounth, $dto->user);
                $table3 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[2], $dto->mounth, $dto->user);
                $result = $this->task(Ofs25AssemblyTask::class)->SummationThree($table1, $table2, $table3);
            }
            if(count($dto->chapter) == 4){
                $table1 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[0], $dto->mounth, $dto->user);
                $table2 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[1], $dto->mounth, $dto->user);
                $table3 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[2], $dto->mounth, $dto->user);
                $table4 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[3], $dto->mounth, $dto->user);
                $result = $this->task(Ofs25AssemblyTask::class)->SummationFour($table1, $table2, $table3, $table4);
            }
            if(count($dto->chapter) == 5){
                $table1 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[0], $dto->mounth, $dto->user);
                $table2 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[1], $dto->mounth, $dto->user);
                $table3 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[2], $dto->mounth, $dto->user);
                $table4 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[3], $dto->mounth, $dto->user);
                $table5 = $this->task(Ofs25SelectOfsTask::class)->SelectOfs($dto->chapter[4], $dto->mounth, $dto->user);
                $result = $this->task(Ofs25AssemblyTask::class)->SummationFive($table1, $table2, $table3, $table4, $table5);
            }
        }
        
        return $result;

    }
}
