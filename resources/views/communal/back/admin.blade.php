<head>
    <meta charset="utf-8">
    <title>Таблица коммунальных услуг</title>
</head>

@php
    $total = $info['total'][0];
    $year = $info['year'];
    $mounth = $info['mounth'];
@endphp

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Выберите год и месяц для отображения таблицы</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица Коммунальные услуги</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div>

<form id="communal" method="get"> 

<h3>Выберите год </h3>                 
    <div class="size_block">                  
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2018">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2018</div>
        </label>                 
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2019">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2019</div>
        </label>                  
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2020">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2020</div>
        </label>                  
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2021">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2021</div>
        </label>                 
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2022">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2022</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2023">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2023</div>
        </label> 
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2024">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2024</div>
        </label> 
    </div>
                         
<h3>Выберите месяц</h3>                                   
<div>                         
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="1">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Январь</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="2">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Февраль</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="3">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Март</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="4">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Апрель</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="5">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Май</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="6">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Июнь</div>
    </label>
    </br>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="7">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Июль</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="8">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Август</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="9">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Сентябрь</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="10">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Октябрь</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="11">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Ноябрь</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="12">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Декабрь</div>
    </label>                            
</div>
                         
<p><input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_one" class="button5" value="Сформировать таблицу" /></p>                     
</form>

<form action="/budget/public/admin/communal/export" method="get">
    <button type="submit" style="width:250px;height:25px" class="button5">Выгрузка в EXCEL</button>
</form>

</br>
<input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_three" class="button5" value="Отправить email"> 
</br>

@if ($info['variant'] == "one")
</br>
<form id="tarrifs" method="patch"> 
    <input type='hidden' name='year' value="{{ $year[0] }}">
    <input type='hidden' name='mounth' value="{{ $mounth[0] }}">
    <input type='hidden' name='id' value="{{ $info['tarrif']['id'] }}">
    <input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_four" class="button5" value="Синхронизация тарифов"> 
</form>    
@endif

</br>
<div class="shadowbox">
    <p>Год: @foreach ($year as $y) {{$y}}, @endforeach</p>
    <p>Месяц: @foreach ($mounth as $m) {{$m}}, @endforeach</p>
</div>

</br>

