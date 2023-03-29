<head>
    <meta charset="utf-8">
    <title>Таблица прогноза коммунальных услуг</title>
</head>

<div class="post-header">
    <div class="post-cat">
        <a href="#">Информация:</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Таблица прогноза коммунальных услуг</a>
        </h2>
    </div>
    <div class="post-meta"><b>Таблица прогноза коммунальных услуг</b></div>
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
<table class="freeze-table" width="700px">
    <thead>
        <tr>
            <th style="min-width: 100px; width: 100px;" class="col-id-no fixed-header">Тарифы</th>
            <th style="min-width: 100px; width: 100px;">Первое полугодие</th>
            <th style="min-width: 100px; width: 100px;">Второе полугодие</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td class="col-id-no">Теплоснабжение</td>
            <input type="hidden" class="id" value="{{ $info['tarrifs'][0]['id'] }}">
            <td><input type="text" class="tarrif_one" value="{{ number_format($info['tarrifs'][0]['tarrif_one'], 3, ',', ' ') }}"></td>
            <td><input type="text" class="tarrif_two" value="{{ number_format($info['tarrifs'][0]['tarrif_two'], 3, ',', ' ') }}"></td>
        </tr>
        <tr>
            <td class="col-id-no">Водоснабжение</td>
            <input type="hidden" class="id" value="{{ $info['tarrifs'][1]['id'] }}">
            <td><input type="text" class="tarrif_one" value="{{ number_format($info['tarrifs'][1]['tarrif_one'], 3, ',', ' ') }}"></td>
            <td><input type="text" class="tarrif_two" value="{{ number_format($info['tarrifs'][1]['tarrif_two'], 3, ',', ' ') }}"></td>
        </tr>
        <tr>
            <td class="col-id-no">Водоотведение</td>
            <input type="hidden" class="id" value="{{ $info['tarrifs'][2]['id'] }}">
            <td><input type="text" class="tarrif_one" value="{{ number_format($info['tarrifs'][2]['tarrif_one'], 3, ',', ' ') }}"></td>
            <td><input type="text" class="tarrif_two" value="{{ number_format($info['tarrifs'][2]['tarrif_two'], 3, ',', ' ') }}"></td>
        </tr>
        <tr>
            <td class="col-id-no">Электроснабжение</td>
            <input type="hidden" class="id" value="{{ $info['tarrifs'][3]['id'] }}">
            <td><input type="text" class="tarrif_one" value="{{ number_format($info['tarrifs'][3]['tarrif_one'], 3, ',', ' ') }}"></td>
            <td><input type="text" class="tarrif_two" value="{{ number_format($info['tarrifs'][3]['tarrif_two'], 3, ',', ' ') }}"></td>
        </tr>
        <tr>
            <td class="col-id-no">Вывоз мусора</td>
            <input type="hidden" class="id" value="{{ $info['tarrifs'][4]['id'] }}">
            <td><input type="text" class="tarrif_one" value="{{ number_format($info['tarrifs'][4]['tarrif_one'], 3, ',', ' ') }}"></td>
            <td><input type="text" class="tarrif_two" value="{{ number_format($info['tarrifs'][4]['tarrif_two'], 3, ',', ' ') }}"></td>
        </tr>
        <tr>
            <td class="col-id-no">Негативное воздействие</td>
            <input type="hidden" class="id" value="{{ $info['tarrifs'][5]['id'] }}">
            <td><input type="text" class="tarrif_one" value="{{ number_format($info['tarrifs'][5]['tarrif_one'], 3, ',', ' ') }}"></td>
            <td><input type="text" class="tarrif_two" value="{{ number_format($info['tarrifs'][5]['tarrif_two'], 3, ',', ' ') }}"></td>
        </tr>
    </tbody>
</table>    

<form id="synch" method="get"> 
    <h3>Выберите года для выполнения синхронизации</h3>   
    <p>Первое полугодие</p>
    <div>                  
        <label class="checkbox style-f">
            <input type="checkbox" name="year_one" value="2022">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2022</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="year_one" value="2023">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2023</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="year_one" value="2024">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2024</div>
        </label>                             
    </div>
    
    </br>
    <p>Второе полугодие</p>
    <div>                  
        <label class="checkbox style-f">
            <input type="checkbox" name="year_two" value="2022">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2022</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="year_two" value="2023">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2023</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="year_two" value="2024">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">2024</div>
        </label>                             
    </div>
    
    <p><input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_one" class="button5" value="Синхронизация таблиц" /></p>  
</form>  

<form id="forecast" method="get"> 
    <h3>Выберите раздел для формирования таблицы</h3> 
    
    <div>                  
        <label class="checkbox style-f">
            <input type="checkbox" name="chapter" value="heat">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Теплоснабжение</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="chapter" value="water">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Водоснабжение</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="chapter" value="drainage">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Водоотведение</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="chapter" value="energy">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Электроснабжение</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="chapter" value="trash">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Вывоз мусора</div>
        </label>
        <label class="checkbox style-f">
            <input type="checkbox" name="chapter" value="negative">
            <div class="checkbox__checkmark"></div>
            <div class="checkbox__body">Негативное воздействие</div>
        </label>   
    </div>
    
    <p><input type="button" style="width:250px;height:25px" name="formSubmit" id="btn_two" class="button5" value="Сформировать таблицу" /></p> 
</form>   

    <form action="#" method="get">
        <button type="submit" style="width:250px;height:25px" class="button5">Выгрузка в EXCEL</button>
    </form>

@php
    //var_dump($info);
@endphp