<head>
    <title>Бюджет 2026-2028</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style3.css') }}">
</head>

<div class="container_fix2">
    <p><b><u>Выбранный год: {{ $info['year'] }}</u></b></p>  
    <div class="table2">
        <div id="content"></div>
    </div>    
</div>

@include('layouts.version')
<script>
    $(document).ready(function(){ 
        //Выполняем запись в БД при нажатии на клавишу ENTER
        function setKeydownmyForm() {
            $('input').keydown(function(e) {
                if (e.keyCode === 13) {
                    var td = this.closest('td');
                    var id = $('.id', td).val(); 
                   
                    //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
                    function structure(title){
                        var volume = $(title, td).val();
                        //Меняем запятую на точку
                        //Убираем лишние пробелы
                        //Выполняем арифметические действия в строке
                        var volume = volume.replace(/\,/g,'.');
                        var volume = volume.replace(/ /g,'');
                        var volume = eval(volume);
                        return volume;
                    }
                    
                    var sum = structure('.sum');
                                        
                    $.ajax({
                        url:"/budget/public/admin/count25/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, sum
                        },
                        dataType:"text",  
                        success:function(data){
                            fetch_data(); 
                        } 
                    })                    
                }               
            })
        }
        
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){ 
            var form = <?=json_encode($info)?>;
            var year = form['year'];
            var variant = form['variant'];
            
            $.ajax({  
                url:"/budget/public/admin/count25/table",  
                method:"GET",
                data:{
                    year, variant
                },
                dataType:"text", 
                success:function(data){  
                    $('#content').html(data);  
                    setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
    });
</script>

