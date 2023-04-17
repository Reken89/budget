<head>
    <meta charset="utf-8">
    <title>Таблица ЕНП</title>
</head>

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Таблица ЕНП</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица</b></div>
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

</br>
<h3>Загрузите файл из Digital МЭВ</h3>   
<form enctype="multipart/form-data" action="/budget/public/admin/tax/upload" method="POST">
    @csrf
    <input name="file" id="file" type="file">
    <input type="submit" id="btn_one" class="btn btn-default" value="Загрузить">
</form>

<form id="communal" method="get"> 

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

<div class="div" id="right">
    Модуль «Распределение ЕНП», разработан для загрузки «xml» файлов из системы “Digit МЭВ” на портал “Laravel”
    </br>
    </br>
    При загрузке, на портале “Laravel” отображаются значения суммы, сложенной по одинаковым «КБК», для каждого учреждения.
    </br>
    </br>
    В случае возникновения ошибки при загрузке xml файла, (<b>СТРУКТУРА</b> загружаемого файла не приемлема для фреймворка Laravel) необходимо обратиться к разработчику модуля.
</div>

@php
    $number = (count($info['info']));
    //var_dump($info);
    
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
@endphp

    <form action="/budget/public/admin/tax/export" method="get">
        <button type="submit" style="width:250px;height:25px" class="button5">Выгрузка в EXCEL</button>
    </form>

</br>
<div class="shadowbox">
    <p>Выбранный месяц: {{ $mounth[$info['mounth']] }}</p>
</div>

</br>
<table class="freeze-table" width="700px">
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Название</th>
            <th style="min-width: 200px; width: 200px;">ИНН</th>
            <th style="min-width: 200px; width: 200px;">КБК</th>
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
            <td>{{ $info['info'][$n]['inn_adb'] }}</td>
            <td>{{ number_format($info['info'][$n]['sum'], 2, ',', ' ') }}</td>
        </tr>
        @endfor
        
    </tbody>
</table>