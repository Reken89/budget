<?php

namespace App\Structure\Ofs24Section\User\Exports;

// Для вывода с использованием Blade
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
  
class Export24UserTable implements FromView
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

        return view('ofs24.exports.user', ['info' => $info]);
    }
}

