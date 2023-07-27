<?php

namespace App\Structure\ReportingSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\ReportingSection\Admin\Models\Reporting;
  
class ReportingExaminAction extends BaseAction
{    
     /**
     * Выполняем проверку на точность сумм в таблице reporting
     * В случае обнаружения ошибки, удаляем недостоверные строки
     *
     * @param int $year, int $mounth, string $meaning
     * @return 
     */
    public function run(int $mounth, int $year, string $meaning): string
    {
        //Если документ относится к РАСХОДАМ
        if($meaning == "expenses"){            
            $total = Reporting::selectRaw('SUM(`approved`) as approved')
            ->selectRaw('SUM(`fulfilled`) as fulfilled')
            ->where('year', $year)    
            ->where('mounth', $mounth)  
            ->where('meaning', $meaning) 
            ->where('kbk', '!=', 'no')
            ->first()
            ->toArray();

        //Если документ относится к ДОХОДАМ    
        } elseif ($meaning == "income"){           
            $total = Reporting::selectRaw('SUM(`approved`) as approved')
            ->selectRaw('SUM(`fulfilled`) as fulfilled')
            ->where('year', $year)    
            ->where('mounth', $mounth)  
            ->where('meaning', $meaning) 
            ->where('kbk', '!=', 'no')
            ->where('kbk', '!=', '00010000000000000000')
            ->where('kbk', '!=', '00020000000000000000')
            ->first()
            ->toArray();
        }
        
        //Получаем сумму с которой будем сравнивать
        $sum = Reporting::selectRaw('SUM(`approved`) as approved')
            ->selectRaw('SUM(`fulfilled`) as fulfilled')
            ->where('year', $year)    
            ->where('mounth', $mounth)  
            ->where('meaning', $meaning) 
            ->where('kbk', 'no')
            ->first()
            ->toArray();       
                
        //Если суммы равны, проверка пройдена
        if ($sum["approved"] == $total["approved"] && $sum["fulfilled"] == $total["fulfilled"]){
        $result = "yes";    
            
        //Если суммы не равны, то удаляем записи из таблицы    
        } else {
            Reporting::where('year', $year)
                ->where('mounth', $mounth)  
                ->where('meaning', $meaning)
                ->delete();   
                    
        $result = "no";
        }
        
        return $result;
    }

}
