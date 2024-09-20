<?php

namespace App\Structure\Ofs2024Section\User\Tasks;

use App\Core\Task\BaseTask;

class Ofs2024AssemblyTask extends BaseTask
{
    /**
     * Суммирование таблиц
     *
     * @param array $table1, array $table2
     * @return array
     */
    public function SummationTwo(array $table1, array $table2): array
    {
        $result = [];
                
        for($i = 0 ; $i < count($table1) ; $i++){
            $result[$i]['ekr']['main'] = $table1[$i]['ekr']['main'];
            $result[$i]['ekr']['shared'] = $table1[$i]['ekr']['shared'];
            $result[$i]['ekr']['title'] = $table1[$i]['ekr']['title'];
            $result[$i]['ekr']['ekr'] = $table1[$i]['ekr']['ekr'];
            $result[$i]['lbo'] = $table1[$i]['lbo'] + $table2[$i]['lbo'];
            $result[$i]['prepaid'] = $table1[$i]['prepaid'] + $table2[$i]['prepaid'];
            $result[$i]['credit_year_all'] = $table1[$i]['credit_year_all'] + $table2[$i]['credit_year_all'];
            $result[$i]['credit_year_term'] = $table1[$i]['credit_year_term'] + $table2[$i]['credit_year_term'];
            $result[$i]['debit_year_all'] = $table1[$i]['debit_year_all'] + $table2[$i]['debit_year_all'];
            $result[$i]['debit_year_term'] = $table1[$i]['debit_year_term'] + $table2[$i]['debit_year_term'];
            $result[$i]['fact_all'] = $table1[$i]['fact_all'] + $table2[$i]['fact_all'];
            $result[$i]['fact_mounth'] = $table1[$i]['fact_mounth'] + $table2[$i]['fact_mounth'];
            $result[$i]['kassa_all'] = $table1[$i]['kassa_all'] + $table2[$i]['kassa_all'];
            $result[$i]['kassa_mounth'] = $table1[$i]['kassa_mounth'] + $table2[$i]['kassa_mounth'];
            $result[$i]['credit_end_all'] = $table1[$i]['credit_end_all'] + $table2[$i]['credit_end_all'];
            $result[$i]['credit_end_term'] = $table1[$i]['credit_end_term'] + $table2[$i]['credit_end_term'];
            $result[$i]['debit_end_all'] = $table1[$i]['debit_end_all'] + $table2[$i]['debit_end_all'];
            $result[$i]['debit_end_term'] = $table1[$i]['debit_end_term'] + $table2[$i]['debit_end_term'];
            $result[$i]['return_old_year'] = $table1[$i]['return_old_year'] + $table2[$i]['return_old_year'];
            $result[$i]['total1'] = $table1[$i]['total1'] + $table2[$i]['total1'];
            $result[$i]['total2'] = $table1[$i]['total2'] + $table2[$i]['total2'];
            $result[$i]['status'] = $table1[$i]['status'];
        }
        
        return $result;
    }   
    
