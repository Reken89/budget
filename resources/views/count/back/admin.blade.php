<head>
    <meta charset="utf-8">
    <title>Таблица Смета</title>
</head>

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Выберите параметры для отображения таблицы</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица Смета</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div> 

<form id="ofs" method="get"> 
<h3>Выберите год</h3> 
<div>
    <label class="checkbox style-f">
        <input type="checkbox" name="year" value="2024">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">2024</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="year" value="2025">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">2025</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="year" value="2026">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">2026</div>
    </label>                        
</div>

</br>
<h3>Выберите раздел</h3>                                   
<div>                         
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="1">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ОМСУ</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="2">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ЦБ и Закупки</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="3">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Детские сады</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="4">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ДХШ и ДМШ</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="5">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ВСОШ</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="6">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">КУМС</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="variant" value="7">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ИТОГО</div>
    </label>
</div>

</br>
<input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_one" class="button5" value="Сформировать таблицу"> 
</form>  

@php
    //var_dump($info);
    $number = (count($info['glava']));
@endphp

</br>
<table class="freeze-table" width="700px">
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ ФУ</th>
            <th style="min-width: 200px; width: 200px;">Глава</th>
            <th style="min-width: 200px; width: 200px;">Администрация КГО</th>
            <th style="min-width: 200px; width: 200px;">Совет КГО</th>
            <th style="min-width: 200px; width: 200px;">КСО Костомукша</th>
            <th style="min-width: 200px; width: 200px;">ИТОГ ЦБ</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) Глава</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) Администрация КГО</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) Совет КГО</th>
            <th style="min-width: 200px; width: 200px;">(ЦБ) КСО Костомукша</th>
        </tr>
    </thead>
    
    <tbody>
    
    @for ($n = 1; $n <= 44; $n++)
        @for ($numb = 0; $numb < $number; $numb++)
            @if ($info['glava'][$numb]['ekr']['main'] == 'Yes' && $info['glava'][$numb]['ekr']['number'] == $n)
                <tr>
                    <td class="col-id-no" scope="row"><b>{{ $info['glava'][$numb]['ekr']['title'] }}</b></td>
                    <td><b>{{ $info['glava'][$numb]['ekr']['ekr'] }}</b></td>
                    <td><b>{{ $info['glava'][$numb]['sum_fu'] + $info['adm'][$numb]['sum_fu'] + $info['sovet'][$numb]['sum_fu'] + $info['kso'][$numb]['sum_fu'] }}</b></td>                   
                    <td><b>{{ $info['glava'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['adm'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['sovet'][$numb]['sum_fu'] }}</b></td>
                    <td><b>{{ $info['kso'][$numb]['sum_fu'] }}</b></td>
                    
                    <td><b>{{ $info['glava'][$numb]['sum_cb'] + $info['adm'][$numb]['sum_cb'] + $info['sovet'][$numb]['sum_cb'] + $info['kso'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['glava'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['adm'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['sovet'][$numb]['sum_cb'] }}</b></td>
                    <td><b>{{ $info['kso'][$numb]['sum_cb'] }}</b></td>
                </tr>
            @endif
            
            @if ($info['glava'][$numb]['ekr']['main'] == 'No' && $info['glava'][$numb]['ekr']['number'] == $n)
                <tr>
                    <td class="col-id-no" scope="row">{{ $info['glava'][$numb]['ekr']['title'] }}</td>
                    <td>{{ $info['glava'][$numb]['ekr']['ekr'] }}</td>
                    <td>{{ $info['glava'][$numb]['sum_fu'] + $info['adm'][$numb]['sum_fu'] + $info['sovet'][$numb]['sum_fu'] + $info['kso'][$numb]['sum_fu'] }}</td>
                    <td><input type="hidden" class="id" value="{{ $info['glava'][$numb]['id'] }}">
                        <input type="text" class="sum_fu" value="{{ number_format($info['glava'][$numb]['sum_fu'], 2, ',', ' ') }}"></td>  
                    <td><input type="hidden" class="id" value="{{ $info['adm'][$numb]['id'] }}">
                        <input type="text" class="sum_fu" value="{{ number_format($info['adm'][$numb]['sum_fu'], 2, ',', ' ') }}"></td> 
                    <td><input type="hidden" class="id" value="{{ $info['sovet'][$numb]['id'] }}">
                        <input type="text" class="sum_fu" value="{{ number_format($info['sovet'][$numb]['sum_fu'], 2, ',', ' ') }}"></td> 
                    <td><input type="hidden" class="id" value="{{ $info['kso'][$numb]['id'] }}">
                        <input type="text" class="sum_fu" value="{{ number_format($info['kso'][$numb]['sum_fu'], 2, ',', ' ') }}"></td> 
                    
                    <td>{{ $info['glava'][$numb]['sum_cb'] + $info['adm'][$numb]['sum_cb'] + $info['sovet'][$numb]['sum_cb'] + $info['kso'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['glava'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['adm'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['sovet'][$numb]['sum_cb'] }}</td>
                    <td>{{ $info['kso'][$numb]['sum_cb'] }}</td>
                </tr>
            @endif
        @endfor  
    @endfor
        
    </tbody>
</table>