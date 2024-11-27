<?php

namespace App\Structure\AdminSection\Actions;

use App\Core\Actions\BaseAction;
use Illuminate\Support\Facades\Hash;
use App\Structure\AdminSection\Dto\UserAddDto;
use App\Structure\UserSection\Auth\Models\User;

class UserAddAction extends BaseAction
{
    /**
     * Добавляем запись в users
     *
     * @param UserAddDto $dto
     * @return bool
     */
    public function InsertUser(UserAddDto $dto): bool
    {       
        $result = User::create([
            'name'     => $dto->name,
            'email'    => $dto->email,
            'password' => Hash::make($dto->password),
            'role'     => 'user',
        ]);
        
        return $result == true ? true : false;
    }
}
