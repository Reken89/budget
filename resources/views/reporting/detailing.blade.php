@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){       
        //Подгружаем BACK шаблон отрисовки
        
        function fetch_data(){  
            var info = <?=json_encode($info)?>;
            var year = info['year'];
            var mounth = info['mounth'];
            var meaning = info['meaning'];           
            $.ajax({  
                url:"/budget/public/admin/reporting/detailing/back",
                method:"GET",
                data:{
                    year, mounth, meaning
                },
                dataType:"text",
                success:function(data){  
                    $('#live_data').html(data);  
                }   
            });  
        } 
        fetch_data(); 
        
        //Выполняем действие (формируем таблицу) при нажатии на кнопку
        $(document).on('click', '#btn_one', function(){
            let infomany = $('#detailing').serializeArray();

            //Создаем пустые массивы
            let year_many = [];
            let mounth_many = [];
            let meaning_many = [];
            
            //Заполняем в массив year, все значения
            //из массива info, где ключ равен 'year'
            // *
            //Заполняем в массив mounth, все значения
            //из массива info, где ключ равен 'mounth'          
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'mounth') {
                    mounth_many.push(value);
                } else if (item.name === 'year') {
                    year_many.push(value);
                } else if (item.name === 'meaning') {
                    meaning_many.push(value);
                }
            }
            
            let mounth = mounth_many[0];
            let year = year_many[0];
            let meaning = meaning_many[0];
                
            $.ajax({
                url:"/budget/public/admin/reporting/detailing/back",  
                method:"get",
                data:{
                    year, mounth, meaning
                },
                dataType:"text",  
                success:function(data){ 
                    $('#live_data').html(data);  
                } 
            })               
        })
        
        //Выполняем действие (удаляем содержимое) при нажатии на кнопку
        $(document).on('click', '#btn_two', function(){              
            $.ajax({
                url:"/budget/public/admin/reporting/detailing/delete",  
                method:"delete",
                data:{
                    "_token": "{{ csrf_token() }}"
                },
                success:function(data){
                    alert(data);
                    fetch_data();
                } 
            })               
        })
        
    });
</script>  
