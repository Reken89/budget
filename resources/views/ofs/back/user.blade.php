@php
    use Illuminate\Support\Facades\Auth;
    $role = Auth::user()->role();
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

<head>
    <meta charset="utf-8">
    <title>Таблица ОФС</title>
</head>

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Отчет о финансовом состоянии</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица ОФС</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div> 

<form id="ofs" method="get"> 
<p><b>Выберите месяц</b></p>                                   
<div>                         
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="1">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Январь</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="2">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Февраль</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="3">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Март</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="4">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Апрель</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="5">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Май</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="6">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Июнь</div>
    </label>
    </br>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="7">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Июль</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="8">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Август</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="9">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Сентябрь</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="10">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Октябрь</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="11">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Ноябрь</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="mounth" value="12">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Декабрь</div>
    </label>                            
</div>

</br>
<p><b>Выберите раздел</b></p>                                   
<div>                         
    <label class="checkbox style-f">
        <input type="checkbox" name="chapter" value="1">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">МБ МЗ(МБ)</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="chapter" value="2">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">МБ ИЦ</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="chapter" value="3">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">РК МЗ(РК)</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="chapter" value="4">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">РК ИЦ</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="chapter" value="5">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ПД</div>
    </label>
</div>

@if ($role == "cb_buh")
</br>
<p><b>Выберите учреждение</b></p>                                   
<div>                         
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="25">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Администрация</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="26">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Закупки</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="23">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">КУМС</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="27">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Совет</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="28">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">КСО</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="29">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Централизованная бухгалтерия</div>
    </label>
</div>
@endif
</br>
<input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_two" class="button5" value="Сформировать таблицу"> 
</form>

@if ($info['info'] == "yes")
</br>
<div class="shadowbox">
    <p>Учреждение: {{ $info['result'][0]['user']['name'] }}</br>Месяц: {{ $mounth[$info['result'][0]['mounth']] }}</br>Раздел: {{ $info['result'][0]['chapter'] }}</p>
</div>


</br>
<table class="freeze-table" width="700px">             
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Наименование расходов</th>
            <th style="min-width: 70px; width: 70px;"></th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
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
            <td class="col-id-no" scope="row">1</td><td>2</td><td>3</td><td>4</td>
            <td>5</td><td>6</td><td>7</td><td>8</td>
            <td>9</td><td>10</td><td>11</td><td>12</td>
            <td>13</td><td>14</td><td>15</td><td>16</td>
            <td>17</td><td>18</td><td>19</td><td>20</td>
        </tr>             
        <tr>
            <td class="col-id-no" scope="row"></td><td></td><td></td><td></td><td></td>
            <td>Всего</td><td>Просроченная</td><td>Всего</td><td>Просроченная</td>
            <td>Всего</td><td>Текущий месяц</td><td>Всего</td><td>Текущий месяц</td>
            <td>Всего</td><td>Просроченная</td><td>Всего</td><td>Просроченная</td>
            <td></td><td></td><td></td>
        </tr>
        
        @for ($n = 1; $n <= $info['number']; $n++)
            @foreach ($info['result'] as $value)
                @if ($value['ekr']['main'] == 'Yes' && $value['ekr']['number'] == $n)
                    <tr>
                        <td class="col-id-no" scope="row"><b>{{ $value['ekr']['title'] }}</b></td>
                        <td></td>
                        <td><b>{{ $value['ekr']['ekr'] }}</b></td>
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
                        <td><b>{{ number_format($value['total1'], 2, ',', ' ') }}</b></td>
                        <td><b>{{ number_format($value['total2'], 2, ',', ' ') }}</b></td>
                    </tr>
                @endif
                
                @if ($value['ekr']['main'] == 'No' && $value['ekr']['number'] == $n)
                    @if ($value['status'] == '2')
                        <tr>
                            <input type="hidden" class="id" value="{{ $value['id'] }}">
                            <input type="hidden" class="number" value="{{ $n }}">
                            <input type="hidden" class="year" value="{{ $value['year'] }}">
                            <input type="hidden" class="mounth" value="{{ $value['mounth'] }}">
                            <input type="hidden" class="chapter" value="{{ $value['chapter'] }}">
                            <td class="col-id-no" scope="row">{{ $value['ekr']['title'] }}</td>
                            <td><input type=button class='button' id='btn_one' value='Сброс'></td>
                            <td>{{ $value['ekr']['ekr'] }}</td>
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
                            <td>{{ number_format($value['total1'], 2, ',', ' ') }}</td>
                            <td>{{ number_format($value['total2'], 2, ',', ' ') }}</td>
                        </tr>
                    @elseif ($value['status'] == '1')
                    @endif
                @endif
            @endforeach 
        @endfor
        
        @php
            $total = $info['total'][0];
        @endphp
        <tr>
            <td class="col-id-no" scope="row"><b>Итого</b></td>
            <td></td>
            <td></td>
            <td><b>{{ number_format($total['lbo'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['prepaid'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['credit_year_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['credit_year_term'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['debit_year_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['debit_year_term'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['fact_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['fact_mounth'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['kassa_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['kassa_mounth'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['credit_end_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['credit_end_term'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['debit_end_all'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['debit_end_term'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['return_old_year'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['total1'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($total['total2'], 2, ',', ' ') }}</b></td>
            <td></td>
        </tr>
  
    </tbody>
</table>

@else
</br>
<div class="shadowbox">
    <p>Выберите нужные параметры и сформируйте таблицу</p>
</div>
@endif
