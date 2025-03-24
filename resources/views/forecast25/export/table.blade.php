@php
    $date = date('Y-m-d');
@endphp
@if (count($info['forecast']) < 20)
    <p>Таблица {{ $info['calculator']['service'] }}</p>
    <p>Таблица выгружена {{ $date }}</p>
    <br>
    <table>
        <thead>
            <tr>
                <th style="min-width: 270px; width: 270px;"><b>Учреждение</b></th>
                <th style="min-width: 150px; width: 150px;"><b>Объем 1-полугодие</b></th>
                <th style="min-width: 150px; width: 150px;"><b>Сумма 1-полугодие</b></th>
                <th style="min-width: 150px; width: 150px;"><b>Объем 2-полугодие</b></th>
                <th style="min-width: 150px; width: 150px;"><b>Сумма 2-полугодие</b></th>
                <th style="min-width: 150px; width: 150px;"><b>Объем за год</b></th>
                <th style="min-width: 150px; width: 150px;"><b>Сумма за год</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info['forecast'] as $value) 
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
            <tr>
                <td><b>Итого</b></td>
                <td><b>{{ $info['calculator']['total']['volume_one'] }}</b></td>
                <td><b>{{ $info['calculator']['total']['sum_one'] }}</b></td>
                <td><b>{{ $info['calculator']['total']['volume_two'] }}</b></td>
                <td><b>{{ $info['calculator']['total']['sum_two'] }}</b></td>
                <td><b>{{ $info['calculator']['total']['volume_year'] }}</b></td>
                <td><b>{{ $info['calculator']['total']['sum_year'] }}</b></td>
            </tr>    
        </tbody>
    </table>
@else
    <p>Сводная таблица</p>
    <p>Таблица выгружена {{ $date }}</p>
    <br>
    <table>
        <thead>
            <tr>
                <th style="min-width: 270px; width: 270px;"><b>Учреждение</b></th>
                <th style="min-width: 200px; width: 200px;" colspan="2"><b>Теплоснабжение</b></th>
                <th style="min-width: 200px; width: 200px;" colspan="2"><b>Водоснабжение</b></th>
                <th style="min-width: 200px; width: 200px;" colspan="2"><b>Водоотведение</b></th>
                <th style="min-width: 200px; width: 200px;" colspan="2"><b>Электроснабжение</b></th>
                <th style="min-width: 200px; width: 200px;" colspan="2"><b>Вывоз мусора</b></th>
                <th style="min-width: 200px; width: 200px;" colspan="2"><b>Негативное воздействие</b></th>
                <th style="min-width: 150px; width: 150px;"><b>Итог сумма</b></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="min-width: 270px; width: 270px;"></td>
                <td style="min-width: 100px; width: 100px;">Объём</td><td style="min-width: 100px; width: 100px;">Сумма</td><td style="min-width: 100px; width: 100px;">Объём</td><td style="min-width: 100px; width: 100px;">Сумма</td>
                <td style="min-width: 100px; width: 100px;">Объём</td><td style="min-width: 100px; width: 100px;">Сумма</td><td style="min-width: 100px; width: 100px;">Объём</td><td style="min-width: 100px; width: 100px;">Сумма</td>
                <td style="min-width: 100px; width: 100px;">Объём</td><td style="min-width: 100px; width: 100px;">Сумма</td><td style="min-width: 100px; width: 100px;">Объём</td><td style="min-width: 100px; width: 100px;">Сумма</td>
                <td></td>
            </tr>
            @for ($i = 0; $i < count($info['forecast']) - 1; $i++)
                @if(($i % 6) == 0 || $i == 0)
                <tr>
                    <td>{{ $info['forecast'][$i]['user']['name'] }}</td>
                    <td>{{ $info['forecast'][$i]['volume_year'] }}</td>
                    <td>{{ $info['forecast'][$i]['sum_year'] }}</td>
                    <td>{{ $info['forecast'][$i+1]['volume_year'] }}</td>
                    <td>{{ $info['forecast'][$i+1]['sum_year'] }}</td>
                    <td>{{ $info['forecast'][$i+2]['volume_year'] }}</td>
                    <td>{{ $info['forecast'][$i+2]['sum_year'] }}</td>
                    <td>{{ $info['forecast'][$i+3]['volume_year'] }}</td>
                    <td>{{ $info['forecast'][$i+3]['sum_year'] }}</td>
                    <td>{{ $info['forecast'][$i+4]['volume_year'] }}</td>
                    <td>{{ $info['forecast'][$i+4]['sum_year'] }}</td>
                    <td>{{ $info['forecast'][$i+5]['volume_year'] }}</td>
                    <td>{{ $info['forecast'][$i+5]['sum_year'] }}</td>
                    <td>{{ $info['forecast'][$i]['sum_year'] + $info['forecast'][$i+1]['sum_year'] + $info['forecast'][$i+2]['sum_year'] + $info['forecast'][$i+3]['sum_year'] + $info['forecast'][$i+4]['sum_year'] + $info['forecast'][$i+5]['sum_year'] }}</td>
                </tr>
                @endif
            @endfor
            <tr>
                <td><b>Итого</b></td>
                <td><b>{{ $info['calculator']['vault']['volume_heat'] }}</b></td>
                <td><b>{{ $info['calculator']['vault']['sum_heat'] }}</b></td>
                <td><b>{{ $info['calculator']['vault']['volume_water'] }}</b></td>
                <td><b>{{ $info['calculator']['vault']['sum_water'] }}</b></td>
                <td><b>{{ $info['calculator']['vault']['volume_drainage'] }}</b></td>
                <td><b>{{ $info['calculator']['vault']['sum_drainage'] }}</b></td>
                <td><b>{{ $info['calculator']['vault']['volume_energy'] }}</b></td>
                <td><b>{{ $info['calculator']['vault']['sum_energy'] }}</b></td>
                <td><b>{{ $info['calculator']['vault']['volume_trash'] }}</b></td>
                <td><b>{{ $info['calculator']['vault']['sum_trash'] }}</b></td>
                <td><b>{{ $info['calculator']['vault']['volume_negative'] }}</b></td>
                <td><b>{{ $info['calculator']['vault']['sum_negative'] }}</b></td>
                <td><b>{{ $info['calculator']['total']['sum_year'] }}</b></td>
            </tr>
        </tbody>
    </table>
@endif
