<head>
    <meta charset="utf-8">
    <title>Таблица коммунальных услуг</title>
</head>

@include('layouts.main')

@php
    $values = $info[0]['communal'];
@endphp

{{ var_dump($info) }}
<table class="freeze-table" width="700px">
    <thead>
        <tr>
            <th style="min-width: 100px; width: 100px;" rowspan="2">Месяц</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Теплоснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Водоотведение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Негативное воздействие</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Водоснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Электроснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Вывоз мусора</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Утилизация ТБО</th>
            <th style="min-width: 100px; width: 100px;" rowspan="2">ИТОГ</th>
            <th style="min-width: 100px; width: 100px;" rowspan="2"></th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td></td>
            <td>Объем</td><td>Сумма</td>
            <td>Объем</td><td>Сумма</td>
            <td>Объем</td><td>Сумма</td>
            <td>Объем</td><td>Сумма</td>
            <td>Объем</td><td>Сумма</td>
            <td>Объем</td><td>Сумма</td>
            <td>Объем</td><td>Сумма</td>
            <td></td>
            <td></td>
        </tr>
        
@foreach ($values as $value)
    @if ($value['status'] == 1)
    <tr>
        <td>{{ $value['mounth'] }}</td>
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
        <td><input type=button id='btn_one' value='Изменить'></td>
    </tr>
    @elseif ($value['status'] == 2)

    @elseif ($value['status'] == 3)

    @endif
@endforeach 

    </tbody>
</table>   
