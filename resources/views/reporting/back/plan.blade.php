@include('layouts.main')
<head>
    <meta charset="utf-8">
    <title>Исполнение бюджета</title>
</head>

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Исполнение бюджета</a>
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
<h3>Загрузите файл для диаграммы "Кассовый план"</h3>   
<form enctype="multipart/form-data" action="/budget/public/admin/plan/upload" method="POST">
    @csrf
    <input name="file" id="file" type="file">
    <input type="submit" id="btn_one" class="btn btn-default" value="Загрузить">
    
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
             
</form>

<div class="div" id="right">
    Модуль «Исполнение бюджета», разработан для загрузки excel таблиц из системы “АС Бюджет” для последующей автоматической отрисовки диаграмм
    </br>
    </br>
    При загрузке, внимательно выбирайте разделы, только после выбора разделов нажимайте кнопку загрузить
    </br>
    </br>
    В случае обнаружения ошибки в таблице excel, Laravel сообщит Вам об этом.
</div>

</br>
<div class="shadowbox">
    <p>Таблица с информацией о наличие загруженных сведений</p>
</div>

</br>
<table class="freeze-table" width="700px">
    
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;" class="col-id-no fixed-header">Год/месяц</th>
            <th style="min-width: 100px; width: 100px;">январь</th>
            <th style="min-width: 100px; width: 100px;">февраль</th>
            <th style="min-width: 100px; width: 100px;">март</th>
            <th style="min-width: 100px; width: 100px;">апрель</th>
            <th style="min-width: 100px; width: 100px;">май</th>
            <th style="min-width: 100px; width: 100px;">июнь</th>
            <th style="min-width: 100px; width: 100px;">июль</th>
            <th style="min-width: 100px; width: 100px;">август</th>
            <th style="min-width: 100px; width: 100px;">сентябрь</th>
            <th style="min-width: 100px; width: 100px;">октябрь</th>
            <th style="min-width: 100px; width: 100px;">ноябрь</th>
            <th style="min-width: 100px; width: 100px;">декабрь</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <th>2023 год</th>
            @php              
                $mounth = ["red", "red", "red", "red", "red", "red", "red", "red", "red", "red", "red", "red", "red"];
            @endphp
                @foreach ($info as $value)
                    @for ($m = 1; $m < 13; $m++)
                        @if ($value['year'] == '2023' && $value['mounth'] == $m)
                            @php
                                $mounth[$m] = "green";
                            @endphp    
                        @endif
                    @endfor    
                @endforeach
            <th bgcolor="{{ $mounth[1] }}"></th>   
            <th bgcolor="{{ $mounth[2] }}"></th>
            <th bgcolor="{{ $mounth[3] }}"></th>
            <th bgcolor="{{ $mounth[4] }}"></th>
            <th bgcolor="{{ $mounth[5] }}"></th>
            <th bgcolor="{{ $mounth[6] }}"></th>
            <th bgcolor="{{ $mounth[7] }}"></th>
            <th bgcolor="{{ $mounth[8] }}"></th>
            <th bgcolor="{{ $mounth[9] }}"></th>
            <th bgcolor="{{ $mounth[10] }}"></th>
            <th bgcolor="{{ $mounth[11] }}"></th>
            <th bgcolor="{{ $mounth[12] }}"></th>
        </tr>  
    </tbody>
</table>    

