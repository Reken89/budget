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
        $key = ['1' => 18, '2' => 21, '3' => 2, '4' => 4, '5' => 2, '6' => 2, '7' => 3];
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
    
    /**
     * Возвращает массив
     * Номера для таблицы Ekr
     * Раздел Shared
     *
     * @param array $number
     * @return array
     */
    public function SelectEkr(array $number)
    {   
        if($number['ekr']['number'] >= 17 && $number['ekr']['number'] <= 19){
            return [
                'group' => [17, 18, 19],
                'key'   => 16,
            ];
        } elseif($number['ekr']['number'] >= 21 && $number['ekr']['number'] <= 25){
            return [
                'group' => [21, 22, 23, 24, 25],
                'key'   => 20,
            ];
        } elseif($number['ekr']['number'] >= 27 && $number['ekr']['number'] <= 34){
            return [
                'group' => [27, 28, 29, 30, 31, 32],
                'key'   => 26,
            ];
        } elseif($number['ekr']['number'] >= 36 && $number['ekr']['number'] <= 42 || $number['ekr']['number'] == 45){
            return [
                'group' => [36, 37, 38, 39, 40, 41, 42, 45],
                'key'   => 35,
            ];
        } else {
            return [];
        }
    }
    
}


