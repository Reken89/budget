@include('layouts.version')
<div id="live_data"></div>

<script>
    $(document).ready(function(){
        
        //Выполняем запись в БД при нажатии на клавишу ENTER
        function setKeydownmyForm() {
            $('input').keydown(function(e) {
                if (e.keyCode === 13) {
                    var tr = this.closest('tr');
                    var id = $('.id', tr).val();
                    var service = $('.service', tr).val();
                    
                    //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
                    function structure(title){
                        var volume = $(title, tr).val();
                        var volume = volume.replace(",",".");
                        var volume = volume.replace(/ /g,'');
                        return volume;
                    }
                    
                    var volume = structure('.volume');
                    var sum = structure('.sum');
                                        
                    $.ajax({
                        url:"/budget/public/user/communal/change",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, service, volume, sum
                        },
                        dataType:"text",  
                        success:function(data){ 
                            //alert(data);
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
            var mounth = form['mounth'];
            var info = form['info'];
            $.ajax({  
                url:"/budget/public/user/communal/back",  
                method:"GET",
                data:{
                    //"_token": "{{ csrf_token() }}",
                    year, mounth, info
                },
                dataType:"text",
                success:function(data){  
                    $('#live_data').html(data);  
                    setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
        
        //Выполняем действие (формируем таблицу) при нажатии на кнопку
        $(document).on('click', '#btn_one', function(){
            let infomany = $('#communal').serializeArray();
            let info = 'yes';

            //Создаем пустые массивы
            let many_year = [];
            let many_mounth = [];
            
            //Заполняем в массив year, все значения
            //из массива info, где ключ равен 'year'
            // *
            //Заполняем в массив mounth, все значения
            //из массива info, где ключ равен 'mounth'          
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'year') {
                    many_year.push(value);
                } else if (item.name === 'mounth') {
                    many_mounth.push(value);
                } 
            }   
            
            let year = many_year[0];
            let mounth = many_mounth[0];
                
            $.ajax({
                url:"/budget/public/user/communal/back",  
                method:"get",
                data:{
                    year, mounth, info
                },
                dataType:"text",  
                success:function(data){ 
                    $('#live_data').html(data);  
                    setKeydownmyForm() 
                } 
            })               
        })
        
        //Выполняем действие (запрос редактирования) при нажатии на кнопку
        $(document).on('click', '#btn_two', function(){
            let infomany = $('#update').serializeArray();
            let id_many = [];
            
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'id') {
                    id_many.push(value);
                } 
            }
            
            let id = id_many[0];
            
            $.ajax({
                url:"/budget/public/user/communal/update",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    id
                },
                dataType:"text",  
                success:function(data){  
                    alert(data);
                    fetch_data();  
                } 
            })               
        })
        
        //Выполняем действие (запрос редактирования) при нажатии на кнопку
        $(document).on('click', '#btn_three', function(){
            let infomany = $('#sending').serializeArray();
            let id_array = [];
            let year_array = [];
            let mounth_array = [];
            
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'id') {
                    id_array.push(value);
                } else if (item.name === 'year') {
                    year_array.push(value);
                } else if (item.name === 'mounth') {
                    mounth_array.push(value);
                }  
            }
            
            let id = id_array[0];
            let year = year_array[0];
            let mounth = mounth_array[0];
            
            $.ajax({
                url:"/budget/public/user/communal/sending",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    id, year, mounth
                },
                dataType:"text",  
                success:function(data){  
                    alert(data);
                    fetch_data();  
                } 
            })               
        })
        
    });
</script>


