<!doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
</head>

@include('layouts.main')

<style>
    body { background: url(/budget/resources/image/dark.png); }
</style>

<div class="post-header">
    <div class="post-cat">
        <a href="#">Костомукша</a>
    </div>
    <div class="post-title">
        <h2>
            <a>Администрация Костомукшского городского округа</a>
        </h2>
    </div>
    <div class="post-meta"><b>WEB приложение</b></div>
    <div class="border">
        <span></span>
        <span></span>
    </div>
</div>

<p class="shadow text1">Выберите раздел</p>

@if ($role == "admin")
</br>
<div class = "center">
    <form action="{{ route('admincommunal')}}" method="get">
        <input type='hidden' name='year[]' value='2022'>
        <input type='hidden' name='mounth[]' value='1'>
        <button type="submit" class="custom-btn btn-16"><b>Коммунальные услуги<b></button>
    </form>
</div>

</br>
<div class = "center">
    <form action="{{ route('adminofs')}}" method="get">
        <input type='hidden' name='year[]' value='2023'>
        <input type='hidden' name='mounth[]' value='1'>
        <input type='hidden' name='user[]' value='3'>
        <input type='hidden' name='chapter[]' value='1'>
        <input type='hidden' name='info' value='no'>
        <button type="submit" class="custom-btn btn-16"><b>ОФС<b></button>
    </form>
</div>

</br>
<div class = "center">
    <form action="{{ route('adminbuild')}}" method="get">
        <input type='hidden' name='year' value='2023'>
        <input type='hidden' name='mounth[]' value='1'>
        <input type='hidden' name='variant' value='1'>
        <button type="submit" class="custom-btn btn-16"><b>Строительство<b></button>
    </form>
</div>

@elseif ($role == "user")
</br>
<div class = "center">
    <form action="{{ route('usercommunal', 2018)}}" method="get">
        <button type="submit" class="custom-btn btn-16"><b>Коммунальные услуги 2018<b></button>
    </form>
</div>

</br>
<div class = "center">
    <form action="{{ route('usercommunal', 2019)}}" method="get">
        <button type="submit" class="custom-btn btn-16"><b>Коммунальные услуги 2019</b></button>
    </form>
</div>

</br>
<div class = "center">
    <form action="{{ route('usercommunal', 2020)}}" method="get">
        <button type="submit" class="custom-btn btn-16"><b>Коммунальные услуги 2020</b></button>
    </form>
</div>

</br>
<div class = "center">
    <form action="{{ route('usercommunal', 2021)}}" method="get">
        <button type="submit" class="custom-btn btn-16"><b>Коммунальные услуги 2021</b></button>
    </form>
</div>

</br>
<div class = "center">
    <form action="{{ route('usercommunal', 2022)}}" method="get">
        <button type="submit" class="custom-btn btn-16"><b>Коммунальные услуги 2022</b></button>
    </form>
</div>

</br>
<div class = "center">
    <form action="{{ route('usercommunal', 2023)}}" method="get">
        <button type="submit" class="custom-btn btn-16"><b>Коммунальные услуги 2023</b></button>
    </form>
</div>

@elseif ($role == "cb_buh" || $role == "cb_school" || $role == "cb_kultura" || $role == "cb_kinder")
</br>
<div class = "center">
    <form action="{{ route('userofs')}}" method="get">
        <button type="submit" class="custom-btn btn-16"><b>ОФС<b></button>
    </form>
</div>

</br>
<div class = "center">
    <form action="{{ route('userbuild')}}" method="get">
        <input type='hidden' name='year' value='2023'>
        <input type='hidden' name='mounth' value='1'>
        <input type='hidden' name='variant' value='1'>
        <button type="submit" class="custom-btn btn-16"><b>Строительство<b></button>
    </form>
</div>
@endif

<div id="footer">
    <p class="script"><span>Laravel</span></p>
</div>
