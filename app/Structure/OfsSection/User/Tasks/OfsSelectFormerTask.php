<?php

namespace App\Structure\OfsSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\OfsSection\User\Models\Ofs;
use App\Structure\OfsSection\User\Dto\OfsResetDto;
use Illuminate\Database\Eloquent\Builder;

class OfsSelectFormerTask extends BaseTask
{
    /**
     * Возвращает выбранные значения из таблицы ofs
     *
     * @param OfsResetDto $dto
     * @return array
     */
    public function run(OfsResetDto $dto): array
    {
        $info = Ofs::select('fact_all', 'kassa_all')
            ->where('user_id', $dto->user_id)
            ->where('year', $dto->year) 
            ->where('mounth', $dto->mounth - 1) 
            ->where('chapter', $dto->chapter)
            //->whereHas('ekr', function (Builder $query) use ($dto) {
            //    $query->where('shared', 'No');
            //    $query->where('main', 'No');
            //    $query->where('number', $dto->number);
            //})
            ->where('ekr_id', $dto->ekr_id)    

            ->first()
            ->toArray();
        return $info; 
                
    }
}

