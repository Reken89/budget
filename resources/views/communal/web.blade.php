<!doctype html>
@include('layouts.main')
<html lang="en">
    
@php   
    $mounth = [
    "Месяц", "Январь", "Февраль", "Март",
    "Апрель", "Май", "Июнь", "Июль",
    "Август", "Сентябрь", "Октябрь",
    "Ноябрь", "Декабрь"
    ];
@endphp    

<head>
  <meta charset="utf-8">
  <title>WEB форма</title>
</head>

<body>

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
            <th style="min-width: 100px; width: 100px;" rowspan="2">ИТОГО</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td class="col-id-no" scope="row"><b>{{ $info['result']['communal'][0]['year'] }} год</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td></td>
        </tr>
        
        @foreach ($info['result']['communal'] as $value)
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
                <td>{{ number_format($value['total'], 2, ',', ' ') }}</td>
            </tr>
        @endforeach
        
        <tr>
            <td class="col-id-no" scope="row"><b>ИТОГО</b></td>
            <td><b>{{ number_format($info['total']['heat_volume'], 3, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['heat_sum'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['drainage_volume'], 3, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['drainage_sum'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['negative_volume'], 3, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['negative_sum'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['water_volume'], 3, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['water_sum'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['power_volume'], 3, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['power_sum'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['trash_volume'], 3, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['trash_sum'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['total']['total'], 2, ',', ' ') }}</b></td>
        </tr>       
    </tbody> 
</table>      
         
  
</body>
</html>    
