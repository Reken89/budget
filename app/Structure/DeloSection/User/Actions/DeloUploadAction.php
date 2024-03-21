<?php

namespace App\Structure\DeloSection\User\Actions;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Structure\DeloSection\User\Models\Correspondent;

class DeloUploadAction implements ToModel
{
    /**
     * Записываем информацию из EXCEL
     * В таблицу correspondents
     *
     * @param array $row
     * @return 
     */
    public function model(array $row)
    {
        return new Correspondent([
            'title' => $row[1],
        ]);    
    }
}

