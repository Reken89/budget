<?php

namespace App\Structure\BuildSection\Admin\Tasks;

use App\Core\Task\BaseTask;

class BuildCalculatorEkrTask extends BaseTask
{
    /**
     * Выполняет вычислительные действия с массивом
     * Складывает значения
     *
     * @param array $info, int $variant
     * @return array
     */
    public function run(array $info, int $variant): array
    {    
        function ekr($user_id, $info, $ekr, $variant){
            $fu = 0;
            $build = 0;
            $contract = 0;
            $kassa = 0;
            $fact = 0;
            
            foreach ($info as $value){
                if ($variant == 'total'){
                    if ($value['work']['ekr'] == $ekr){
                        $fu += $value['fu_sum'];  
                        $build += $value['build_sum'];
                        $contract += $value['contract_sum'];
                        $kassa += $value['kassa_sum'];
                        $fact += $value['fact_sum'];
                    }
                } elseif ($variant == 'ekr_one'){
                    if ($value['user']['id'] == $user_id){
                        $fu += $value['fu_sum'];  
                        $build += $value['build_sum'];
                        $contract += $value['contract_sum'];
                        $kassa += $value['kassa_sum'];
                        $fact += $value['fact_sum'];                    
                    }
                } elseif ($variant == 'ekr_many'){
                    if ($value['user']['id'] == TRUE){
                        $fu += $value['fu_sum'];  
                        $build += $value['build_sum'];
                        $contract += $value['contract_sum'];
                        $kassa += $value['kassa_sum'];
                        $fact += $value['fact_sum']; 
                    }
                } else {
                    if ($value['work']['ekr'] == $ekr && $value['user']['id'] == $user_id){
                        $fu += $value['fu_sum'];  
                        $build += $value['build_sum'];
                        $contract += $value['contract_sum'];
                        $kassa += $value['kassa_sum'];
                        $fact += $value['fact_sum'];                    
                    }                    
                }
                
            }
            $result = [
                'fu' => $fu,
                'build' => $build,
                'contract' => $contract,
                'kassa' => $kassa,
                'fact' => $fact,
            ];
            
            return $result;
        }        
        
        if ($variant == '2'){
            
        } elseif ($variant == '3'){
            $result = [
                'aurinko' => [
                    'aurinko225' => ekr(9, $info, 225, 'no'),
                    'aurinko226' => ekr(9, $info, 226, 'no'),
                    'aurinko228' => ekr(9, $info, 228, 'no'),
                    'aurinko344' => ekr(9, $info, 344, 'no'),
                    'aurinko346' => ekr(9, $info, 346, 'no'),
                    'aurinko310' => ekr(9, $info, 310, 'no'),
                ],
                'berezka' => [
                    'berezka225' => ekr(10, $info, 225, 'no'),
                    'berezka226' => ekr(10, $info, 226, 'no'),
                    'berezka228' => ekr(10, $info, 228, 'no'),
                    'berezka344' => ekr(10, $info, 344, 'no'),
                    'berezka346' => ekr(10, $info, 346, 'no'),
                    'berezka310' => ekr(10, $info, 310, 'no'),
                ],
                'gnomik' => [
                    'gnomik225' => ekr(11, $info, 225, 'no'),
                    'gnomik226' => ekr(11, $info, 226, 'no'),
                    'gnomik228' => ekr(11, $info, 228, 'no'),
                    'gnomik344' => ekr(11, $info, 344, 'no'),
                    'gnomik346' => ekr(11, $info, 346, 'no'),
                    'gnomik310' => ekr(11, $info, 310, 'no'),
                ],
                'zoloto' => [
                    'zoloto225' => ekr(12, $info, 225, 'no'),
                    'zoloto226' => ekr(12, $info, 226, 'no'),
                    'zoloto228' => ekr(12, $info, 228, 'no'),
                    'zoloto344' => ekr(12, $info, 344, 'no'),
                    'zoloto346' => ekr(12, $info, 346, 'no'),
                    'zoloto310' => ekr(12, $info, 310, 'no'),
                ],
                'korablik' => [
                    'korablik225' => ekr(13, $info, 225, 'no'),
                    'korablik226' => ekr(13, $info, 226, 'no'),
                    'korablik228' => ekr(13, $info, 228, 'no'),
                    'korablik344' => ekr(13, $info, 344, 'no'),
                    'korablik346' => ekr(13, $info, 346, 'no'),
                    'korablik310' => ekr(13, $info, 310, 'no'),
                ],
                'skazka' => [
                    'skazka225' => ekr(14, $info, 225, 'no'),
                    'skazka226' => ekr(14, $info, 226, 'no'),
                    'skazka228' => ekr(14, $info, 228, 'no'),
                    'skazka344' => ekr(14, $info, 344, 'no'),
                    'skazka346' => ekr(14, $info, 346, 'no'),
                    'skazka310' => ekr(14, $info, 310, 'no'),
                ],
                'solnishko' => [
                    'solnishko225' => ekr(15, $info, 225, 'no'),
                    'solnishko226' => ekr(15, $info, 226, 'no'),
                    'solnishko228' => ekr(15, $info, 228, 'no'),
                    'solnishko344' => ekr(15, $info, 344, 'no'),
                    'solnishko346' => ekr(15, $info, 346, 'no'),
                    'solnishko310' => ekr(15, $info, 310, 'no'),
                ],
                'solnishko_ekr' => [
                    'ekr_one' => ekr(15, $info, 0, 'ekr_one'),
                ],
                'skazka_ekr' => [
                    'ekr_one' => ekr(14, $info, 0, 'ekr_one'),
                ],
                'korablik_ekr' => [
                    'ekr_one' => ekr(13, $info, 0, 'ekr_one'),
                ],
                'zoloto_ekr' => [
                    'ekr_one' => ekr(12, $info, 0, 'ekr_one'),
                ],
                'gnomik_ekr' => [
                    'ekr_one' => ekr(11, $info, 0, 'ekr_one'),
                ],
                'aurinko_ekr' => [
                    'ekr_one' => ekr(9, $info, 0, 'ekr_one'),
                ],
                'berezka_ekr' => [
                    'ekr_one' => ekr(10, $info, 0, 'ekr_one'),
                ],
                'total' => [
                    'total225' => ekr(0, $info, 225, 'total'),
                    'total226' => ekr(0, $info, 226, 'total'),
                    'total228' => ekr(0, $info, 228, 'total'),
                    'total344' => ekr(0, $info, 344, 'total'),
                    'total346' => ekr(0, $info, 346, 'total'),
                    'total310' => ekr(0, $info, 310, 'total'),
                ],               
                'total_ekr' => [
                    'total' => ekr(0, $info, 0, 'ekr_many'),
                ],
            ];
            
            return $result;
            
        } elseif ($variant == '4'){
            $result = [
                'adm' => [
                    'adm225' => ekr(25, $info, 225, 'no'),
                    'adm226' => ekr(25, $info, 226, 'no'),
                    'adm228' => ekr(25, $info, 228, 'no'),
                    'adm344' => ekr(25, $info, 344, 'no'),
                    'adm346' => ekr(25, $info, 346, 'no'),
                    'adm310' => ekr(25, $info, 310, 'no'),
                ],
                'kums' => [
                    'kums225' => ekr(23, $info, 225, 'no'),
                    'kums226' => ekr(23, $info, 226, 'no'),
                    'kums228' => ekr(23, $info, 228, 'no'),
                    'kums344' => ekr(23, $info, 344, 'no'),
                    'kums346' => ekr(23, $info, 346, 'no'),
                    'kums310' => ekr(23, $info, 310, 'no'),
                ],
                'total' => [
                    'total225' => ekr(0, $info, 225, 'total'),
                    'total226' => ekr(0, $info, 226, 'total'),
                    'total228' => ekr(0, $info, 228, 'total'),
                    'total344' => ekr(0, $info, 344, 'total'),
                    'total346' => ekr(0, $info, 346, 'total'),
                    'total310' => ekr(0, $info, 310, 'total'),
                ],
                'adm_ekr' => [
                    'ekr_one' => ekr(25, $info, 0, 'ekr_one'),
                ],
                'kums_ekr' => [
                    'ekr_one' => ekr(23, $info, 0, 'ekr_one'),
                ],
                'total_ekr' => [
                    'total' => ekr(0, $info, 0, 'ekr_many'),
                ],
            ];
            
            return $result;
            
        } elseif ($variant == '5'){
                       
            $result = [
                'dhsh' => [
                    'dhsh225' => ekr(18, $info, 225, 'no'),
                    'dhsh226' => ekr(18, $info, 226, 'no'),
                    'dhsh228' => ekr(18, $info, 228, 'no'),
                    'dhsh344' => ekr(18, $info, 344, 'no'),
                    'dhsh346' => ekr(18, $info, 346, 'no'),
                    'dhsh310' => ekr(18, $info, 310, 'no'),
                ],
                'dmsh' => [
                    'dmsh225' => ekr(19, $info, 225, 'no'),
                    'dmsh226' => ekr(19, $info, 226, 'no'),
                    'dmsh228' => ekr(19, $info, 228, 'no'),
                    'dmsh344' => ekr(19, $info, 344, 'no'),
                    'dmsh346' => ekr(19, $info, 346, 'no'),
                    'dmsh310' => ekr(19, $info, 310, 'no'),
                ],
                'total' => [
                    'total225' => ekr(0, $info, 225, 'total'),
                    'total226' => ekr(0, $info, 226, 'total'),
                    'total228' => ekr(0, $info, 228, 'total'),
                    'total344' => ekr(0, $info, 344, 'total'),
                    'total346' => ekr(0, $info, 346, 'total'),
                    'total310' => ekr(0, $info, 310, 'total'),
                ],
                'dhsh_ekr' => [
                    'ekr_one' => ekr(18, $info, 0, 'ekr_one'),
                ],
                'dmsh_ekr' => [
                    'ekr_one' => ekr(19, $info, 0, 'ekr_one'),
                ],
                'total_ekr' => [
                    'total' => ekr(0, $info, 0, 'ekr_many'),
                ],
            ];
            
            return $result;
            
        } elseif ($variant == '6'){
            $result = [
                'vsosh' => [
                    'vsosh225' => ekr(8, $info, 225, 'no'),
                    'vsosh226' => ekr(8, $info, 226, 'no'),
                    'vsosh228' => ekr(8, $info, 228, 'no'),
                    'vsosh344' => ekr(8, $info, 344, 'no'),
                    'vsosh346' => ekr(8, $info, 346, 'no'),
                    'vsosh310' => ekr(8, $info, 310, 'no'),
                ],
                'vsosh_ekr' => [
                    'ekr_one' => ekr(8, $info, 0, 'ekr_one'),
                ],
            ];
            
            return $result;
        }

    }
}

