<?php

namespace App\Structure\DeloSection\User\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\DeloSection\User\Models\Document;
use App\Structure\DeloSection\User\Dto\DeloDocAddDto;

class DeloDocAddTask extends BaseTask
{
    /**
     * Добавляем запись в таблицу documents
     *
     * @param DeloDocAddDto $dto
     * @return bool
     */
    public function CreateDoc(DeloDocAddDto $dto): bool
    {
        $result = Document::create([
            'number'           => $dto->number,
            'npa_id'           => $dto->npa,
            'correspondent_id' => $dto->correspondent,
            'date'             => $dto->date,
            'user_id'          => $dto->user,
            'content'          => $dto->content,
            'author'           => $dto->author,
            'type'             => $dto->variant,
        ]);
        return $result == true ? true : false;
    }
}   

