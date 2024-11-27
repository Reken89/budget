<?php

namespace App\Structure\AdminSection\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\AdminSection\Requests\UserAddRequest;

class UserAddDto extends BaseDto
{
    public string   $name;
    public string   $email;
    public string   $password;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalChangeRequest $request
     * @return static
     */
    public static function fromRequest(UserAddRequest $request): self
    {
        return new self([
            'name'     => $request->get('name'),
            'email'    => $request->get('email'),
            'password' => $request->get('password'),
        ]);
    }
}

