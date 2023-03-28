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

<head>       
    <style>    
       #left { position: absolute; left: 0; top: 0; width: 50%; }
       #right { position: absolute; right: 0; top: 25%; width: 50%; } 
    </style>
</head>

<form id="build" method="get"> 
<h3>Выберите вариант таблицы</h3>                 
    <div>                  
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

<h3>Выберите год</h3>                 
    <div>                  
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2023">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2023</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2024">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2024</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2025">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2025</div>
        </label>                  
        <label class="checkbox style-f">
            <input type="checkbox" name="year" value="2026">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2026</div>
        </label>                 
    </div>
                         
<h3>Выберите месяц</h3>                                   
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
                         
<p><input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_one" class="button5" value="Сформировать таблицу" /></p>                     
</form>

<input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_three" class="button5" value="Свод по учреждениям"> 
</br>

<div class="div" id="right">
    <b>Значения ЭКР</b>
        </br>
    <b>241</b> - Безвозмездные перечисления (передачи) текущего характера сектора государственного управления
        </br>
    <b>414</b> - ###
        </br>
    <b>530</b> - Увеличение стоимости акций и иных финансовых инструментов
        </br>
    <b>225</b> - Работы, услуги по содержанию имущества
        </br>
    <b>226</b> - Прочие работы, услуги
        </br>
    <b>228</b> - Услуги, работы для целей капитальных вложений
        </br>
    <b>344</b> - Увеличение стоимости строительных материалов
        </br>
    <b>346</b> - Увеличение стоимости прочих материальных запасов
        </br>
    <b>310</b> - Увеличение стоимости основных средств
</div>

@if ($info['variant'] == '1')
        
@else
    </br>
    <form action="/budget/public/admin/build/export" method="get">
        <button type="submit" style="width:250px;height:25px" class="button5">Выгрузка в EXCEL</button>
    </form>
    
    </br>
<div class="shadowbox">
    <p>Год: {{ $info['year_double'] }}</p>
    <p>Месяц: {{ $info['mounth_double'] }}</p>
</div>
@endif

</br>
<table class="freeze-table" width="700px"> 
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;">Учреждение</th>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Наименование вида работ</th>
            <th style="min-width: 70px; width: 70px;">ЭКР</th>
            <th style="min-width: 70px; width: 70px;">ЭКР(II)</th>
            <th style="min-width: 200px; width: 200px;">Сумма отдела строительства</th>
            <th style="min-width: 200px; width: 200px;">Утверждено</th>
            <th style="min-width: 200px; width: 200px;">№ и дата контракта</th>
            <th style="min-width: 200px; width: 200px;">Срок исполнения</th>
            <th style="min-width: 200px; width: 200px;">Сумма МК</th>
            <th style="min-width: 200px; width: 200px;">Касса</th>
            <th style="min-width: 200px; width: 200px;">Факт</th>
            <th style="min-width: 200px; width: 200px;">Создатель записи</th>
        </tr>
    </thead>
       
    @if ($info['variant'] == '2')
        @include('build.back.adminblock.two')
    @elseif ($info['variant'] == '3')
        @include('build.back.adminblock.three')
    @elseif ($info['variant'] == '4')
        @include('build.back.adminblock.four')
    @elseif ($info['variant'] == '5')
        @include('build.back.adminblock.five')
    @elseif ($info['variant'] == '6')
        @include('build.back.adminblock.six')    
    @endif
    
</table>    