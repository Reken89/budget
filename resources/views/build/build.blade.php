@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){  
            var info = <?=json_encode($info)?>;
            var year = info['year'];
            var mounth = info['mounth'];
            var variant = info['variant'];
            $.ajax({  
                url:"/budget/public/build/back",  
                method:"GET",
                data:{
                    year, mounth, variant
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
            let infomany = $('#build').serializeArray();
           
            //Создаем пустые массивы
            let mounth = [];
            let year_many = [];
            let variant_many = [];
            
            //Заполняем в массив year, все значения
            //из массива info, где ключ равен 'year'
            // *
            //Заполняем в массив mounth, все значения
            //из массива info, где ключ равен 'mounth'          
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'mounth') {
                    mounth.push(value);
                } else if (item.name === 'variant') {
                    variant_many.push(value);
                } else if (item.name === 'year') {
                    year_many.push(value);
                }
            }
            
            let variant = variant_many[0];
            let year = year_many[0];
                
            $.ajax({
                url:"/budget/public/build/back",  
                method:"get",
                data:{
                    year, mounth, variant
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
