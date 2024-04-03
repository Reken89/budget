<?php

namespace App\Structure\DeloSection\User\Exports;

// Для вывода с использованием Blade
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
  
class ExportTable implements FromView
{    
     /**
     * Экспорт с использованием шаблонизатора Blade
     * Выполняет экспорт таблицы в xlsx
     *
     * @param
     * @return view
     */
    public function view(): View
    {
        $table = session('table');

        return view('delo.export', ['table' => $table]);
    }
}
