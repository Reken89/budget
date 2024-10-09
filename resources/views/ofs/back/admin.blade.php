@php
    $mounth = [
        '1' => 'Январь',
        '2' => 'Февраль',
        '3' => 'Март',
        '4' => 'Апрель',
        '5' => 'Май',
        '6' => 'Июнь',
        '7' => 'Июль',
        '8' => 'Август',
        '9' => 'Сентябрь',
        '10' => 'Октябрь',
        '11' => 'Ноябрь',
        '12' => 'Декабрь',
    ];
    //var_dump($info);
@endphp





    
@if ($info['info'] == "yes")

<table>             
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 70px; width: 70px;"></th>
            <th style="min-width: 200px; width: 200px;">Плановые назначения ЛБО</th>
            <th style="min-width: 200px; width: 200px;">Зачет авансов, выплаченных в прошлом году</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Кредиторская задолженность</br> на начало года</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Дебиторская задолженность</br> на начало года</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Факт</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Кассовые расходы</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Кредиторская задолженность на</br> конец отчетного периода</th>
            <th style="min-width: 200px; width: 200px;" colspan="2">Дебиторская задолженность на</br> конец отчетного периода</th>
            <th style="min-width: 200px; width: 200px;">Возвращено Дт прошлых лет в доход бюджета</th>
            <th style="min-width: 200px; width: 200px;">Контрольное соотношение</th>
            <th style="min-width: 200px; width: 200px;">Контрольное соотношение к плану ЛБО</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th class="col-id-no" scope="row">1</th><td>2</td><td>3</td><td>4</td>
            <td>5</td><td>6</td><td>7</td><td>8</td>
            <td>9</td><td style="min-width: 150px; width: 150px;">10</td><td>11</td><td style="min-width: 150px; width: 150px;">12</td>
            <td>13</td><td>14</td><td>15</td><td>16</td>
            <td>17</td><td>18</td><td>19</td><td>20</td>
        </tr>             
        <tr>
            <th class="col-id-no" scope="row"></th><td></td><td></td><td></td><td></td>
            <td style="min-width: 150px; width: 150px;">Всего</td><td style="min-width: 150px; width: 150px;">Просроченная</td>
            <td style="min-width: 150px; width: 150px;">Всего</td><td style="min-width: 150px; width: 150px;">Просроченная</td>
            <td style="min-width: 150px; width: 150px;">Всего</td><td style="min-width: 150px; width: 150px;">Текущий месяц</td>
            <td style="min-width: 150px; width: 150px;">Всего</td><td style="min-width: 150px; width: 150px;">Текущий месяц</td>
            <td style="min-width: 150px; width: 150px;">Всего</td><td style="min-width: 150px; width: 150px;">Просроченная</td>
            <td style="min-width: 150px; width: 150px;">Всего</td><td style="min-width: 150px; width: 150px;">Просроченная</td>
            <td></td><td></td><td></td>
        </tr>
               
            @foreach ($info['result'] as $value)  
                
                @if ($value['total1'] < "0" || $value['total1'] > "0")
                    @php $color_t1 = "darkred"; @endphp 
                @else
                    @php $color_t1 = "black"; @endphp 
                @endif  
                
                @if ($value['total2'] < "0")
                    @php $color_t2 = "darkred"; @endphp 
                @else
                    @php $color_t2 = "black"; @endphp 
                @endif  
                
                @php
                    var_dump($value['ekr']['title']);
                @endphp

                
            @endforeach  

    </tbody>
</table>

    
@else
</br>
<div class="shadowbox">
    <p>Выберите нужные параметры и сформируйте таблицу</p>
</div>
@endif
