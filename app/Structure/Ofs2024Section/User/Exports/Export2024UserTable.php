<?php

namespace App\Structure\Ofs2024Section\User\Exports;

// Для вывода с использованием Blade
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
  
class Export2024UserTable implements FromView
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
        $info = session('table');

        return view('ofs2024.table.excel', ['info' => $info]);
    }
}


