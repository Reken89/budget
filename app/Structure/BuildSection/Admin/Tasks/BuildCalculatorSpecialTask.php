<?php

namespace App\Structure\BuildSection\Admin\Tasks;

use App\Core\Task\BaseTask;

class BuildCalculatorSpecialTask extends BaseTask
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
                    if ($value['work']['ekr_double'] == $ekr){
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
                    if ($value['work']['ekr_double'] == $ekr && $value['user']['id'] == $user_id){
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
        
        $result = [
            'sosh_one' => [
                'sosh_one241' => ekr(3, $info, 241, 'no'),
                'sosh_one414' => ekr(3, $info, 414, 'no'),
                'sosh_one530' => ekr(3, $info, 530, 'no'),
            ],
            'sosh_two' => [
                'sosh_two241' => ekr(4, $info, 241, 'no'),
                'sosh_two414' => ekr(4, $info, 414, 'no'),
                'sosh_two530' => ekr(4, $info, 530, 'no'),
            ],
            'sosh_three' => [
                'sosh_three241' => ekr(5, $info, 241, 'no'),
                'sosh_three414' => ekr(5, $info, 414, 'no'),
                'sosh_three530' => ekr(5, $info, 530, 'no'),
            ],
            'gimnazia' => [
                'gimnazia241' => ekr(7, $info, 241, 'no'),
                'gimnazia414' => ekr(7, $info, 414, 'no'),
                'gimnazia530' => ekr(7, $info, 530, 'no'),
            ],
            'licei' => [
                'licei241' => ekr(6, $info, 241, 'no'),
                'licei414' => ekr(6, $info, 414, 'no'),
                'licei530' => ekr(6, $info, 530, 'no'),
            ],
            'sport' => [
                'sport241' => ekr(16, $info, 241, 'no'),
                'sport414' => ekr(16, $info, 414, 'no'),
                'sport530' => ekr(16, $info, 530, 'no'),
            ],
            'cvr' => [
                'cvr241' => ekr(17, $info, 241, 'no'),
                'cvr414' => ekr(17, $info, 414, 'no'),
                'cvr530' => ekr(17, $info, 530, 'no'),
            ],
            'library' => [
                'library241' => ekr(20, $info, 241, 'no'),
                'library414' => ekr(20, $info, 414, 'no'),
                'library530' => ekr(20, $info, 530, 'no'),
            ],
            'ckr' => [
                'ckr241' => ekr(21, $info, 241, 'no'),
                'ckr414' => ekr(21, $info, 414, 'no'),
                'ckr530' => ekr(21, $info, 530, 'no'),
            ],
            'cro' => [
                'cro241' => ekr(22, $info, 241, 'no'),
                'cro414' => ekr(22, $info, 414, 'no'),
                'cro530' => ekr(22, $info, 530, 'no'),
            ],
            'cro_ekr' => [
                'ekr_one' => ekr(22, $info, 0, 'ekr_one'),
            ],
            'ckr_ekr' => [
                'ekr_one' => ekr(21, $info, 0, 'ekr_one'),
            ],
            'library_ekr' => [
                'ekr_one' => ekr(20, $info, 0, 'ekr_one'),
            ],
            'cvr_ekr' => [
                'ekr_one' => ekr(17, $info, 0, 'ekr_one'),
            ],
            'sport_ekr' => [
                'ekr_one' => ekr(16, $info, 0, 'ekr_one'),
            ],
            'licei_ekr' => [
                'ekr_one' => ekr(6, $info, 0, 'ekr_one'),
            ],
            'gimnazia_ekr' => [
                'ekr_one' => ekr(7, $info, 0, 'ekr_one'),
            ],
            'sosh_three_ekr' => [
                'ekr_one' => ekr(5, $info, 0, 'ekr_one'),
            ],
            'sosh_one_ekr' => [
                'ekr_one' => ekr(3, $info, 0, 'ekr_one'),
            ],
            'sosh_two_ekr' => [
                'ekr_one' => ekr(4, $info, 0, 'ekr_one'),
            ],
            'total' => [
                'total241' => ekr(0, $info, 241, 'total'),
                'total414' => ekr(0, $info, 414, 'total'),
                'total530' => ekr(0, $info, 530, 'total'),
            ],
            'total_ekr' => [
                'total' => ekr(0, $info, 0, 'ekr_many'),
            ],
        ];
            
        return $result;
    }
}
