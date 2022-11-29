<table width="700px">
    <thead>
        <tr>
            <th style="min-width: 100px; width: 100px;" rowspan="2">Учреждение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Теплоснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Водоотведение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Негативное воздействие</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Водоснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Электроснабжение</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Вывоз мусора</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Утилизация ТБО</th>
            <th style="min-width: 100px; width: 100px;" rowspan="2">ИТОГО</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td><b>Объем</b></td><td><b>Сумма</b></td>
            <td></td>
        </tr>
        
        @if ($info['variant'] == "one")
            @foreach ($info['result'] as $value)
                
                <tr>
                    <td>{{ $value['user']['name'] }}</td>
                    <td>{{ $value['heat-volume'] }}</td>
                    <td>{{ $value['heat-sum'] }}</td>
                    <td>{{ $value['drainage-volume'] }}</td>
                    <td>{{ $value['drainage-sum'] }}</td>
                    <td>{{ $value['negative-volume'] }}</td>
                    <td>{{ $value['negative-sum'] }}</td>
                    <td>{{ $value['water-volume'] }}</td>
                    <td>{{ $value['water-sum'] }}</td>
                    <td>{{ $value['power-volume'] }}</td>
                    <td>{{ $value['power-sum'] }}</td>
                    <td>{{ $value['trash-volume'] }}</td>
                    <td>{{ $value['trash-sum'] }}</td>
                    <td>{{ $value['disposal-volume'] }}</td>
                    <td>{{ $value['disposal-sum'] }}</td>
                    <td>{{ $value['total'] }}</td>
                </tr>
               
            @endforeach             
        @elseif ($info['variant'] == "many")
            @foreach ($info['result'] as $value)
                <tr>
                    <td>{{ $value['user']['name'] }}</td>
                    <td>{{ $value['heat_volume'] }}</td>
                    <td>{{ $value['heat_sum'] }}</td>
                    <td>{{ $value['drainage_volume'] }}</td>
                    <td>{{ $value['drainage_sum'] }}</td>
                    <td>{{ $value['negative_volume'] }}</td>
                    <td>{{ $value['negative_sum'] }}</td>
                    <td>{{ $value['water_volume'] }}</td>
                    <td>{{ $value['water_sum'] }}</td>
                    <td>{{ $value['power_volume'] }}</td>
                    <td>{{ $value['power_sum'] }}</td>
                    <td>{{ $value['trash_volume'] }}</td>
                    <td>{{ $value['trash_sum'] }}</td>
                    <td>{{ $value['disposal_volume'] }}</td>
                    <td>{{ $value['disposal_sum'] }}</td>
                    <td>{{ $value['total'] }}</td>
                </tr>
            
            @endforeach
        @endif 
        
        @php
            $total = $info['total'][0];
        @endphp
        
        <tr>
            <td><b>ИТОГО</b></td>
            <td>{{ $total['heat_volume'] }}</td>
            <td>{{ $total['heat_sum'] }}</td>
            <td>{{ $total['drainage_volume'] }}</td>
            <td>{{ $total['drainage_sum'] }}</td>
            <td>{{ $total['negative_volume'] }}</td>
            <td>{{ $total['negative_sum'] }}</td>
            <td>{{ $total['water_volume'] }}</td>
            <td>{{ $total['water_sum'] }}</td>
            <td>{{ $total['power_volume'] }}</td>
            <td>{{ $total['power_sum'] }}</td>
            <td>{{ $total['trash_volume'] }}</td>
            <td>{{ $total['trash_sum'] }}</td>
            <td>{{ $total['disposal_volume'] }}</td>
            <td>{{ $total['disposal_sum'] }}</td>
            <td>{{ $total['total'] }}</td>
        </tr>
        
    </tbody>
</table>    

