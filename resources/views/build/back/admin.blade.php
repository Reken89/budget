<head>
    <meta charset="utf-8">
    <title>Таблица ремонты</title>
</head>

@php
    //var_dump($info);
@endphp

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Выберите параметры для отображения таблицы</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица ремонты</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div>

<form id="build" method="get"> 
<p><b>Выберите вариант таблицы</b></p>                 
    <div class="size_block">                  
        <label class="checkbox style-f">
            <input type="checkbox" name="variant" value="2">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Учреждения АУ, БУ</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="variant" value="3">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Детские сады</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="variant" value="4">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Администрация и КУМС</div>
        </label>                  
        <label class="checkbox style-f">
            <input type="checkbox" name="variant" value="5">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">ДМШ и ДХШ</div>
        </label>                 
        <label class="checkbox style-f">
            <input type="checkbox" name="variant" value="6">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">ВСОШ</div>
        </label>
    </div>
                         
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
                         
<p><input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_one" class="button5" value="Сформировать таблицу" /></p>                     
</form>

</br>
<table class="freeze-table" width="700px"> 
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Учреждение</th>
            <th style="min-width: 70px; width: 70px;"></th>
            <th style="min-width: 200px; width: 200px;">Наименование вида работ</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 70px; width: 70px;">ЭКР(II)</th>
            <th style="min-width: 200px; width: 200px;">Утверждено</th>
            <th style="min-width: 200px; width: 200px;">Сумма отдела строительства</th>
            <th style="min-width: 200px; width: 200px;">Сумма МК</th>
            <th style="min-width: 200px; width: 200px;">Касса</th>
            <th style="min-width: 200px; width: 200px;">Факт</th>
            <th style="min-width: 200px; width: 200px;">№ и дата контракта</th>
            <th style="min-width: 200px; width: 200px;">Срок исполнения</th>
            <th style="min-width: 200px; width: 200px;">Создатель записи</th>
        </tr>
    </thead>
       
        
    @if ($info['variant'] == '5')
        <tr>
            <td><b>Детская художественная школа</b></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td>
        </tr>       
        <tr>
            <td></td><td></td><td><b>ИТОГО</b></td>
            <td><b>225</b></td>
            <td><b></b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh225']['fu'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh225']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh225']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh225']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh225']['fact'], 2, ',', ' ') }}</b></td>
            <td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td></td><td><b>ИТОГО</b></td>
            <td><b>226</b></td>
            <td><b></b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh226']['fu'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh226']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh226']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh226']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh226']['fact'], 2, ',', ' ') }}</b></td>
            <td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td></td><td><b>ИТОГО</b></td>
            <td><b>228</b></td>
            <td><b></b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh228']['fu'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh228']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh228']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh228']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh228']['fact'], 2, ',', ' ') }}</b></td>
            <td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td></td><td><b>ИТОГО</b></td>
            <td><b>344</b></td>
            <td><b></b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh344']['fu'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh344']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh344']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh344']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh344']['fact'], 2, ',', ' ') }}</b></td>
            <td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td></td><td><b>ИТОГО</b></td>
            <td><b>346</b></td>
            <td><b></b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh346']['fu'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh346']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh346']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh346']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh346']['fact'], 2, ',', ' ') }}</b></td>
            <td></td><td></td><td></td>
        </tr>
        <tr>
            <td></td><td></td><td><b>ИТОГО</b></td>
            <td><b>310</b></td>
            <td><b></b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh310']['fu'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh310']['build'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh310']['contract'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh310']['kassa'], 2, ',', ' ') }}</b></td>
            <td><b>{{ number_format($info['ekr']['dhsh']['dhsh310']['fact'], 2, ',', ' ') }}</b></td>
            <td></td><td></td><td></td>
        </tr>
        
        @foreach ($info['info'] as $value)
            @if ($value['user']['id'] == 18)
                <tr>
                    <td>{{ $value['user']['name'] }}</td>
                    <td></td>
                    @if ($info['many_mounth'] == 'yes')
                        <td>{{ $value['work']['title'] }}</td>
                        <td>{{ $value['work']['ekr'] }}</td>
                        <td></td>
                        <td>{{ number_format($value['fu_sum'], 2, ',', ' ') }}</td>
                    @elseif ($info['many_mounth'] == 'no')
                        <input type="hidden" class="id" value="{{ $value['id'] }}">
                        <input type="hidden" class="ekr_double" value="{{ $value['work']['ekr_double'] }}">
                        <td><textarea rows='5' cols='45' type=text class='title'>{{ $value['work']['title'] }}</textarea>></td> 
                        <td><input type="text" class="ekr" value="{{ $value['work']['ekr'] }}"></td>
                        <td></td>
                        <td><input type="text" class="fu_sum" value="{{ number_format($value['fu_sum'], 2, ',', ' ') }}"></td>
                    @endif
                    <td>{{ number_format($value['build_sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['contract_sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['kassa_sum'], 2, ',', ' ') }}</td>
                    <td>{{ number_format($value['fact_sum'], 2, ',', ' ') }}</td>
                    @if ($info['many_mounth'] == 'yes')
                        <td></td><td></td><td></td>
                    @elseif ($info['many_mounth'] == 'no')
                        <td>{{ $value['number'] }}</td>
                        <td>{{ $value['period'] }}</td>
                        <td>{{ $value['creator'] }}</td>
                    @endif
                </tr>
            @endif
        @endforeach
    
    @endif
    
</table>    