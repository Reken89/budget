@if ($info['variant'] == "svod")
<table>             
        <thead>
            <tr>
                <th style="min-width: 200px; width: 200px;">Учреждение</th>
                <th style="min-width: 200px; width: 200px;" colspan="2">Теплоснабжение</th>
                <th style="min-width: 200px; width: 200px;" colspan="2">Водоснабжение</th>
                <th style="min-width: 200px; width: 200px;" colspan="2">Водоотведение</th>
                <th style="min-width: 200px; width: 200px;" colspan="2">Электроснабжение</th>
                <th style="min-width: 200px; width: 200px;" colspan="2">Вывоз мусора</th>
                <th style="min-width: 200px; width: 200px;" colspan="2">Негативное воздействие</th>
                <th style="min-width: 200px; width: 200px;">Итог сумма</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td>Объём</td><td>Сумма</td><td>Объём</td><td>Сумма</td>
                <td>Объём</td><td>Сумма</td><td>Объём</td><td>Сумма</td>
                <td>Объём</td><td>Сумма</td><td>Объём</td><td>Сумма</td>
                <td></td>
            </tr>

            @php
                $quantity = count($info['communal']['heat']);
            @endphp
            
            @for ($n = 0; $n < $quantity; $n++)
            <tr>
                <td>{{ $info['communal']['heat'][$n]['user']['name'] }}</td>
                <td>{{ $info['communal']['heat'][$n]['volume_year'] }}</td>
                <td>{{ $info['communal']['heat'][$n]['sum_year'] }}</td>
                <td>{{ $info['communal']['water'][$n]['volume_year'] }}</td>
                <td>{{ $info['communal']['water'][$n]['sum_year'] }}</td>
                <td>{{ $info['communal']['drainage'][$n]['volume_year'] }}</td>
                <td>{{ $info['communal']['drainage'][$n]['sum_year'] }}</td>
                <td>{{ $info['communal']['energy'][$n]['volume_year'] }}</td>
                <td>{{ $info['communal']['energy'][$n]['sum_year'] }}</td>
                <td>{{ $info['communal']['trash'][$n]['volume_year'] }}</td>
                <td>{{ $info['communal']['trash'][$n]['sum_year'] }}</td>
                <td>{{ $info['communal']['negative'][$n]['volume_year'] }}</td>
                <td>{{ $info['communal']['negative'][$n]['sum_year'] }}</td>
                <td>{{ $info['communal']['total'][$n]['sum'] }}</td>
            </tr>
            @endfor

            <tr>
                <td>ИТОГО</td>
                <td>{{ $info['total']['heat']['volume_year'] }}</td>
                <td>{{ $info['total']['heat']['sum_year'] }}</td>
                <td>{{ $info['total']['water']['volume_year'] }}</td>
                <td>{{ $info['total']['water']['sum_year'] }}</td>
                <td>{{ $info['total']['drainage']['volume_year'] }}</td>
                <td>{{ $info['total']['drainage']['sum_year'] }}</td>
                <td>{{ $info['total']['energy']['volume_year'] }}</td>
                <td>{{ $info['total']['energy']['sum_year'] }}</td>
                <td>{{ $info['total']['trash']['volume_year'] }}</td>
                <td>{{ $info['total']['trash']['sum_year'] }}</td>
                <td>{{ $info['total']['negative']['volume_year'] }}</td>
                <td>{{ $info['total']['negative']['sum_year'] }}</td>
                <td>{{ $info['total']['total']['sum'] }}</td>
            </tr>
        </tbody>
    </table>

@else
<table>
    <thead>
        <tr>
            <th style="min-width: 150px; width: 150px;">Учреждение</th>
            <th style="min-width: 150px; width: 150px;">Объем 1-полугодие</th>
            <th style="min-width: 150px; width: 150px;">Сумма 1-полугодие</th>
            <th style="min-width: 150px; width: 150px;">Объем 2-полугодие</th>
            <th style="min-width: 150px; width: 150px;">Сумма 2-полугодие</th>
            <th style="min-width: 150px; width: 150px;">Объем за год</th>
            <th style="min-width: 150px; width: 150px;">Сумма за год</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($info['communal'] as $value)
            <tr>
                <td>{{ $value['user']['name'] }}</td>
                <td>{{ $value['volume_one'] }}</td>
                <td>{{ $value['sum_one'] }}</td>
                <td>{{ $value['volume_two'] }}</td>
                <td>{{ $value['sum_two'] }}</td>
                <td>{{ $value['volume_year'] }}</td>
                <td>{{ $value['sum_year'] }}</td>
            </tr>
        @endforeach
    </tbody>
    
    <tr>
        <td><b>ИТОГ</b></td>
        <td><b>{{ $info['total']['volume_one'] }}</b></td>
        <td><b>{{ $info['total']['sum_one'] }}</b></td>
        <td><b>{{ $info['total']['volume_two'] }}</b></td>
        <td><b>{{ $info['total']['sum_two'] }}</b></td>
        <td><b>{{ $info['total']['volume_year'] }}</b></td>
        <td><b>{{ $info['total']['sum_year'] }}</b></td>
    </tr>
</table> 
@endif
