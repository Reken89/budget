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
            <a>Значение при делении суммы на объем, должно соответствовать диапазону тарифа</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица Коммунальные услуги</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div>

@php
    $tarrifs = $info['tarrifs'];
    $totals = $info['total'];
    $values = $info['result'][0]['communal'];
    
    $mounth = [
    "Месяц", "Январь", "Февраль", "Март",
    "Апрель", "Май", "Июнь", "Июль",
    "Август", "Сентябрь", "Октябрь",
    "Ноябрь", "Декабрь"
    ];
@endphp

</br>

<table class="freeze-table" width="700px">
    <thead>
        <tr>
            <th style="min-width: 100px; width: 100px;" class="col-id-no fixed-header">Месяц</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Теплоснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Водоотведение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Негативное воздействие</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Водоснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Электроснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Вывоз мусора</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Утилизация ТБО</th>
            <th style="min-width: 100px; width: 100px;" rowspan="2">ИТОГО</th>
            <th style="min-width: 100px; width: 100px;" rowspan="2"></th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td class="col-id-no" scope="row"></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td></td>
            <td></td>
        </tr>
        
@foreach ($values as $value)
    @if ($value['status'] == 1)
    <tr>
        <input type="hidden" class="id" value="{{ $value['id'] }}">
        <td class="col-id-no" scope="row"><b>{{ $mounth[$value['mounth']] }}</b></td>
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
        <td><input type=button class="button" id='btn_one' value='Изменить'></td>
    </tr>
    @elseif ($value['status'] == 2)

    <tr>
        <input type="hidden" class="id" value="{{ $value['id'] }}">
        <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
        <td class="col-id-no" scope="row"><b>{{ $mounth[$value['mounth']] }}</b></td>
        <td><input type="text" class="heat-volume" value="{{ number_format($value['heat-volume'], 3, ',', ' ') }}"></td>
        <td><input type="text" class="heat-sum" value="{{ number_format($value['heat-sum'], 2, ',', ' ') }}"></td>
        <td><input type="text" class="drainage-volume" value="{{ number_format($value['drainage-volume'], 3, ',', ' ') }}"></td>
        <td><input type="text" class="drainage-sum" value="{{ number_format($value['drainage-sum'], 2, ',', ' ') }}"></td>
        <td><input type="text" class="negative-volume" value="{{ number_format($value['negative-volume'], 3, ',', ' ') }}"></td>
        <td><input type="text" class="negative-sum" value="{{ number_format($value['negative-sum'], 2, ',', ' ') }}"></td>
        <td><input type="text" class="water-volume" value="{{ number_format($value['water-volume'], 3, ',', ' ') }}"></td>
        <td><input type="text" class="water-sum" value="{{ number_format($value['water-sum'], 2, ',', ' ') }}"></td>
        <td><input type="text" class="power-volume" value="{{ number_format($value['power-volume'], 3, ',', ' ') }}"></td>
        <td><input type="text" class="power-sum" value="{{ number_format($value['power-sum'], 2, ',', ' ') }}"></td>
        <td><input type="text" class="trash-volume" value="{{ number_format($value['trash-volume'], 3, ',', ' ') }}"></td>
        <td><input type="text" class="trash-sum" value="{{ number_format($value['trash-sum'], 2, ',', ' ') }}"></td>
        <td><input type="text" class="disposal-volume" value="{{ number_format($value['disposal-volume'], 3, ',', ' ') }}"></td>
        <td><input type="text" class="disposal-sum" value="{{ number_format($value['disposal-sum'], 2, ',', ' ') }}"></td>
        <td>{{ number_format($value['total'], 2, ',', ' ') }}</td>
        <td><input type=button class="button" id='btn_two' value='Отправить'></td>
    </tr>

    
    @elseif ($value['status'] == 3)
    <tr>
        <td class="col-id-no" scope="row"><b>{{ $mounth[$value['mounth']] }}</b></td>
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
        <td></td>
    </tr>

    @endif
@endforeach 

@foreach ($totals as $total)
    <tr>
        <td class="col-id-no" scope="row"><b>ИТОГО</b></td>
        <td><b>{{ number_format($total['heat_volume'], 3, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['heat_sum'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['drainage_volume'], 3, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['drainage_sum'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['negative_volume'], 3, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['negative_sum'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['water_volume'], 3, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['water_sum'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['power_volume'], 3, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['power_sum'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['trash_volume'], 3, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['trash_sum'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['disposal_volume'], 3, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['disposal_sum'], 2, ',', ' ') }}</b></td>
        <td><b>{{ number_format($total['total'], 2, ',', ' ') }}</b></td>
        <td></td>
    </tr>    
@endforeach

    </tbody>
</table>

<br>
<p></p>
<table class="freeze-table" width="700px">
    <thead>
        <tr>
            <th style="min-width: 100px; width: 100px;" class="col-id-no fixed-header">Месяц</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Теплоснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Водоотведение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Негативное воздействие</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Водоснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Электроснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Вывоз мусора</th>
        </tr>
    </thead>    
    <tbody>
        <tr>
            <td class="col-id-no" scope="row"></td>
            <td><b>Тариф №1</b></td><td><b>Тариф №2</b></td>
            <td><b>Тариф №1</b></td><td><b>Тариф №2</b></td>
            <td><b>Тариф №1</b></td><td><b>Тариф №2</b></td>
            <td><b>Тариф №1</b></td><td><b>Тариф №2</b></td>
            <td><b>Тариф №1</b></td><td><b>Тариф №2</b></td>
            <td><b>Тариф №1</b></td><td><b>Тариф №2</b></td>
        </tr>
        @foreach ($tarrifs as $tarif)
            <tr>
                <td class="col-id-no" scope="row"><b>{{ $mounth[$tarif['mounth']] }}</b></td>
                <td>{{ number_format($tarif['heat-one'], 3, ',', ' ') }}</td>
                <td>{{ number_format($tarif['heat-two'], 3, ',', ' ') }}</td>
                <td>{{ number_format($tarif['drainage-one'], 3, ',', ' ') }}</td>
                <td>{{ number_format($tarif['drainage-two'], 3, ',', ' ') }}</td>
                <td>{{ number_format($tarif['negative-one'], 3, ',', ' ') }}</td>
                <td>{{ number_format($tarif['negative-two'], 3, ',', ' ') }}</td>
                <td>{{ number_format($tarif['water-one'], 3, ',', ' ') }}</td>
                <td>{{ number_format($tarif['water-two'], 3, ',', ' ') }}</td>
                <td>{{ number_format($tarif['power-one'], 3, ',', ' ') }}</td>
                <td>{{ number_format($tarif['power-two'], 3, ',', ' ') }}</td>
                <td>{{ number_format($tarif['trash-one'], 3, ',', ' ') }}</td>
                <td>{{ number_format($tarif['trash-two'], 3, ',', ' ') }}</td>
            </tr>
        @endforeach
        
    </tbody> 
</table>
