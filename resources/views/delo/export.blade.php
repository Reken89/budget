@php
    $date = date('Y-m-d');
@endphp
<p>Таблица выгружена {{ $date }} с использованием структуры Laravel</p>
<table>
    <thead>
        <tr>
            <th style="min-width: 70px; width: 70px;">Номер</th>
            <th style="min-width: 70px; width: 70px;">Вид документа</th>
            <th style="min-width: 100px; width: 100px;">Корреспондент</th>
            <th style="min-width: 100px; width: 100px;">Дата</th>
            @if($table[0]['type'] == "out")
                <th style="min-width: 100px; width: 100px;">Исполнитель</th>
            @else
                <th style="min-width: 100px; width: 100px;">Резолюция</th>
            @endif
            <th style="min-width: 200px; width: 200px;">Содержание</th>    
            <th style="min-width: 80px; width: 80px;">Автор</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($table as $value)
            <tr>
                <td>{{ $value['number'] }}</td>
                <td>{{ $value['npa']['title'] }}</td>
                <td>{{ $value['correspondent']['title'] }}</td>
                <td>{{ $value['date'] }}</td>
                <td>{{ $value['user']['name'] }}</td>
                <td>{{ $value['content'] }}</td>
                <td>{{ $value['author'] }}</td>
            </tr>    
        @endforeach
    </tbody>
</table>