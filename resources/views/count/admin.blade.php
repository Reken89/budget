@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){   
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){ 
            var form = <?=json_encode($info)?>;
            var year = form['year'];
            var variant = form['variant'];
            $.ajax({  
                url:"/budget/public/admin/count/back",  
                method:"GET",
                data:{
                    year, variant
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
            let infomany = $('#count').serializeArray();

            //Создаем пустые массивы
            let year = [];
            let many_variant = [];
            
            //Заполняем в массив year, все значения
            //из массива info, где ключ равен 'year'
            // *
            //Заполняем в массив mounth, все значения
            //из массива info, где ключ равен 'mounth'          
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'year') {
                    year.push(value);
                } else if (item.name === 'variant') {
                    many_variant.push(value);
                } 
            }   
            
            let variant = many_variant[0];
                
            $.ajax({
                url:"/budget/public/admin/count/back",  
                method:"get",
                data:{
                    year, variant
                },
                dataType:"text",  
                success:function(data){ 
                    $('#live_data').html(data);  
                    setKeydownmyForm() 
                    //alert(mounth);
                } 
            })               
        })
        
        
    });
</script>