<?php

namespace App\Structure\AdminSection\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\AdminSection\Requests\UserUpdateRequest;

class UserUpdateDto extends BaseDto
{
    public string   $id;
    public string   $name;
    public string   $email;
    public string   $role;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalChangeRequest $request
     * @return static
     */
    public static function fromRequest(UserUpdateRequest $request): self
    {
        return new self([
            'id'    => $request->get('id'),
            'name'  => $request->get('name'),
            'email' => $request->get('email'),
            'role'  => $request->get('role'),
        ]);
    }
}

