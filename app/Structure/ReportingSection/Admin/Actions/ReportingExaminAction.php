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
    public function run(int $mounth, int $year, string $meaning)
   {   
        $total = Reporting::selectRaw('SUM(`approved`) as approved')
            ->selectRaw('SUM(`fulfilled`) as fulfilled')
            ->selectRaw('SUM(`unused`) as unused')
            ->where('year', $year)    
            ->where('mounth', $mounth)  
            ->where('meaning', $meaning) 
            ->where('kbk', '!=', 'no')
            ->first()
            ->toArray();
        
        $sum = Reporting::selectRaw('SUM(`approved`) as approved')
            ->selectRaw('SUM(`fulfilled`) as fulfilled')
            ->selectRaw('SUM(`unused`) as unused')
            ->where('year', $year)    
            ->where('mounth', $mounth)  
            ->where('meaning', $meaning) 
            ->where('kbk', 'no')
            ->first()
            ->toArray();       
        
        
        if ($sum["approved"] == $total["approved"] && $sum["fulfilled"] == $total["fulfilled"] && $sum["unused"] == $total["unused"]){
            echo "Проверка пройдена";
        } else {
            Reporting::where('year', $year)
                ->where('mounth', $mounth)  
                ->where('meaning', $meaning)
                ->delete();   
                    
            echo "Ты че? В файле ошибка";
        }
          
   }

}
