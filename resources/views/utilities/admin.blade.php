@include('layouts.version')
<div id="live_data"></div>
<script>
    $(document).ready(function(){ 
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){ 
            var form = <?=json_encode($info)?>;
            var year = form['year'];
            var mounth = form['mounth'];
            
            $.ajax({  
                url:"/budget/public/admin/utilities/table",  
                method:"GET",
                data:{
                    year, mounth
                },
                dataType:"text", 
                success:function(data){  
                    $('#live_data').html(data);  
                    //setKeydownmyForm()
                }   
            });  
        } 
        fetch_data();
        
        //Выполняем действие (формируем таблицу) при нажатии на кнопку
        $(document).on('click', '#btn_one', function(){
            let info = $('#communal').serializeArray();
           
            //Создаем пустые массивы
            let year = [];
            let mounth = [];
            
            //Заполняем в массив year, все значения
            //из массива info, где ключ равен 'year'
            // *
            //Заполняем в массив mounth, все значения
            //из массива info, где ключ равен 'mounth'          
            for (const item of info) {
                const value = item.value;
                if (item.name === 'year') {
                    year.push(value);
                } else if (item.name === 'mounth') {
                    mounth.push(value);
                }
            }            
                
            $.ajax({
                url:"/budget/public/admin/utilities/table",  
                method:"get",
                data:{
                    year, mounth
                },
                dataType:"text",  
                success:function(data){ 
                    $('#live_data').html(data);  
                    //setKeydownmyForm() 
                } 
            })               
        })
        
        //Синхронизация тарифов
        $(document).on('click', '#synch', function(){
            let info = $('#tarrifs').serializeArray();
            let year = info[0]['value'];
            let mounth = info[1]['value'];
            
            $.ajax({
                url:"/budget/public/admin/utilities/tarrifs/synch",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    year, mounth
                },
                dataType:"text",  
                success:function(data){ 
                    alert(data);
                    fetch_data();  
                } 
            })            
        })
        
        //Заглушка
        $(document).on('click', '#stop', function(){
           alert('В режиме сводной таблицы, синхронизация не возможна!');             
        })
        
    });
</script>



