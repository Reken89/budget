<?php

namespace App\Structure\CountSection\User\Exports;

// Для вывода с использованием Blade
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
  
class ExportUserTable implements FromView
{    
     /**
     * Экспорт с использованием шаблонизатора Blade
     * Выполняет экспорт по заданным значениям
     *
     * @param 
     * @return view
     */
    public function view(): View
    {
        $info = session('info');

        return view('count.exports.user', ['info' => $info]);
    }
}
