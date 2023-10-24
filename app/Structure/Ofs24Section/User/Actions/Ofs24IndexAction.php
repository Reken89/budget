<?php

namespace App\Structure\Ofs24Section\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs24Section\User\Tasks\Ofs24SelectAllTask;
use App\Structure\Ofs24Section\User\Tasks\Ofs24SelectTotalTask;

class Ofs24IndexAction extends BaseAction
{
    /**
     * Возвращает ОФС по заданным параметрам
     * Возвращает ИТОГИ ОФС
     *
     * @param int $user, int $year, int $mounth, int $chapter
     * @return array
     */
    public function run(int $user, int $year, int $mounth, array $chapter): array
    {   
        if(count($chapter) == '1'){
            $result = $this->task(Ofs24SelectAllTask::class)->run($user, $year, $mounth, $chapter);
            $variant = "one";
        } else {
            $result = $this->task(Ofs24SelectAllTask::class)->many($user, $year, $mounth, $chapter);
            $variant = "many";
        }
        $total = $this->task(Ofs24SelectTotalTask::class)->run($user, $year, $mounth, $chapter);
  
        $info = [
            'info'    => 'yes',
            'result'  => $result,
            'total'   => $total,
            'variant' => $variant,
            'chapter' => $chapter,
            'mounth'  => $mounth,
        ];
        
        return $info;

    }
}

