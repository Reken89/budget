<?php

namespace App\Structure\ForecastSection\Admin\Exports;

// Для вывода с использованием Blade
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
  
class ExportTable implements FromView
{    
     /**
     * Экспорт с использованием шаблонизатора Blade
     * Выполняет экспорт по заданным параметрам
     *
     * @param 
     * @return view
     */
    public function view(): View
    {
        $info = session('info');

        return view('forecast.exports.forecast', ['info' => $info]);
    }
}
