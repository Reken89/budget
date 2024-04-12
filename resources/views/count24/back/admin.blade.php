<!-- Если первое учреждение ДХШ -->
@if($info[0]['user_id'] == "18")
    @include('count24.back.adminblock.five')
@endif

<!-- Если первое учреждение ВСОШ -->
@if($info[0]['user_id'] == "8")
    @include('count24.back.adminblock.six')
@endif