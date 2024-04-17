<?php

namespace App\Structure\Count24Section\Admin\Exports;

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
        return view('count24.exports.admin', ['info' => session('info')]);
    }
}