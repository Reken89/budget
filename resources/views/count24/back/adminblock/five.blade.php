@php
    //var_dump($info[0]);
    //var_dump(count($info));
    $fu_dhsh = 0;
    $fu_dmsh = 0;
    $cb_dhsh = 0;
    $cb_dmsh = 0;
    $color = "red";
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
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td><b>{{ $info[$i]['ekr']['ekr'] }}<b></td>
                        <td><b>{{ number_format($info[$i]['sum_fu'] + $info[$i+1]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><b>{{ number_format($info[$i+1]['sum_fu'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i]['sum_cb'] + $info[$i+1]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i]['sum_cb'], 2, ',', ' ') }}<b></td>
                        <td><font color="{{ $color }}"><b>{{ number_format($info[$i+1]['sum_cb'], 2, ',', ' ') }}<b></td>
                    </tr>
                @else
                    <tr>
                        <th>{{ $info[$i]['ekr']['title'] }}</th>
                        <td>{{ $info[$i]['ekr']['ekr'] }}</td>
                        <td>{{ number_format($info[$i]['sum_fu'] + $info[$i+1]['sum_fu'], 2, ',', ' ') }}</td>
                        <td><input type="hidden" class="id" value="{{ $info[$i]['id'] }}">
                            <input type="text" class="sum" value="{{ number_format($info[$i]['sum_fu'], 2, ',', ' ') }}"></td>
                        <td><input type="hidden" class="id" value="{{ $info[$i+1]['id'] }}">
                            <input type="text" class="sum" value="{{ number_format($info[$i+1]['sum_fu'], 2, ',', ' ') }}"></td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i]['sum_cb'] + $info[$i+1]['sum_cb'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i]['sum_cb'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color }}">{{ number_format($info[$i+1]['sum_cb'], 2, ',', ' ') }}</td>
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
            <th>Итог</th>
            <td></td>
            <td><b>{{ number_format($fu_dhsh + $fu_dmsh, 2, ',', ' ') }}<b></td>
            <td><b>{{ number_format($fu_dhsh, 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($fu_dmsh, 2, ',', ' ') }}</b></td>  
            <td><font color="{{ $color }}"><b>{{ number_format($cb_dhsh + $cb_dmsh, 2, ',', ' ') }}<b></td>
            <td><font color="{{ $color }}"><b>{{ number_format($cb_dhsh, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($cb_dmsh, 2, ',', ' ') }}</b></td> 
        </tr>
    </tbody>
</table>
</html>