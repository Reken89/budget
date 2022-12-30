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
    </br>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="3">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Школа №1</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="4">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Школа №2</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="5">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Школа №3</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="7">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Гимназия</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="6">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Лицей</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="8">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ВСОШ</div>
    </label>
    </br>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="17">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ЦВР</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="18">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ДХШ</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="19">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ДМШ</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="16">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ДЮСШ2</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="20">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">МАиЦБ</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="21">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ЦКР</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="22">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">ЦРО</div>
    </label>
    </br>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="9">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Ауринко</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="15">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Солнышко</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="11">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Гномик</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="14">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Сказка</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="13">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Кораблик</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="12">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Золотой Ключик</div>
    </label>
    <label class="checkbox style-f">
        <input type="checkbox" name="user" value="10">
        <div class="checkbox__checkmark"></div>
        <div class="checkbox__body">Березка</div>
    </label>
</div>

</br>
<input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_one" class="button5" value="Сформировать таблицу"> 
</form>

@if ($info['info'] == "yes")

@else
</br>
<div class="shadowbox">
    <p>Выберите нужные параметры и сформируйте таблицу</p>
</div>
@endif
