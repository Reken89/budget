<?php

namespace App\Structure\AdminSection\Actions;

use App\Core\Actions\BaseAction;
use Illuminate\Support\Facades\Hash;
use App\Structure\AdminSection\Dto\UserUpdateDto;
use App\Structure\AdminSection\Dto\UserUpdatePasswordDto;
use App\Structure\UserSection\Auth\Models\User;

class UserUpdateAction extends BaseAction
{
    /**
     * Обновляем значения пользователя
     *
     * @param UserUpdateDto $dto
     * @return bool
     */
    public function UpdateInfo(UserUpdateDto $dto): bool
    {       
        $result = User::find($dto->id)
            ->update([                
                'name'  => $dto->name,
                'email' => $dto->email,
                'role'  => $dto->role,
            ]);
        
        return $result == true ? true : false;
    }
    
    /**
     * Обновляем пароль пользователя
     *
     * @param UserUpdatePasswordDto $dto
     * @return bool
     */
    public function UpdatePassword(UserUpdatePasswordDto $dto): bool
    {       
        $result = User::find($dto->id)
            ->update([                
                'password' => Hash::make($dto->password),
            ]);
        
        return $result == true ? true : false;
    }
}

