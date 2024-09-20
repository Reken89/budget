<?php

namespace App\Structure\Ofs2024Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs2024Section\User\Models\Ofs241;
use App\Structure\Ofs2024Section\User\Models\Ofs242;
use App\Structure\Ofs2024Section\User\Models\Ofs243;
use App\Structure\Ofs2024Section\User\Models\Ofs244;
use App\Structure\Ofs2024Section\User\Models\Ofs245;

class Ofs2024StatusAction extends BaseAction
{
    /**
     * Обновляет статус в таблице ofs
     *
     * @param int $mounth, int $chapter, int $user
     * @return
     */
    public function UpdateStatus(int $mounth, int $chapter, int $user)
    {   
        if($chapter == "1"){
            $ofs = new Ofs241;
        }
        if($chapter == "2"){
            $ofs = new Ofs242;
        }
        if($chapter == "3"){
            $ofs = new Ofs243;
        }
        if($chapter == "4"){
            $ofs = new Ofs244;
        }
        if($chapter == "5"){
            $ofs = new Ofs245;
        }
        
        $result = $ofs::where('user_id', $user) 
            ->where('mounth', $mounth)
            ->update([
                'status' => 2,
            ]);    
        
        return $result == true ? true : false;

    }
}