<table class="freeze-table" width="700px">
    <thead>
        <tr>
            <th style="min-width: 100px; width: 100px;" class="col-id-no fixed-header">Учреждение</th>
            <th style="min-width: 100px; width: 100px;" rowspan="2"></th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Теплоснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Водоотведение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Негативное воздействие</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Водоснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Электроснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Вывоз мусора</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Утилизация ТБО</th>
            <th style="min-width: 100px; width: 100px;" rowspan="2">ИТОГО</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td class="col-id-no" scope="row"></td>
            <td></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td></td>
        </tr>
        
        @if ($info['variant'] == "one")
        
            @php
                $tarrif = $info['tarrif'];
            @endphp
            <tr>
                <input type="hidden" class="id" value="{{ $tarrif['id'] }}">
                <td class="col-id-no" scope="row"></td>
                <td></td>
                <td><input type="text" class="heat_one" value="{{ number_format($tarrif['heat-one'], 3, ',', ' ') }}"></td>
                <td><input type="text" class="heat_two" value="{{ number_format($tarrif['heat-two'], 3, ',', ' ') }}"></td>
                <td><input type="text" class="drainage_one" value="{{ number_format($tarrif['drainage-one'], 3, ',', ' ') }}"></td>
                <td><input type="text" class="drainage_two" value="{{ number_format($tarrif['drainage-two'], 3, ',', ' ') }}"></td>
                <td><input type="text" class="negative_one" value="{{ number_format($tarrif['negative-one'], 3, ',', ' ') }}"></td>
                <td><input type="text" class="negative_two" value="{{ number_format($tarrif['negative-two'], 3, ',', ' ') }}"></td>
                <td><input type="text" class="water_one" value="{{ number_format($tarrif['water-one'], 3, ',', ' ') }}"></td>
                <td><input type="text" class="water_two" value="{{ number_format($tarrif['water-two'], 3, ',', ' ') }}"></td>
                <td><input type="text" class="power_one" value="{{ number_format($tarrif['power-one'], 3, ',', ' ') }}"></td>
                <td><input type="text" class="power_two" value="{{ number_format($tarrif['power-two'], 3, ',', ' ') }}"></td>
                <td><input type="text" class="trash_one" value="{{ number_format($tarrif['trash-one'], 3, ',', ' ') }}"></td>
                <td><input type="text" class="trash_two" value="{{ number_format($tarrif['trash-two'], 3, ',', ' ') }}"></td>
                <td></td>
                <td></td>
                <td></td>               
            </tr>
        
            @foreach ($info['result'] as $value)
                @if ($value['status'] == "1")                
                    @php $color = "green"; @endphp                
                @elseif ($value['status'] == 2) 
                    @php $color = "darkred"; @endphp 
                @elseif ($value['status'] == 3) 
                    @php $color = "yellow"; @endphp 
                @endif
                
                <tr>
                    <input type="hidden" class="id" value="{{ $value['id'] }}">
                    <th class="col-id-no" bgcolor="{{ $color }}"><font color='white'>{{ $value['user']['name'] }}</font></th>
                    @if ($value['status'] == 3)
                        <td><input type=button class="button" id='btn_two' value='Изменить'></td>
                    @else
                        <td></td>
                    @endif
                    <td>{{ number_format($value['heat-volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['heat-sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['drainage-volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['drainage-sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['negative-volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['negative-sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['water-volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['water-sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['power-volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['power-sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['trash-volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['trash-sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['disposal-volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['disposal-sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['total'], 2, ',', ' ') }}</td>
                </tr>
               
            @endforeach             
        @elseif ($info['variant'] == "many")
            @foreach ($info['result'] as $value)
                <tr>
                    <td class="col-id-no" scope="row">{{ $value['user']['name'] }}</td>
                    <td></td>
                    <td>{{ number_format($value['heat_volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['heat_sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['drainage_volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['drainage_sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['negative_volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['negative_sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['water_volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['water_sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['power_volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['power_sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['trash_volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['trash_sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['disposal_volume'], 3, ',', ' ') }}</td>
                    <td>{{ number_format($value['disposal_sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['total'], 2, ',', ' ') }}</td>
                </tr>
            
            @endforeach
        @endif 
        
        <tr>
            <td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td></td>
            <td>{{ number_format($total['heat_volume'], 3, ',', ' ') }}</td>
            <td>{{ number_format($total['heat_sum'], 2, ',', ' ') }}</td>
            <td>{{ number_format($total['drainage_volume'], 3, ',', ' ') }}</td>
            <td>{{ number_format($total['drainage_sum'], 2, ',', ' ') }}</td>
            <td>{{ number_format($total['negative_volume'], 3, ',', ' ') }}</td>
            <td>{{ number_format($total['negative_sum'], 2, ',', ' ') }}</td>
            <td>{{ number_format($total['water_volume'], 3, ',', ' ') }}</td>
            <td>{{ number_format($total['water_sum'], 2, ',', ' ') }}</td>
            <td>{{ number_format($total['power_volume'], 3, ',', ' ') }}</td>
            <td>{{ number_format($total['power_sum'], 2, ',', ' ') }}</td>
            <td>{{ number_format($total['trash_volume'], 3, ',', ' ') }}</td>
            <td>{{ number_format($total['trash_sum'], 2, ',', ' ') }}</td>
            <td>{{ number_format($total['disposal_volume'], 3, ',', ' ') }}</td>
            <td>{{ number_format($total['disposal_sum'], 2, ',', ' ') }}</td>
            <td>{{ number_format($total['total'], 2, ',', ' ') }}</td>
        </tr>
        
    </tbody>
</table>    