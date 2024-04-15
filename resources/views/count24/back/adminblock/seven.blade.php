@php
    $fu_kums = 0;
    $fu_uprav = 0;
    $fu_edds = 0;
    
    $cb_kums = 0;
    $cb_uprav = 0;
    $cb_edds = 0;
    
    if($info[0]['status'] == "2"){
        $color = "red";
    }else{
        $color = "green";
    }
@endphp

<!doctype html>
<html lang="en">
<p><b>Выбранный год: {{ $info[0]['year'] }}</b> </p>   
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
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}<b></td>
                        <td><b>{{ number_format($info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] + $info[$i+2]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i+1]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i+2]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] + $info[$i+2]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i+1]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i+2]['sum_cb'], 2, ',', ' ') }}<b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td>{{ $info[$i]['ekr']['ekr'] }}</td>
                        <td>{{ number_format($info[$i]['sum_fu'] + $info[$i+1]['sum_fu'] + $info[$i+2]['sum_fu'], 2, ',', ' ') }}</td>
                        <td><input type="hidden" class="id" value="{{ $info[$i]['id'] }}">
                            <input type="text" class="sum" value="{{ number_format($info[$i]['sum_fu'], 2, ',', ' ') }}"></td>
                        <td><input type="hidden" class="id" value="{{ $info[$i+1]['id'] }}">
                            <input type="text" class="sum" value="{{ number_format($info[$i+1]['sum_fu'], 2, ',', ' ') }}"></td>
                        <td><input type="hidden" class="id" value="{{ $info[$i+2]['id'] }}">
                            <input type="text" class="sum" value="{{ number_format($info[$i+2]['sum_fu'], 2, ',', ' ') }}"></td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i]['sum_cb'] + $info[$i+1]['sum_cb'] + $info[$i+2]['sum_cb'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i]['sum_cb'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i+1]['sum_cb'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i+2]['sum_cb'], 2, ',', ' ') }}</td>
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
            <th>Итог</th>
            <td></td>
            <td><b>{{ number_format($fu_kums + $fu_uprav + $fu_edds, 2, ',', ' ') }}<b></td>
            <td><b>{{ number_format($fu_kums, 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($fu_uprav, 2, ',', ' ') }}</b></td>  
            <td><b>{{ number_format($fu_edds, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($cb_kums + $cb_uprav + $cb_edds, 2, ',', ' ') }}<b></td>
            <td><font color="{{ $color }}"><b>{{ number_format($cb_kums, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($cb_uprav, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($cb_edds, 2, ',', ' ') }}</b></td> 
        </tr>
    </tbody>
</table>
</html>