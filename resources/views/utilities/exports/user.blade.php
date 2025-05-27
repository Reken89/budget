<table table class="table2">             
    <thead>
        <tr>
            <th style="min-width: 150px; width: 150px;">Месяц</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Теплоснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Водоотведение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Негативное воздействие</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Водоснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Электроснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Вывоз мусора</th>
            <th style="min-width: 150px; width: 150px;" rowspan="2">ИТОГО</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th><b>{{ $info['communals'][0]['year'] }} год</b></th>
            <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
            <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
            <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
            <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
            <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
            <td style="min-width: 150px; width: 150px;"><b>Объем</b></td><td style="min-width: 150px; width: 150px;"><b>Сумма</b></td>
            <td></td>
        </tr>
        @foreach ($info['communals'] as $value)
            <tr>
                <th><b>{{ $info['mounth'][$value['mounth']] }}</b></th>
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
            <th><b>ИТОГО</b></th>
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
