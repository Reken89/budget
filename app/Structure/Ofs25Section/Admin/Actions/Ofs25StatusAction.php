<?php

namespace App\Structure\Ofs25Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Ofs25Section\User\Models\Ofs251;
use App\Structure\Ofs25Section\User\Models\Ofs252;
use App\Structure\Ofs25Section\User\Models\Ofs253;
use App\Structure\Ofs25Section\User\Models\Ofs254;
use App\Structure\Ofs25Section\User\Models\Ofs255;

class Ofs25StatusAction extends BaseAction
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
            $ofs = new Ofs251;
        }
        if($chapter == "2"){
            $ofs = new Ofs252;
        }
        if($chapter == "3"){
            $ofs = new Ofs253;
        }
        if($chapter == "4"){
            $ofs = new Ofs254;
        }
        if($chapter == "5"){
            $ofs = new Ofs255;
        }
        
        $result = $ofs::where('user_id', $user) 
            ->where('mounth', $mounth)
            ->update([
                'status' => 2,
            ]);    
        
        return $result == true ? true : false;

    }
}

