@php
    $date = date('Y-m-d');
    $fu_zakupki = 0;
    $fu_cb = 0;
    $cb_zakupki = 0;
    $cb_cb = 0;
@endphp

<p>Таблица выгружена {{ $date }} с использованием структуры Laravel</p>    
<p></p>
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Итог ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">Закупки</th>
            <th style="min-width: 150px; width: 150px;">Централизованная бухгалтерия</th>
            <th style="min-width: 150px; width: 150px;">Итог ЦБ</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Закупки</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Централизованная бухгалтерия</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info) - 1; $i++)
            @if(($i % 2) == 0 || $i == 0)
                @if($info[$i]['ekr']['shared'] == "Yes" || $info[$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th><b>{{ $info[$i]['ekr']['title'] }}</b></th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i+1]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i+1]['sum_cb'] }}</b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td>{{ $info[$i]['ekr']['ekr'] }}</td>
                        <td>{{ $info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] }}</td>
                        <td>{{ $info[$i]['sum_fu'] }}</td>
                        <td>{{ $info[$i+1]['sum_fu'] }}</td>
                        <td>{{ $info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] }}</td>
                        <td>{{ $info[$i]['sum_cb'] }}</td>
                        <td>{{ $info[$i+1]['sum_cb'] }}</td>
                    </tr>
                @endif
                @if($info[$i]['ekr']['shared'] == "No" && $info[$i]['ekr']['main'] == "Yes")
                    @php
                        $fu_zakupki += $info[$i]['sum_fu'];
                        $fu_cb += $info[$i+1]['sum_fu'];
                        $cb_zakupki += $info[$i]['sum_cb'];
                        $cb_cb += $info[$i+1]['sum_cb'];
                    @endphp
                @endif
            @endif        
        @endfor
        <tr>
            <th><b>Итог</b></th>
            <td></td>
            <td><b>{{ $fu_zakupki + $fu_cb }}</b></td>
            <td><b>{{ $fu_zakupki }}</b></td> 
            <td><b>{{ $fu_cb }}</b></td>  
            <td><b>{{ $cb_zakupki + $cb_cb }}</b></td>
            <td><b>{{ $cb_zakupki }}</b></td> 
            <td><b>{{ $cb_cb }}</b></td> 
        </tr>
    </tbody>
</table>

