<?php

namespace App\Structure\BlockSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\BlockSection\Admin\Models\Version;

class WorkAction extends BaseAction
{
    /**
     * Возвращает информацию из таблицы versions
     *
     * @param 
     * @return array
     */
    public function SelectInfo(): array
    {   
        $info = Version::select()
            ->first()
            ->toArray();       
        return $info;  
    }
    
    /**
     * Обновляет статус в таблице versions
     *
     * @param string $key
     * @return bool
     */
    public function UpdateInfo(string $key): bool
    {   
        $status = $key == "off" ? "no" : "yes";
        
        $result = Version::where('id', 1) 
            ->update([
                'status' => $status,
            ]);    
        
        return $result == true ? true : false;
    }
}
