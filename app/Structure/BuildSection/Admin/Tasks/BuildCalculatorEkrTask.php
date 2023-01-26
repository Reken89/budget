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
        function ekr($user_id, $info, $ekr){
            $fu = 0;
            $build = 0;
            $contract = 0;
            $kassa = 0;
            $fact = 0;
            
            foreach ($info as $value){
                if ($value['work']['ekr'] == $ekr && $value['user']['id'] == $user_id){
                    $fu += $value['fu_sum'];  
                    $build += $value['build_sum'];
                    $contract += $value['contract_sum'];
                    $kassa += $value['kassa_sum'];
                    $fact += $value['fact_sum'];                    
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
            
        } elseif ($variant == '5'){
                       
            $result = [
                'dhsh' => [
                    'dhsh225' => ekr(18, $info, 225),
                    'dhsh226' => ekr(18, $info, 226),
                    'dhsh228' => ekr(18, $info, 228),
                    'dhsh344' => ekr(18, $info, 344),
                    'dhsh346' => ekr(18, $info, 346),
                    'dhsh310' => ekr(18, $info, 310),
                ],
                'dmsh' => [
                    'dmsh225' => ekr(19, $info, 225),
                    'dmsh226' => ekr(19, $info, 226),
                    'dmsh228' => ekr(19, $info, 228),
                    'dmsh344' => ekr(19, $info, 344),
                    'dmsh346' => ekr(19, $info, 346),
                    'dmsh310' => ekr(19, $info, 310),
                ],
            ];
            
            return $result;
            
        } elseif ($variant == '6'){
            
        }

    }
}

