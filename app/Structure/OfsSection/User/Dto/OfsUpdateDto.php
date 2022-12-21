<?php

namespace App\Structure\OfsSection\User\Dto;

use App\Core\Dto\BaseDto;
use App\Structure\OfsSection\User\Requests\OfsUpdateRequest;

class OfsUpdateDto extends BaseDto
{
    public int      $id;
    public int      $user_id;
    public int      $main_id;
    public int      $shared_id;
    public int      $mounth;
    public int      $year;
    public int      $chapter;
    public int      $number;
    public float    $lbo;
    public float    $prepaid;
    public float    $credit_year_all;
    public float    $credit_year_term;
    public float    $debit_year_all;
    public float    $debit_year_term;
    public float    $fact_mounth;
    public float    $kassa_mounth;
    public float    $credit_end_all;
    public float    $credit_end_term;
    public float    $debit_end_all;
    public float    $debit_end_term;
    public float    $return_old_year;

    /**
     * Возвращает DTO из объекта Request
     *
     * @param OfsUpdateRequest $request
     * @return static
     */
    public static function fromRequest(OfsUpdateRequest $request): self
    {
        return new self([
            'id'               => $request->get('id'),
            'user_id'          => $request->get('user_id'),
            'main_id'          => $request->get('main_id'),
            'shared_id'        => $request->get('shared_id'),
            'mounth'           => $request->get('mounth'),
            'year'             => $request->get('year'),
            'chapter'          => $request->get('chapter'),
            'number'           => $request->get('number'),
            'lbo'              => $request->get('lbo'),
            'prepaid'          => $request->get('prepaid'),
            'credit_year_all'  => $request->get('credit_year_all'),
            'credit_year_term' => $request->get('credit_year_term'),
            'debit_year_all'   => $request->get('debit_year_all'),
            'debit_year_term'  => $request->get('debit_year_term'),
            'fact_mounth'      => $request->get('fact_mounth'),
            'kassa_mounth'     => $request->get('kassa_mounth'),
            'credit_end_all'   => $request->get('credit_end_all'),
            'credit_end_term'  => $request->get('credit_end_term'),
            'debit_end_all'    => $request->get('debit_end_all'),
            'debit_end_term'   => $request->get('debit_end_term'),
            'return_old_year'  => $request->get('return_old_year'),
        ]);
    }
}

