@php
    //var_dump($info['tarrifs']);
    function color($sum, $volume, $min, $max)
    {
        if($sum / $volume >= $min && $sum / $volume <= $max){
            return "green";
        }else{
            return "red";
        }
    }
    $type = ['heat', 'water', 'drainage', 'power', 'trash', 'negative'];
    $name = ['Теплоснабжение', 'Водоснабжение', 'Водоотведение', 'Электроснабжение', 'Вывоз мусора', 'Негативное воздействие'];
@endphp
<table class="table align-middle mb-0">
    <thead class="table-light">
        <tr>
            <th style="min-width: 15%; width: 15%;" bgcolor="#66CDAA">Услуга</th>
            <th style="min-width: 15%; width: 15%;" bgcolor="#66CDAA">Объем</th>
            <th style="min-width: 15%; width: 15%;" bgcolor="#66CDAA">Сумма</th>
            <th style="min-width: 15%; width: 15%;" bgcolor="#66CDAA">Ваш тариф*</th>
            <th style="min-width: 15%; width: 15%;" bgcolor="#66CDAA">Тариф min</th>
            <th style="min-width: 15%; width: 15%;" bgcolor="#66CDAA">Тариф max</th>                                           
        </tr>
    </thead>
    <tbody>
        @for($i = 0; $i < 6; $i++)
            <tr>
                <input type="hidden" class="id" value="{{ $info['communals']['id'] }}">
                <input type="hidden" class="service" value="heat">
                <td style="min-width: 15%; width: 15%;">{{ $name[$i] }}</td>
                @php $volume = "$type[$i]-volume"; $sum = "$type[$i]-sum"; @endphp
                @if ($info['communals']['status'] == 2)
                    <td  style="min-width: 15%; width: 15%;"><input style="min-width: 100px; width: 100px;" type="text" class="volume" value="{{ number_format($info['communals'][$volume], 4, ',', ' ') }}"></td>
                    <td  style="min-width: 15%; width: 15%;"><input style="min-width: 100px; width: 100px;" type="text" class="sum" value="{{ number_format($info['communals'][$sum], 2, ',', ' ') }}"></td>
                @else
                    <td  style="min-width: 15%; width: 15%;">{{ number_format($info['communals'][$volume], 4, ',', ' ') }}</td>
                    <td  style="min-width: 15%; width: 15%;">{{ number_format($info['communals'][$sum], 2, ',', ' ') }}</td>
                @endif

                @if ($info['communals'][$volume] == 0)
                    <td style="min-width: 15%; width: 15%;"><font color="green">0</td>
                @else
                    @php
                        $color = color($info['communals'][$sum], $info['communals'][$volume], $info['tarrifs'][$i]['tarrif_min'], $info['tarrifs'][$i]['tarrif_max']);
                    @endphp
                    <td style="min-width: 15%; width: 15%;"><font color="{{ $color }}">{{ number_format($info['communals'][$sum] / $info['communals'][$volume], 4, ',', ' ') }}</td>
                @endif
                <td style="min-width: 15%; width: 15%;">{{ number_format($info['tarrifs'][$i]['tarrif_min'], 4, ',', ' ') }}</td>
                <td style="min-width: 15%; width: 15%;">{{ number_format($info['tarrifs'][$i]['tarrif_max'], 4, ',', ' ') }}</td>
            </tr>
        @endfor
    </tbody>
</table>

