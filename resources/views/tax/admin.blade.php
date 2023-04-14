@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){       
        //Подгружаем BACK шаблон отрисовки
        var info = <?=json_encode($info)?>;
        var mounth = info['mounth'];
        
        function fetch_data(){              
            $.ajax({  
                url:"/budget/public/admin/tax/back",
                method:"GET",
                data:{
                    mounth
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
            let mounth_many = [];
            
            //Заполняем в массив year, все значения
            //из массива info, где ключ равен 'year'
            // *
            //Заполняем в массив mounth, все значения
            //из массива info, где ключ равен 'mounth'          
            for (const item of info) {
                const value = item.value;
                if (item.name === 'mounth') {
                    mounth_many.push(value);
                } 
            }  
            
            let mounth = mounth_many[0];
                
            $.ajax({
                url:"/budget/public/admin/tax/back",  
                method:"get",
                data:{
                    mounth
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