    /**
     * Суммирование таблиц
     *
     * @param array $table1, array $table2, array $table3
     * @return array
     */
    public function SummationThree(array $table1, array $table2, array $table3): array
    {
        $result = [];
                
        for($i = 0 ; $i < count($table1) ; $i++){
            $result[$i]['ekr']['main'] = $table1[$i]['ekr']['main'];
            $result[$i]['ekr']['shared'] = $table1[$i]['ekr']['shared'];
            $result[$i]['ekr']['title'] = $table1[$i]['ekr']['title'];
            $result[$i]['ekr']['ekr'] = $table1[$i]['ekr']['ekr'];
            $result[$i]['lbo'] = $table1[$i]['lbo'] + $table2[$i]['lbo'] + $table3[$i]['lbo'];
            $result[$i]['prepaid'] = $table1[$i]['prepaid'] + $table2[$i]['prepaid'] + $table3[$i]['prepaid'];
            $result[$i]['credit_year_all'] = $table1[$i]['credit_year_all'] + $table2[$i]['credit_year_all'] + $table3[$i]['credit_year_all'];
            $result[$i]['credit_year_term'] = $table1[$i]['credit_year_term'] + $table2[$i]['credit_year_term'] + $table3[$i]['credit_year_term'];
            $result[$i]['debit_year_all'] = $table1[$i]['debit_year_all'] + $table2[$i]['debit_year_all'] + $table3[$i]['debit_year_all'];
            $result[$i]['debit_year_term'] = $table1[$i]['debit_year_term'] + $table2[$i]['debit_year_term'] + $table3[$i]['debit_year_term'];
            $result[$i]['fact_all'] = $table1[$i]['fact_all'] + $table2[$i]['fact_all'] + $table3[$i]['fact_all'];
            $result[$i]['fact_mounth'] = $table1[$i]['fact_mounth'] + $table2[$i]['fact_mounth'] + $table3[$i]['fact_mounth'];
            $result[$i]['kassa_all'] = $table1[$i]['kassa_all'] + $table2[$i]['kassa_all'] + $table3[$i]['kassa_all'];
            $result[$i]['kassa_mounth'] = $table1[$i]['kassa_mounth'] + $table2[$i]['kassa_mounth'] + $table3[$i]['kassa_mounth'];
            $result[$i]['credit_end_all'] = $table1[$i]['credit_end_all'] + $table2[$i]['credit_end_all'] + $table3[$i]['credit_end_all'];
            $result[$i]['credit_end_term'] = $table1[$i]['credit_end_term'] + $table2[$i]['credit_end_term'] + $table3[$i]['credit_end_term'];
            $result[$i]['debit_end_all'] = $table1[$i]['debit_end_all'] + $table2[$i]['debit_end_all'] + $table3[$i]['debit_end_all'];
            $result[$i]['debit_end_term'] = $table1[$i]['debit_end_term'] + $table2[$i]['debit_end_term'] + $table3[$i]['debit_end_term'];
            $result[$i]['return_old_year'] = $table1[$i]['return_old_year'] + $table2[$i]['return_old_year'] + $table3[$i]['return_old_year'];
            $result[$i]['total1'] = $table1[$i]['total1'] + $table2[$i]['total1'] + $table3[$i]['total1'];
            $result[$i]['total2'] = $table1[$i]['total2'] + $table2[$i]['total2'] + $table3[$i]['total2'];
            $result[$i]['status'] = $table1[$i]['status'];
        }
        
        return $result;
    }  
    
