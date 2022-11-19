@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){
        
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){  
            var info = <?=json_encode($info)?>;
            var year = info['year'];
            var mounth = info['mounth'];
            $.ajax({  
                url:"/budget/public/admin/communal/back",  
                method:"GET",
                data:{
                    "_token": "{{ csrf_token() }}",
                    year, mounth
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
                url:"/budget/public/admin/communal/back",  
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
        
    });
</script>

