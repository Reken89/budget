<!-- Если первое учреждение Закупки -->
@if($info[0]['user_id'] == "26")
    @include('count24.back.adminblock.three')
@endif

<!-- Если первое учреждение ДС Ауринко -->
@if($info[0]['user_id'] == "9")
    @include('count24.back.adminblock.four')
@endif

<!-- Если первое учреждение ДХШ -->
@if($info[0]['user_id'] == "18")
    @include('count24.back.adminblock.five')
@endif

<!-- Если первое учреждение ВСОШ -->
@if($info[0]['user_id'] == "8")
    @include('count24.back.adminblock.six')
@endif

<!-- Если первое учреждение КУМС -->
@if($info[0]['user_id'] == "23")
    @include('count24.back.adminblock.seven')
@endif