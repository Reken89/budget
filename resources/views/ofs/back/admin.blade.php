@php
    $total = $info['total'];
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
                
                @if ($value['ekr'] !== NULL)
                    @if ($value['ekr']['main'] == 'Yes')
                        <tr>
                            <th class="col-id-no" scope="row">{{ $value['ekr']['title'] }}</th>
                            <td><b>{{ $value['ekr']['ekr'] }}</b></td>
                            <td><b></b></td>
                            <td><b>{{ number_format($value['lbo'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['prepaid'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['credit_year_all'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['credit_year_term'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['debit_year_all'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['debit_year_term'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['fact_all'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['fact_mounth'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['kassa_all'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['kassa_mounth'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['credit_end_all'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['credit_end_term'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['debit_end_all'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['debit_end_term'], 2, ',', ' ') }}</b></td>
                            <td><b>{{ number_format($value['return_old_year'], 2, ',', ' ') }}</b></td>
                            <td><b><font color="{{ $color_t1 }}">{{ number_format($value['total1'], 2, ',', ' ') }}</b></td>
                            <td><b><font color="{{ $color_t2 }}">{{ number_format($value['total2'], 2, ',', ' ') }}</b></td>
                        </tr>                
                    @else
                        <tr>
                            <th class="col-id-no" scope="row">{{ $value['ekr']['title'] }}</th>
                            <td>{{ $value['ekr']['ekr'] }}</td>
                            <td></td>
                            <td>{{ number_format($value['lbo'], 2, ',', ' ') }}</td>  
                            <td>{{ number_format($value['prepaid'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['credit_year_all'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['credit_year_term'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['debit_year_all'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['debit_year_term'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['fact_all'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['fact_mounth'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['kassa_all'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['kassa_mounth'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['credit_end_all'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['credit_end_term'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['debit_end_all'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['debit_end_term'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['return_old_year'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['total1'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['total2'], 2, ',', ' ') }}</td>
                        </tr>
                    @endif 
                @endif                              
            @endforeach 
            
            <tr>
            <th class="col-id-no" scope="row">ИТОГ</th>
            <td></td>
            <td></td>
            <td><b><font color="blue">{{ number_format($total['lbo'], 2, ',', ' ') }}</b></td>  
            <td><b><font color="blue">{{ number_format($total['prepaid'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['credit_year_all'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['credit_year_term'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['debit_year_all'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['debit_year_term'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['fact_all'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['fact_mounth'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['kassa_all'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['kassa_mounth'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['credit_end_all'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['credit_end_term'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['debit_end_all'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['debit_end_term'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['return_old_year'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['total1'], 2, ',', ' ') }}</b></td>
            <td><b><font color="blue">{{ number_format($total['total2'], 2, ',', ' ') }}</b></td>
            </tr>

    </tbody>
</table>

    
@else
</br>
<div class="shadowbox">
    <p>Выберите нужные параметры и сформируйте таблицу</p>
</div>
@endif
