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
        $result = [];

        //Цикл, который просмотрит 2000 строк XML файла
        for ($i = 0; $i < 3000; $i++) {
            //Разбиваем XML на строки
            $helper = fgets($file);

            //Делим полученные строки на массив
            $result = explode("\" ", $helper);

            //Получаем из массива нужные нам значения
            if ($result[0] == true){    

                $inn = preg_replace("/[^,.0-9]/", '', $result[2]);
                //Выполняем проверку, если ИНН равно 10 символов (цифр)
                if (iconv_strlen($inn) == 10 && ctype_digit($inn)){
                    $title = substr($result[6],17);
                    $title = str_replace("&quot;", "", $title);
                    $sum = preg_replace("/[^,.0-9]/", '', $result[8]);
                    //$inn = substr($result[2],12,10);
                    //$kbk = substr($result[3],8,20);
                    //$adb = substr($result[1],14,10);
                    $mounth = preg_replace("/[^,.0-9]/", '', $result[0]);
                    $mounth = substr($mounth,4,2);
                    $inn = preg_replace("/[^,.0-9]/", '', $result[2]);
                    $kbk = preg_replace("/[^,.0-9]/", '', $result[3]);
                    $adb = preg_replace("/[^,.0-9]/", '', $result[1]);

                    $finish = Tax::insert([
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

