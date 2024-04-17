@php
    $date = date('Y-m-d');
    $fu_dhsh = 0;
    $fu_dmsh = 0;
    $cb_dhsh = 0;
    $cb_dmsh = 0;
@endphp

<p>Таблица выгружена {{ $date }} с использованием структуры Laravel</p>    
<p></p>
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Итог ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">ДХШ</th>
            <th style="min-width: 150px; width: 150px;">ДМШ</th>
            <th style="min-width: 150px; width: 150px;">Итог ЦБ</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) ДХШ</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) ДМШ</th>
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
                        $fu_dhsh += $info[$i]['sum_fu'];
                        $fu_dmsh += $info[$i+1]['sum_fu'];
                        $cb_dhsh += $info[$i]['sum_cb'];
                        $cb_dmsh += $info[$i+1]['sum_cb'];
                    @endphp
                @endif
            @endif        
        @endfor
        <tr>
            <th><b>Итог</b></th>
            <td></td>
            <td><b>{{ $fu_dhsh + $fu_dmsh }}</b></td>
            <td><b>{{ $fu_dhsh }}</b></td> 
            <td><b>{{ $fu_dmsh }}</b></td>  
            <td><b>{{ $cb_dhsh + $cb_dmsh }}</b></td>
            <td><b>{{ $cb_dhsh }}</b></td> 
            <td><b>{{ $cb_dmsh }}</b></td> 
        </tr>
    </tbody>
</table>