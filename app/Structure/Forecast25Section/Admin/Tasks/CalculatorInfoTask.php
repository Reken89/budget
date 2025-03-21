<?php

namespace App\Structure\Forecast25Section\Admin\Tasks;

use App\Core\Task\BaseTask;

class CalculatorInfoTask extends BaseTask
{
    private array $total = [
        'volume_one'  => 0,
        'volume_two'  => 0,
        'volume_year' => 0,
        'sum_one'     => 0,
        'sum_two'     => 0,
        'sum_year'    => 0,
    ];
    
    private array $vault = [
        'volume_heat'     => 0,
        'sum_heat'        => 0,
        'volume_water'    => 0,
        'sum_water'       => 0,
        'volume_drainage' => 0,
        'sum_drainage'    => 0,
        'volume_energy'   => 0,
        'sum_energy'      => 0,
        'volume_trash'    => 0,
        'sum_trash'       => 0,
        'volume_negative' => 0,
        'sum_negative'    => 0,
    ];
    
    /**
     * Выполняем арифметическое сложение
     * Итоговая строка
     *
     * @param array $forecast
     * @return array
     */
    public function CalculatorTotal(array $forecast): array
    {    
        foreach($forecast as $value){
            $this->total['volume_one'] = $this->total['volume_one'] + $value['volume_one'];
            $this->total['volume_two'] = $this->total['volume_two'] + $value['volume_two'];
            $this->total['volume_year'] = $this->total['volume_year'] + $value['volume_year'];
            $this->total['sum_one'] = $this->total['sum_one'] + $value['sum_one'];
            $this->total['sum_two'] = $this->total['sum_two'] + $value['sum_two'];
            $this->total['sum_year'] = $this->total['sum_year'] + $value['sum_year'];      
        }
        return $this->total;
    }
    
    /**
     * Выполняем арифметическое сложение
     * Сводный итог
     *
     * @param array $forecast
     * @return array
     */
    public function CalculatorVault(array $forecast): array
    {    
        for ($i = 0; $i < count($forecast) - 1; $i++){
            if (($i % 6) == 0 || $i == 0){
                $this->vault['volume_heat'] = $this->vault['volume_heat'] + $forecast[$i]['volume_year'];
                $this->vault['sum_heat'] = $this->vault['sum_heat'] + $forecast[$i]['sum_year'];
                $this->vault['volume_water'] = $this->vault['volume_water'] + $forecast[$i+1]['volume_year'];
                $this->vault['sum_water'] = $this->vault['sum_water'] + $forecast[$i+1]['sum_year'];
                $this->vault['volume_drainage'] = $this->vault['volume_drainage'] + $forecast[$i+2]['volume_year'];
                $this->vault['sum_drainage'] = $this->vault['sum_drainage'] + $forecast[$i+2]['sum_year'];
                $this->vault['volume_energy'] = $this->vault['volume_energy'] + $forecast[$i+3]['volume_year'];
                $this->vault['sum_energy'] = $this->vault['sum_energy'] + $forecast[$i+3]['sum_year'];
                $this->vault['volume_trash'] = $this->vault['volume_trash'] + $forecast[$i+4]['volume_year'];
                $this->vault['sum_trash'] = $this->vault['sum_trash'] + $forecast[$i+4]['sum_year'];
                $this->vault['volume_negative'] = $this->vault['volume_negative'] + $forecast[$i+5]['volume_year'];
                $this->vault['sum_negative'] = $this->vault['sum_negative'] + $forecast[$i+5]['sum_year'];
            }
        }
        return $this->vault;
    }
}

