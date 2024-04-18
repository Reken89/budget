@php
    $date = date('Y-m-d');

    $fu_kums = 0;
    $fu_uprav = 0;
    $fu_edds = 0;
    
    $cb_kums = 0;
    $cb_uprav = 0;
    $cb_edds = 0;    
@endphp

<p>Таблица выгружена {{ $date }} с использованием структуры Laravel</p>    
<p></p>
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Итог ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">КУМС</th>
            <th style="min-width: 150px; width: 150px;">Управление собственностью</th>
            <th style="min-width: 150px; width: 150px;">ЕДДС</th>
            <th style="min-width: 150px; width: 150px;">Итог ЦБ</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) КУМС</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Управление собственностью</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) ЕДДС</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info) - 1; $i++)
            @if(($i % 3) == 0 || $i == 0)
                @if($info[$i]['ekr']['shared'] == "Yes" || $info[$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th><b>{{ $info[$i]['ekr']['title'] }}</b></th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] + $info[$i+2]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i+1]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i+2]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] + $info[$i+2]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i+1]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i+2]['sum_cb'] }}</b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td>{{ $info[$i]['ekr']['ekr'] }}</td>
                        <td>{{ $info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] + $info[$i+2]['sum_fu'] }}</td>
                        <td>{{ $info[$i]['sum_fu'] }}</td>
                        <td>{{ $info[$i+1]['sum_fu'] }}</td>
                        <td>{{ $info[$i+2]['sum_fu'] }}</td>
                        <td>{{ $info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] + $info[$i+2]['sum_cb'] }}</td>
                        <td>{{ $info[$i]['sum_cb'] }}</td>
                        <td>{{ $info[$i+1]['sum_cb'] }}</td>
                        <td>{{ $info[$i+2]['sum_cb'] }}</td>
                    </tr>
                @endif
                @if($info[$i]['ekr']['shared'] == "No" && $info[$i]['ekr']['main'] == "Yes")
                    @php
                        $fu_kums += $info[$i]['sum_fu'];
                        $fu_uprav += $info[$i+1]['sum_fu'];
                        $fu_edds += $info[$i+2]['sum_fu'];
                        $cb_kums += $info[$i]['sum_cb'];
                        $cb_uprav += $info[$i+1]['sum_cb'];
                        $cb_edds += $info[$i+2]['sum_cb'];
                    @endphp
                @endif
            @endif        
        @endfor
        <tr>
            <th><b>Итог</b></th>
            <td></td>
            <td><b>{{ $fu_kums + $fu_uprav + $fu_edds }}</b></td>
            <td><b>{{ $fu_kums }}</b></td> 
            <td><b>{{ $fu_uprav }}</b></td>  
            <td><b>{{ $fu_edds }}</b></td> 
            <td><b>{{ $cb_kums + $cb_uprav + $cb_edds }}</b></td>
            <td><b>{{ $cb_kums }}</b></td> 
            <td><b>{{ $cb_uprav }}</b></td> 
            <td><b>{{ $cb_edds }}</b></td> 
        </tr>
    </tbody>
</table>


