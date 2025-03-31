<?php

namespace App\Structure\APISection\Tasks;

use App\Core\Task\BaseTask;
use App\Structure\Ofs25Section\User\Models\Ofs251;
use App\Structure\Ofs25Section\User\Models\Ofs252;
use App\Structure\Ofs25Section\User\Models\Ofs253;
use App\Structure\Ofs25Section\User\Models\Ofs254;
use App\Structure\Ofs25Section\User\Models\Ofs255;

class SelectOfsTask extends BaseTask
{
    
    /**
     * 
     * 
     *
     * @param 
     * @return array
     */
    public function SelectStatus(int $chapter, int $mounth, int $user): array
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
        
        return $ofs::select('user_id', 'status')
            ->where('mounth', $mounth)
            //->where('status', 2)
            ->where('user_id', $user)   
            ->with('user:id,name')  
            //->count() > 0;
            ->first()
            ->toArray();
    }
}
