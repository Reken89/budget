@php
    $total = [
        'lbo'              => 0,
        'prepaid'          => 0,
        'credit_year_all'  => 0,
        'credit_year_term' => 0,
        'debit_year_all'   => 0,
        'debit_year_term'  => 0,
        'fact_all'         => 0,
        'fact_mounth'      => 0,
        'kassa_all'        => 0,
        'kassa_mounth'     => 0,
        'credit_end_all'   => 0,
        'credit_end_term'  => 0,
        'debit_end_all'    => 0,
        'debit_end_term'   => 0,
        'return_old_year'  => 0,
        'total1'           => 0,
        'total2'           => 0,
    ];
    
    foreach($info['table'] as $value){
        if($value['ekr']['main'] == 'Yes' && $value['ekr']['shared'] == 'No'){
            $total['lbo'] = $total['lbo'] + $value['lbo'];
            $total['prepaid'] = $total['prepaid'] + $value['prepaid'];
            $total['credit_year_all'] = $total['credit_year_all'] + $value['credit_year_all'];
            $total['credit_year_term'] = $total['credit_year_term'] + $value['credit_year_term'];
            $total['debit_year_all'] = $total['debit_year_all'] + $value['debit_year_all'];
            $total['debit_year_term'] = $total['debit_year_term'] + $value['debit_year_term'];
            $total['fact_all'] = $total['fact_all'] + $value['fact_all'];
            $total['fact_mounth'] = $total['fact_mounth'] + $value['fact_mounth'];
            $total['kassa_all'] = $total['kassa_all'] + $value['kassa_all'];
            $total['kassa_mounth'] = $total['kassa_mounth'] + $value['kassa_mounth'];
            $total['credit_end_all'] = $total['credit_end_all'] + $value['credit_end_all'];
            $total['credit_end_term'] = $total['credit_end_term'] + $value['credit_end_term'];
            $total['debit_end_all'] = $total['debit_end_all'] + $value['debit_end_all'];
            $total['debit_end_term'] = $total['debit_end_term'] + $value['debit_end_term'];
            $total['return_old_year'] = $total['return_old_year'] + $value['return_old_year'];
            $total['total1'] = $total['total1'] + $value['total1'];
            $total['total2'] = $total['total2'] + $value['total2'];
        }
    }
@endphp

@if ($info['table'] == true)  
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
               
            @foreach ($info['table'] as $value)  
                
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
                
                @if ($value['ekr']['main'] == 'Yes' || $value['ekr']['main'] == 'Yes')
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
                @elseif ($info['variant'] == 'one' && $value['status'] == '2')
                    <tr>
                        <input type="hidden" class="ekr_id" value="{{ $value['ekr_id'] }}">
                        <input type="hidden" class="user_id" value="{{ $value['user_id'] }}">
                        <input type="hidden" class="number" value="{{ $value['ekr']['number'] }}">
                        <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
                        <input type="hidden" class="chapter" value="{{ $info['chapter'] }}">
                        <th class="col-id-no" scope="row">{{ $value['ekr']['title'] }}</th>
                        <td>{{ $value['ekr']['ekr'] }}</td>
                        <td><input type=button class='button' id='reset' value='Сброс'></td>
                        <td><input type="text" class="lbo" value="{{ number_format($value['lbo'], 2, ',', ' ') }}"></td>  
                        <td><input type="text" class="prepaid" value="{{ number_format($value['prepaid'], 2, ',', ' ') }}"></td>
                        <td><input type="text" class="credit_year_all" value="{{ number_format($value['credit_year_all'], 2, ',', ' ') }}"></td>
                        <td><input type="text" class="credit_year_term" value="{{ number_format($value['credit_year_term'], 2, ',', ' ') }}"></td>
                        <td><input type="text" class="debit_year_all" value="{{ number_format($value['debit_year_all'], 2, ',', ' ') }}"></td>
                        <td><input type="text" class="debit_year_term" value="{{ number_format($value['debit_year_term'], 2, ',', ' ') }}"></td>
                        <td>{{ number_format($value['fact_all'], 2, ',', ' ') }}</td>
                        <td><input type="text" class="fact_mounth" value="{{ number_format($value['fact_mounth'], 2, ',', ' ') }}"></td>
                        <td>{{ number_format($value['kassa_all'], 2, ',', ' ') }}</td>
                        <td><input type="text" class="kassa_mounth" value="{{ number_format($value['kassa_mounth'], 2, ',', ' ') }}"></td>
                        <td><input type="text" class="credit_end_all" value="{{ number_format($value['credit_end_all'], 2, ',', ' ') }}"></td>
                        <td><input type="text" class="credit_end_term" value="{{ number_format($value['credit_end_term'], 2, ',', ' ') }}"></td>
                        <td><input type="text" class="debit_end_all" value="{{ number_format($value['debit_end_all'], 2, ',', ' ') }}"></td>
                        <td><input type="text" class="debit_end_term" value="{{ number_format($value['debit_end_term'], 2, ',', ' ') }}"></td>
                        <td><input type="text" class="return_old_year" value="{{ number_format($value['return_old_year'], 2, ',', ' ') }}"></td>
                        <td><font color="{{ $color_t1 }}">{{ number_format($value['total1'], 2, ',', ' ') }}</td>
                        <td><font color="{{ $color_t2 }}">{{ number_format($value['total2'], 2, ',', ' ') }}</td>
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
    <h1>Сформируйте таблицу!</h1>
@endif

