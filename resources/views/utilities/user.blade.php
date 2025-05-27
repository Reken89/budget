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
                url:"/budget/public/user/utilities/table",  
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
                url:"/budget/public/user/utilities/table",  
                method:"get",
                data:{
                    year, mounth
                },
                dataType:"text",  
                success:function(data){ 
                    $('#live_data').html(data);  
                    setKeydownmyForm() 
                } 
            })               
        })
        
        //Обновление статуса
        $(document).on('click', '#update_status', function(){
            let infomany = $('#status').serializeArray();
            let id_array = [];
            let status_array = [];
            let mounth_array = [];
            
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'id') {
                    id_array.push(value);
                } else if (item.name === 'status') {
                    status_array.push(value);
                } else if (item.name === 'mounth') {
                    mounth_array.push(value);
                } 
            }
            
            let id = id_array[0];
            let status = status_array[0];
            let mounth = mounth_array[0];
            
            $.ajax({
                url:"/budget/public/user/utilities/update/status",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    id, status, mounth
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




