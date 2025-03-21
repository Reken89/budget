<?php

namespace App\Structure\Forecast25Section\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\Forecast25Section\Admin\Tasks\CalculatorInfoTask;

class CalculatorInfoAction extends BaseAction
{
    private array $service = [
        'heat'     => 'теплоснабжение',
        'water'    => 'водоснабжение',
        'drainage' => 'водоотведение',
        'energy'   => 'электроснабжение',
        'trash'    => 'вывоз мусора',
        'negative' => 'негативное воздействие',
    ];
    
    /**
     * Выполнение арифметических действий
     * Сложение свода, итогов и т.д.
     *
     * @param array $forecast
     * @return 
     */
    public function CalculatorInfo(array $forecast): array
    {              
        
        if (count($forecast) > 20){
            $vault = $this->task(CalculatorInfoTask::class)->CalculatorVault($forecast);
        }else{
            $vault = null;
        }
        
        return [
            'service' => $this->service[$forecast[0]['title']],
            'total'   => $this->task(CalculatorInfoTask::class)->CalculatorTotal($forecast),
            'vault'   => $vault,
        ];

    }   
}

