<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<div id="live_data"></div>

<script>
    $(document).ready(function(){
        
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){  
            var form = <?=json_encode($info)?>;
            var year = form['year'];
            var mounth = form['mounth'];
            var info = form['info'];
            $.ajax({  
                url:"/budget/public/admin/dev/back",  
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
                url:"/budget/public/admin/dev/back",  
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
        
    });
</script>


