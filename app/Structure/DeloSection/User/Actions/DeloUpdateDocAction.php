<?php

namespace App\Structure\DeloSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\DeloSection\User\Models\Document;
use App\Structure\DeloSection\User\Dto\DeloDocUpdateDto;

class DeloUpdateDocAction extends BaseAction
{
    /**
     * Обновляем значения в таблице documents
     *
     * @param DeloDocUpdateDto $dto
     * @return bool
     */
    public function UpdateDoc(DeloDocUpdateDto $dto): bool
    {   
        $result = Document::find($dto->id)
            ->update([                
                'number'           => $dto->number,
                'npa_id'           => $dto->npa,
                'correspondent_id' => $dto->correspondent,
                'date'             => $dto->date,
                'user_id'          => $dto->user,
                'content'          => $dto->content,
            ]);
        
        return $result == true ? true : false;
    }
}

