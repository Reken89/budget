@php
    $number = (count($info['info']));
@endphp

<table>   
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;">Название</th>
            <th style="min-width: 200px; width: 200px;">ИНН</th>
            <th style="min-width: 200px; width: 200px;">КБК</th>
            <th style="min-width: 200px; width: 200px;">Расшифровка КБК</th>
            <th style="min-width: 200px; width: 200px;">АДБ</th>
            <th style="min-width: 200px; width: 200px;">Сумма</th>
        </tr>
    </thead>
    
    <tbody>
        @for ($n = 0; $n < $number; $n++)
        <tr>
            <td>{{ $info['info'][$n]['title'] }}</td>
            <td>{{ $info['info'][$n]['inn'] }}</td>
            <td>{{ $info['info'][$n]['kbk'] }}</td>
            @if ($info['info'][$n]['tax_kbk'] == NULL)
                <td>Неизвестный КБК</td>
            @else
                <td>{{ $info['info'][$n]['tax_kbk']['title'] }}</td>
            @endif
            <td>{{ $info['info'][$n]['inn_adb'] }}</td>
            <td>{{ $info['info'][$n]['sum'] }}</td>
        </tr>
        @endfor
        
    </tbody>
</table>