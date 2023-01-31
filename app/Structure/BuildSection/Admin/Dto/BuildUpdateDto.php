<?php

namespace App\Structure\BuildSection\Admin\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\BuildSection\Admin\Requests\BuildUpdateRequest;

class BuildUpdateDto extends BaseDto
{
    public int       $id;
    public int       $ekr_double;
    public string    $title;
    public int       $ekr;
    public float     $fu_sum;
    public int       $work_id;
    public int       $year;
    public int       $mounth;
    public int       $user_id;
 

    /**
     * Возвращает DTO из объекта Request
     *
     * @param CommunalUpdateRequest $request
     * @return static
     */
    public static function fromRequest(BuildUpdateRequest $request): self
    {
        return new self([
            'id'         => $request->get('id'),
            'ekr_double' => $request->get('ekr_double'),
            'title'      => $request->get('title'),
            'ekr'        => $request->get('ekr'),
            'fu_sum'     => $request->get('fu_sum'),
            'work_id'    => $request->get('work_id'),
            'year'       => $request->get('year'),
            'mounth'     => $request->get('mounth'),
            'user_id'    => $request->get('user_id'),
        ]);
    }
}

