<?php

namespace App\Structure\Count25Section\Admin\Actions;

use App\Core\Actions\BaseAction;

class CalculatorCountAction extends BaseAction
{
    
    /**
     * Подсчет итоговых сумм
     *
     * @param int $variant, array $info
     * @return array
     */
    public function CalculatorTotal(int $variant, array $info)
    {   
        $key = ['1' => 18, '2' => 3, '3' => 2, '4' => 4, '5' => 2, '6' => 2, '7' => 3];
        $result = [];
        
        for ($j = 0; $j < $key[$variant]; $j++){
            for ($i = 0; $i < count($info) - 1; $i++){
                if(($i % $key[$variant]) == 0 || $i == 0){
                    if($info[$i]['ekr']['shared'] == "No" && $info[$i]['ekr']['main'] == "Yes"){
                        if(!isset($result[$j]['fu'])){$result[$j]['fu'] = 0;}
                        if(!isset($result[$j]['cb'])){$result[$j]['cb'] = 0;}
                        $result[$j]['fu'] += $info[$i+$j]['sum_fu'];
                        $result[$j]['cb'] += $info[$i+$j]['sum_cb'];
                    }
                }
            }
        }
        return $result;
    }
    
}


