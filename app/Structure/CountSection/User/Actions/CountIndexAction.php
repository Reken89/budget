<?php

namespace App\Structure\CountSection\User\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CountSection\Admin\Tasks\CountSelectAllTask;
use App\Structure\OfsSection\Admin\Tasks\OfsNumberMaxTask;

class CountIndexAction extends BaseAction
{
    /**
     * Возвращает смету по заданным параметрам
     *
     * @param int $variant, int $year
     * @return array
     */
    public function run(int $variant, int $year): array
    {   
        if($variant == '1'){
            $result = [
                'glava' => $this->task(CountSelectAllTask::class)->run(35, $year),
                'adm'   => $this->task(CountSelectAllTask::class)->run(25, $year),
                'sovet' => $this->task(CountSelectAllTask::class)->run(27, $year),
                'kso'   => $this->task(CountSelectAllTask::class)->run(28, $year),
            ];
        
            $total = [
                'glava' => $this->task(CountSelectAllTask::class)->total(35, $year),
                'adm'   => $this->task(CountSelectAllTask::class)->total(25, $year),
                'sovet' => $this->task(CountSelectAllTask::class)->total(27, $year),
                'kso'   => $this->task(CountSelectAllTask::class)->total(28, $year),
            ];          
        } elseif($variant == '2'){
            $result = [
                'cb'      => $this->task(CountSelectAllTask::class)->run(29, $year),
                'zakupki' => $this->task(CountSelectAllTask::class)->run(26, $year),
            ];
        
            $total = [
                'cb'      => $this->task(CountSelectAllTask::class)->total(29, $year),
                'zakupki' => $this->task(CountSelectAllTask::class)->total(26, $year),
            ]; 
        } elseif($variant == '3'){
            $result = [
                'aurinko'  => $this->task(CountSelectAllTask::class)->run(9, $year),
                'berezka'  => $this->task(CountSelectAllTask::class)->run(10, $year),
                'gnomik'   => $this->task(CountSelectAllTask::class)->run(11, $year),
                'zoloto'   => $this->task(CountSelectAllTask::class)->run(12, $year),
                'korablik' => $this->task(CountSelectAllTask::class)->run(13, $year),
                'skazka'   => $this->task(CountSelectAllTask::class)->run(14, $year),
                'solnce'   => $this->task(CountSelectAllTask::class)->run(15, $year),
            ];
        
            $total = [
                'aurinko'  => $this->task(CountSelectAllTask::class)->total(9, $year),
                'berezka'  => $this->task(CountSelectAllTask::class)->total(10, $year),
                'gnomik'   => $this->task(CountSelectAllTask::class)->total(11, $year),
                'zoloto'   => $this->task(CountSelectAllTask::class)->total(12, $year),
                'korablik' => $this->task(CountSelectAllTask::class)->total(13, $year),
                'skazka'   => $this->task(CountSelectAllTask::class)->total(14, $year),
                'solnce'   => $this->task(CountSelectAllTask::class)->total(15, $year),
            ]; 
        } elseif($variant == '4'){
            $result = [
                'dhsh' => $this->task(CountSelectAllTask::class)->run(18, $year),
                'dmsh' => $this->task(CountSelectAllTask::class)->run(19, $year),
            ];
        
            $total = [
                'dhsh' => $this->task(CountSelectAllTask::class)->total(18, $year),
                'dmsh' => $this->task(CountSelectAllTask::class)->total(19, $year),
            ]; 
        } elseif($variant == '5'){
            $result = [
                'school' => $this->task(CountSelectAllTask::class)->run(8, $year),
                'kinder' => $this->task(CountSelectAllTask::class)->run(36, $year),
            ];
        
            $total = [
                'school' => $this->task(CountSelectAllTask::class)->total(8, $year),
                'kinder' => $this->task(CountSelectAllTask::class)->total(36, $year),
            ]; 
        } elseif($variant == '6'){
            $result = [
                'kums' => $this->task(CountSelectAllTask::class)->run(23, $year),
                'us'   => $this->task(CountSelectAllTask::class)->run(37, $year),
                'edds' => $this->task(CountSelectAllTask::class)->run(38, $year),
            ];
        
            $total = [
                'kums' => $this->task(CountSelectAllTask::class)->total(23, $year),
                'us'   => $this->task(CountSelectAllTask::class)->total(37, $year),
                'edds' => $this->task(CountSelectAllTask::class)->total(38, $year),
            ]; 
        } 
       
        $info = [
            'result'     => $result,
            'year'       => $year,
            'total'      => $total,
            'variant'    => $variant,
            'max_number' => $this->task(OfsNumberMaxTask::class)->run(),
        ];
        
        return $info;

    }
}


