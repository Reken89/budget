<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Dto\OfsIndexDto;
use App\Structure\OfsSection\User\Models\Ofs;
use App\Structure\OfsSection\User\Models\Ekr;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OfsSelectAllTask extends BaseTask
{
    /**
     * Возвращает ОФС по заданным параметрам
     *
     * @param OfsIndexDto $dto
     * @return array
     */
    public function run(OfsIndexDto $dto): array
    {
        $info = Ofs::select()
            ->where('user_id', $dto->user)
            ->where('year', $dto->year) 
            ->where('mounth', $dto->mounth) 
            ->where('chapter', $dto->chapter)
            ->with([
                'ekr', 
                'user:id,name',
                ])
            ->get()
            ->toArray();
        return $info; 
                
    }
}

