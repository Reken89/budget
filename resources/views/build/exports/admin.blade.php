<table> 
    <thead>
        <tr>
            <th style="min-width: 200px; width: 200px;">Учреждение</th>
            <th style="min-width: 200px; width: 200px;">Наименование вида работ</th>
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
        @include('build.exports.adminblock.two')
    @elseif ($info['variant'] == '3')
        @include('build.exports.adminblock.three')
    @elseif ($info['variant'] == '4')
        @include('build.exports.adminblock.four')
    @elseif ($info['variant'] == '5')
        @include('build.exports.adminblock.five')
    @elseif ($info['variant'] == '6')
        @include('build.exports.adminblock.six')    
    @endif
    
</table> 

