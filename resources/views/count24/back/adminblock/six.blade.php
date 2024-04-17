@php
    //var_dump($info[0]);
    //var_dump(count($info));
    $fu_school = 0;
    $fu_garden = 0;
    $cb_school = 0;
    $cb_garden = 0;
    
    if($info[0]['status'] == "2"){
        $color = "red";
    }else{
        $color = "green";
    }
@endphp

<!doctype html>
<html lang="en"> 
<table>
    <thead>
        <tr>
            <th style="min-width: 200px; width: 400px;">Наименование</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 150px; width: 150px;">Итог ФЭУ</th>
            <th style="min-width: 150px; width: 150px;">Школа</th>
            <th style="min-width: 150px; width: 150px;">Сад</th>
            <th style="min-width: 150px; width: 150px;">Итог ЦБ</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Школа</th>
            <th style="min-width: 150px; width: 150px;">(ЦБ) Сад</th>
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
                        $fu_school += $info[$i]['sum_fu'];
                        $fu_garden += $info[$i+1]['sum_fu'];
                        $cb_school += $info[$i]['sum_cb'];
                        $cb_garden += $info[$i+1]['sum_cb'];
                    @endphp
                @endif
            @endif        
        @endfor
        <tr>
            <th>Итог</th>
            <td></td>
            <td><b>{{ number_format($fu_school + $fu_garden, 2, ',', ' ') }}<b></td>
            <td><b>{{ number_format($fu_school, 2, ',', ' ') }}</b></td> 
            <td><b>{{ number_format($fu_garden, 2, ',', ' ') }}</b></td>  
            <td><font color="{{ $color }}"><b>{{ number_format($cb_school + $cb_garden, 2, ',', ' ') }}<b></td>
            <td><font color="{{ $color }}"><b>{{ number_format($cb_school, 2, ',', ' ') }}</b></td> 
            <td><font color="{{ $color }}"><b>{{ number_format($cb_garden, 2, ',', ' ') }}</b></td> 
        </tr>
    </tbody>
</table>
</html>

