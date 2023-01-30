<?php

namespace App\Structure\BuildSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\BuildSection\Admin\Requests\BuildAddRequest;

class BuildAddDto extends BaseDto
{
    public int       $user_id;
    public int       $ekr_double;
    public string    $title;
    public int       $ekr;
    public float     $fu_sum;
    public int       $mounth;
    public int       $year;
    

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalUpdateRequest $request
     * @return static
     */
    public static function fromRequest(BuildAddRequest $request): self
    {
        return new self([
            'user_id'    => $request->get('user_id'),
            'ekr_double' => $request->get('ekr_double'),
            'title'      => $request->get('title'),
            'ekr'        => $request->get('ekr'),
            'fu_sum'     => $request->get('fu_sum'),
            'mounth'     => $request->get('mounth'),
            'year'       => $request->get('year'),
        ]);
    }
}

