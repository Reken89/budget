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
            
        }

    }
}

