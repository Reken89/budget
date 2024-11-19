@php
    $date = date('Y-m-d');
    $fu_school = 0;
    $fu_garden = 0;
    $cb_school = 0;
    $cb_garden = 0;
@endphp

<p>Таблица выгружена {{ $date }}</p>    
<p></p>
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Итог ЦБ</th>
            <th style="min-width: 150px; width: 150px;">Школа</th>
            <th style="min-width: 150px; width: 150px;">Сад</th>
            <th style="min-width: 150px; width: 150px;">Итог ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Школа</th>
            <th style="min-width: 150px; width: 150px;">(ФЭУ) Сад</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info) - 1; $i++)
            @if(($i % 2) == 0 || $i == 0)
                @if($info[$i]['ekr']['shared'] == "Yes" || $info[$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th><b>{{ $info[$i]['ekr']['title'] }}</b></th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i+1]['sum_cb'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i+1]['sum_fu'] }}</b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td>{{ $info[$i]['ekr']['ekr'] }}</td>
                        <td>{{ $info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] }}</td>
                        <td>{{ $info[$i]['sum_cb'] }}</td>
                        <td>{{ $info[$i+1]['sum_cb'] }}</td>
                        <td>{{ $info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] }}</td>
                        <td>{{ $info[$i]['sum_fu'] }}</td>
                        <td>{{ $info[$i+1]['sum_fu'] }}</td>
                    </tr>
                @endif
                @if($info[$i]['ekr']['shared'] == "No" && $info[$i]['ekr']['main'] == "Yes")
                    @php
                        $fu_school += $info[$i]['sum_fu'];
                        $fu_garden += $info[$i+1]['sum_fu'];
                        $cb_school += $info[$i]['sum_cb'];
                        $cb_garden += $info[$i+1]['sum_cb'];
                    @endphp
                @endif
            @endif        
        @endfor
        <tr>
            <th><b>Итог</b></th>
            <td></td>
            <td><b>{{ $cb_school + $cb_garden }}</b></td>
            <td><b>{{ $cb_school }}</b></td> 
            <td><b>{{ $cb_garden }}</b></td> 
            <td><b>{{ $fu_school + $fu_garden }}</b></td>
            <td><b>{{ $fu_school }}</b></td> 
            <td><b>{{ $fu_garden }}</b></td>  
        </tr>
    </tbody>
</table>
</html>



