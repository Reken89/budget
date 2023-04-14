<?php

namespace App\Structure\TaxSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\TaxSection\Admin\Models\Tax;

class TaxUploadAction extends BaseAction
{
    /**
     * Выполняем запись из XML в таблицу taxes (ЕНП)
     *
     * @param info
     * @return bool
     */
    public function run($info): bool
    {   
        //Открываем полученный XML файл
        $file = fopen($info, 'r');
       
        //examin содержит строчку "2023-"
        //Если строчка присутствует в строке XML файла, то она будет считываться
        //Если в строчке XML файла нет "2023-", то считываться она не будет
        $examin = "2023-";
        $result = [];

        //Цикл, который просмотрит 2000 строк XML файла
        for ($i = 0; $i < 2000; $i++) {
            //Если строчка содержит символы "2023-"
            //Тогда выполняем чтение
            if(strpos(fgets($file), $examin) !== false){
                //Разбиваем XML на строки
                $helper = fgets($file);
                
                //Делим полученные строки на массив
                $result = explode("\" ", $helper);
                
                //Получаем из массива нужные нам значения
                if ($result[0] == true && $result[6] == true && $result[8] == true && $result[2] == true && $result[3] == true && $result[1] == true){
                    $mounth = substr($result[0],43,2);
                    $title = substr($result[6],17);
                    $title = str_replace("&quot;", "", $title);
                    $sum = preg_replace("/[^,.0-9]/", '', $result[8]);
                    $inn = substr($result[2],12,10);
                    $kbk = substr($result[3],8,20);
                    $adb = substr($result[1],14,10);

                    $finish = Tax::create([
                        'inn'     => $inn,
                        'title'   => $title,
                        'sum'     => $sum,
                        'kbk'     => $kbk,
                        'inn_adb' => $adb,
                        'mounth'  => $mounth,
                        'year'    => 2023,
                    ]);
                }
            }
        }
        fclose($file);

        return $finish == true ? true : false;

    }
}

