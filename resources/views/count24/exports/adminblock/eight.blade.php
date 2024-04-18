@php
    $date = date('Y-m-d');
    $fu = 0;
    $cb = 0;
@endphp

<p>Таблица выгружена {{ $date }} с использованием структуры Laravel</p>    
<p></p>
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 600px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">СВОД ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">СВОД ЦБ</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($info) - 1; $i++)
            
                @if($info[$i]['ekr']['shared'] == "Yes" || $info[$i]['ekr']['main'] == "Yes")
                    <tr>
                        <th><b>{{ $info[$i]['ekr']['title'] }}</b></th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_fu'] }}</b></td>
                        <td><b>{{ $info[$i]['sum_cb'] }}</b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td>{{ $info[$i]['ekr']['ekr'] }}</td>
                        <td>{{ $info[$i]['sum_fu'] }}</td>
                        <td>{{ $info[$i]['sum_cb'] }}</td>
                    </tr>
                @endif
                @if($info[$i]['ekr']['shared'] == "No" && $info[$i]['ekr']['main'] == "Yes")
                    @php
                        $fu += $info[$i]['sum_fu'];
                        $cb += $info[$i]['sum_cb'];
                    @endphp
                @endif
                   
        @endfor
        <tr>
            <th><b>Итог</b></th>
            <td></td>
            <td><b>{{ $fu }}</b></td> 
            <td><b>{{ $cb }}</b></td> 
        </tr>
    </tbody>
</table>
</html>

