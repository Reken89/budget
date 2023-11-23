@php   
    $mounth = [
    "Месяц", "Январь", "Февраль", "Март",
    "Апрель", "Май", "Июнь", "Июль",
    "Август", "Сентябрь", "Октябрь",
    "Ноябрь", "Декабрь"
    ];
@endphp    

<table width="700px">
    <thead>
        <tr>
            <th style="min-width: 100px; width: 100px;" rowspan="2"><b>{{ $info['result']['communal'][0]['year'] }} год</b></th>
            <th style="min-width: 200px; width: 200px;" colspan="2"><b>Теплоснабжение</b></th>
            <th style="min-width: 200px; width: 200px;" colspan="2"><b>Водоотведение</b></th>
            <th style="min-width: 200px; width: 200px;" colspan="2"><b>Негативное воздействие</b></th>
            <th style="min-width: 200px; width: 200px;" colspan="2"><b>Водоснабжение</b>/th>
            <th style="min-width: 200px; width: 200px;" colspan="2"><b>Электроснабжение</b></th>
            <th style="min-width: 200px; width: 200px;" colspan="2"><b>Вывоз мусора</b></th>
            <th style="min-width: 100px; width: 100px;" rowspan="2"><b>ИТОГО</b></th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td>Объем</td><td>Сумма</td>
            <td>Объем</td><td>Сумма</td>
            <td>Объем</td><td>Сумма</td>
            <td>Объем</td><td>Сумма</td>
            <td>Объем</td><td>Сумма</td>
            <td>Объем</td><td>Сумма</td>
            <td></td>
        </tr>
        @foreach ($info['result']['communal'] as $value)
            <tr>
                <td><b>{{ $mounth[$value['mounth']] }}</b></td>
                <td>{{ $value['heat-volume'] }}</td>
                <td>{{ $value['heat-sum'] }}</td>
                <td>{{ $value['drainage-volume'] }}</td>
                <td>{{ $value['drainage-sum'] }}</td>
                <td>{{ $value['negative-volume'] }}</td>
                <td>{{ $value['negative-sum'] }}</td>
                <td>{{ $value['water-volume'] }}</td>
                <td>{{ $value['water-sum'] }}</td>
                <td>{{ $value['power-volume'] }}</td>
                <td>{{ $value['power-sum'] }}</td>
                <td>{{ $value['trash-volume'] }}</td>
                <td>{{ $value['trash-sum'] }}</td>
                <td>{{ $value['total'] }}</td>
            </tr>
        @endforeach             
        
        <tr>
            <td><b>ИТОГО</b></td>
            <td><b>{{ $info['total']['heat_volume'] }}</b></td>
            <td><b>{{ $info['total']['heat_sum'] }}</b></td>
            <td><b>{{ $info['total']['drainage_volume'] }}</b></td>
            <td><b>{{ $info['total']['drainage_sum'] }}</b></td>
            <td><b>{{ $info['total']['negative_volume'] }}</b></td>
            <td><b>{{ $info['total']['negative_sum'] }}</b></td>
            <td><b>{{ $info['total']['water_volume'] }}</b></td>
            <td><b>{{ $info['total']['water_sum'] }}</b></td>
            <td><b>{{ $info['total']['power_volume'] }}</b></td>
            <td><b>{{ $info['total']['power_sum'] }}</b></td>
            <td><b>{{ $info['total']['trash_volume'] }}</b></td>
            <td><b>{{ $info['total']['trash_sum'] }}</b></td>
            <td><b>{{ $info['total']['total'] }}</b></td>
        </tr>
        
    </tbody>
</table>  
