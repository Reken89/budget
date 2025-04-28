<?php

namespace App\Structure\Count25Section\User\Exports;

// Для вывода с использованием Blade
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
  
class ExportTable implements FromView
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
        return view('count25.xlsx.user', ['info' => session('info')]);
    }
}

