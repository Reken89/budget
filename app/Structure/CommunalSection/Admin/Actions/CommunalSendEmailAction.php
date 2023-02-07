<?php

namespace App\Structure\CommunalSection\Admin\Actions;

use App\Core\Actions\BaseAction;
use App\Structure\CommunalSection\User\Models\Communal;

class CommunalSendEmailAction extends BaseAction
{
    /**
     * Получаем список учреждений не заполнивших информацию
     * Рассылаем этим учреждениям email уведомления
     *
     * @param array $year, array $mounth
     * @return
     */
    public function run(array $year, array $mounth)
    {   
        $info = Communal::select('user_id')
            ->with(['user:id,email'])     
            ->where('year', $year[0])
            ->where('mounth', $mounth[0])
            ->where('status', 2)    
            ->get()
            ->toArray();
        
        foreach ($info as $inf) {
            mail($inf['user']['email'], "Портал коммунальные услуги", "Вы не заполнили информацию на портале коммунальные услуги","FROM: portal@kostamail.ru \r\n");  
        }
        
        return $info;
    }
}