    /**
     * Суммирование таблиц
     *
     * @param array $table1, array $table2, array $table3, array $table4
     * @return array
     */
    public function SummationFour(array $table1, array $table2, array $table3, array $table4): array
    {
        $result = [];
                
        for($i = 0 ; $i < count($table1) ; $i++){
            $result[$i]['ekr']['main'] = $table1[$i]['ekr']['main'];
            $result[$i]['ekr']['shared'] = $table1[$i]['ekr']['shared'];
            $result[$i]['ekr']['title'] = $table1[$i]['ekr']['title'];
            $result[$i]['ekr']['ekr'] = $table1[$i]['ekr']['ekr'];
            $result[$i]['lbo'] = $table1[$i]['lbo'] + $table2[$i]['lbo'] + $table3[$i]['lbo'] + $table4[$i]['lbo'];
            $result[$i]['prepaid'] = $table1[$i]['prepaid'] + $table2[$i]['prepaid'] + $table3[$i]['prepaid'] + $table4[$i]['prepaid'];
            $result[$i]['credit_year_all'] = $table1[$i]['credit_year_all'] + $table2[$i]['credit_year_all'] + $table3[$i]['credit_year_all'] + $table4[$i]['credit_year_all'];
            $result[$i]['credit_year_term'] = $table1[$i]['credit_year_term'] + $table2[$i]['credit_year_term'] + $table3[$i]['credit_year_term'] + $table4[$i]['credit_year_term'];
            $result[$i]['debit_year_all'] = $table1[$i]['debit_year_all'] + $table2[$i]['debit_year_all'] + $table3[$i]['debit_year_all'] + $table4[$i]['debit_year_all'];
            $result[$i]['debit_year_term'] = $table1[$i]['debit_year_term'] + $table2[$i]['debit_year_term'] + $table3[$i]['debit_year_term'] + $table4[$i]['debit_year_term'];
            $result[$i]['fact_all'] = $table1[$i]['fact_all'] + $table2[$i]['fact_all'] + $table3[$i]['fact_all'] + $table4[$i]['fact_all'];
            $result[$i]['fact_mounth'] = $table1[$i]['fact_mounth'] + $table2[$i]['fact_mounth'] + $table3[$i]['fact_mounth'] + $table4[$i]['fact_mounth'];
            $result[$i]['kassa_all'] = $table1[$i]['kassa_all'] + $table2[$i]['kassa_all'] + $table3[$i]['kassa_all'] + $table4[$i]['kassa_all'];
            $result[$i]['kassa_mounth'] = $table1[$i]['kassa_mounth'] + $table2[$i]['kassa_mounth'] + $table3[$i]['kassa_mounth'] + $table4[$i]['kassa_mounth'];
            $result[$i]['credit_end_all'] = $table1[$i]['credit_end_all'] + $table2[$i]['credit_end_all'] + $table3[$i]['credit_end_all'] + $table4[$i]['credit_end_all'];
            $result[$i]['credit_end_term'] = $table1[$i]['credit_end_term'] + $table2[$i]['credit_end_term'] + $table3[$i]['credit_end_term'] + $table4[$i]['credit_end_term'];
            $result[$i]['debit_end_all'] = $table1[$i]['debit_end_all'] + $table2[$i]['debit_end_all'] + $table3[$i]['debit_end_all'] + $table4[$i]['debit_end_all'];
            $result[$i]['debit_end_term'] = $table1[$i]['debit_end_term'] + $table2[$i]['debit_end_term'] + $table3[$i]['debit_end_term'] + $table4[$i]['debit_end_term'];
            $result[$i]['return_old_year'] = $table1[$i]['return_old_year'] + $table2[$i]['return_old_year'] + $table3[$i]['return_old_year'] + $table4[$i]['return_old_year'];
            $result[$i]['total1'] = $table1[$i]['total1'] + $table2[$i]['total1'] + $table3[$i]['total1'] + $table4[$i]['total1'];
            $result[$i]['total2'] = $table1[$i]['total2'] + $table2[$i]['total2'] + $table3[$i]['total2'] + $table4[$i]['total2'];
            $result[$i]['status'] = $table1[$i]['status'];
        }
        
        return $result;
    } 
    
