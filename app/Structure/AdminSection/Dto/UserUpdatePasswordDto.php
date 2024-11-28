<?php

namespace App\Structure\AdminSection\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\AdminSection\Requests\UserUpdatePasswordRequest;

class UserUpdatePasswordDto extends BaseDto
{
    public string   $id;
    public string   $password;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param UserUpdatePasswordRequest $request
     * @return static
     */
    public static function fromRequest(UserUpdatePasswordRequest $request): self
    {
        return new self([
            'id'       => $request->get('id'),
            'password' => $request->get('password'),
        ]);
    }
}

