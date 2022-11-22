<head>
    <meta charset="utf-8">
    <title>Таблица коммунальных услуг</title>
</head>

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
<p><b>Выберите год </b></p>                 
    <div class="size_block">                  
        <label class="container">
            <input type="checkbox" name="year" value="2018">
            <span class="checkmark">2018</span>
        </label>                 
        <label class="container">
            <input type="checkbox" name="year" value="2019">
            <span class="checkmark">2019</span>
        </label>                  
        <label class="container">
            <input type="checkbox" name="year" value="2020">
            <span class="checkmark">2020</span>
        </label>                  
        <label class="container">
            <input type="checkbox" name="year" value="2021">
            <span class="checkmark">2021</span>
        </label>                 
        <label class="container">
            <input type="checkbox" name="year" value="2022">
            <span class="checkmark">2022</span>
        </label>                  
    </div>
                         
<p><b>Выберите месяц</b></p>                                   
<div class="size_block">                         
    <label class="container">
        <input type="checkbox" name="mounth" value="1">
        <span class="checkmark">Январь</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="2">
        <span class="checkmark">Февраль</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="3">
        <span class="checkmark">Март</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="4">
        <span class="checkmark">Апрель</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="5">
        <span class="checkmark">Май</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="6">
        <span class="checkmark">Июнь</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="7">
        <span class="checkmark">Июль</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="8">
        <span class="checkmark">Август</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="9">
        <span class="checkmark">Сентябрь</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="10">
        <span class="checkmark">Октябрь</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="11">
        <span class="checkmark">Ноябрь</span>
    </label>
    <label class="container">
        <input type="checkbox" name="mounth" value="12">
        <span class="checkmark">Декабрь</span>
    </label>                            
</div>
                         
<p><input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_one" class="btn" value="Сформировать таблицу" /></p>                     
</form>

@php
    //var_dump($info);

@endphp

</br>

<table class="freeze-table" width="700px">
    <thead>
        <tr>
            <th style="min-width: 100px; width: 100px;" rowspan="2">Учреждение</th>
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
            <td></td>
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
                    <td bgcolor="{{ $color }}">{{ $value['user']['name'] }}</td>
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
                    <td>{{ $value['user']['name'] }}</td>
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
        
        @php
            $total = $info['total'][0];
        @endphp
        
        <tr>
            <td><b>ИТОГО</b></td>
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