    /**
     * Суммирование таблиц
     *
     * @param array $table1, array $table2, array $table3, array $table4, array $table5
     * @return array
     */
    public function SummationFive(array $table1, array $table2, array $table3, array $table4, array $table5): array
    {
        $result = [];
                
        for($i = 0 ; $i < count($table1) ; $i++){
            $result[$i]['ekr']['main'] = $table1[$i]['ekr']['main'];
            $result[$i]['ekr']['shared'] = $table1[$i]['ekr']['shared'];
            $result[$i]['ekr']['title'] = $table1[$i]['ekr']['title'];
            $result[$i]['ekr']['ekr'] = $table1[$i]['ekr']['ekr'];
            $result[$i]['lbo'] = $table1[$i]['lbo'] + $table2[$i]['lbo'] + $table3[$i]['lbo'] + $table4[$i]['lbo'] + $table5[$i]['lbo'];
            $result[$i]['prepaid'] = $table1[$i]['prepaid'] + $table2[$i]['prepaid'] + $table3[$i]['prepaid'] + $table4[$i]['prepaid'] + $table5[$i]['prepaid'];
            $result[$i]['credit_year_all'] = $table1[$i]['credit_year_all'] + $table2[$i]['credit_year_all'] + $table3[$i]['credit_year_all'] + $table4[$i]['credit_year_all'] + $table5[$i]['credit_year_all'];
            $result[$i]['credit_year_term'] = $table1[$i]['credit_year_term'] + $table2[$i]['credit_year_term'] + $table3[$i]['credit_year_term'] + $table4[$i]['credit_year_term'] + $table5[$i]['credit_year_term'];
            $result[$i]['debit_year_all'] = $table1[$i]['debit_year_all'] + $table2[$i]['debit_year_all'] + $table3[$i]['debit_year_all'] + $table4[$i]['debit_year_all'] + $table5[$i]['debit_year_all'];
            $result[$i]['debit_year_term'] = $table1[$i]['debit_year_term'] + $table2[$i]['debit_year_term'] + $table3[$i]['debit_year_term'] + $table4[$i]['debit_year_term'] + $table5[$i]['debit_year_term'];
            $result[$i]['fact_all'] = $table1[$i]['fact_all'] + $table2[$i]['fact_all'] + $table3[$i]['fact_all'] + $table4[$i]['fact_all'] + $table5[$i]['fact_all'];
            $result[$i]['fact_mounth'] = $table1[$i]['fact_mounth'] + $table2[$i]['fact_mounth'] + $table3[$i]['fact_mounth'] + $table4[$i]['fact_mounth'] + $table5[$i]['fact_mounth'];
            $result[$i]['kassa_all'] = $table1[$i]['kassa_all'] + $table2[$i]['kassa_all'] + $table3[$i]['kassa_all'] + $table4[$i]['kassa_all'] + $table5[$i]['kassa_all'];
            $result[$i]['kassa_mounth'] = $table1[$i]['kassa_mounth'] + $table2[$i]['kassa_mounth'] + $table3[$i]['kassa_mounth'] + $table4[$i]['kassa_mounth'] + $table5[$i]['kassa_mounth'];
            $result[$i]['credit_end_all'] = $table1[$i]['credit_end_all'] + $table2[$i]['credit_end_all'] + $table3[$i]['credit_end_all'] + $table4[$i]['credit_end_all'] + $table5[$i]['credit_end_all'];
            $result[$i]['credit_end_term'] = $table1[$i]['credit_end_term'] + $table2[$i]['credit_end_term'] + $table3[$i]['credit_end_term'] + $table4[$i]['credit_end_term'] + $table5[$i]['credit_end_term'];
            $result[$i]['debit_end_all'] = $table1[$i]['debit_end_all'] + $table2[$i]['debit_end_all'] + $table3[$i]['debit_end_all'] + $table4[$i]['debit_end_all'] + $table5[$i]['debit_end_all'];
            $result[$i]['debit_end_term'] = $table1[$i]['debit_end_term'] + $table2[$i]['debit_end_term'] + $table3[$i]['debit_end_term'] + $table4[$i]['debit_end_term'] + $table5[$i]['debit_end_term'];
            $result[$i]['return_old_year'] = $table1[$i]['return_old_year'] + $table2[$i]['return_old_year'] + $table3[$i]['return_old_year'] + $table4[$i]['return_old_year'] + $table5[$i]['return_old_year'];
            $result[$i]['total1'] = $table1[$i]['total1'] + $table2[$i]['total1'] + $table3[$i]['total1'] + $table4[$i]['total1'] + $table5[$i]['total1'];
            $result[$i]['total2'] = $table1[$i]['total2'] + $table2[$i]['total2'] + $table3[$i]['total2'] + $table4[$i]['total2'] + $table5[$i]['total2'];
            $result[$i]['status'] = $table1[$i]['status'];
        }
        
        return $result;
    } 

}
