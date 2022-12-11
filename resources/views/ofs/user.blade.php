@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){ 
            var form = <?=json_encode($info)?>;
            var year = form['year'];
            var mounth = form['mounth'];
            var user = form['user'];
            var chapter = form['chapter'];
            var info = form['info'];
            $.ajax({  
                url:"/budget/public/user/ofs/back",  
                method:"GET",
                data:{
                    year, mounth, user, chapter, info
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
        $(document).on('click', '#btn_two', function(){
            let infomany = $('#ofs').serializeArray();
           
            let year = 2023;
            let info = 'yes';

            //Создаем пустые массивы
            let user_many = [];
            let mounth_many = [];
            let chapter_many = [];
            
            //Заполняем в массив year, все значения
            //из массива info, где ключ равен 'year'
            // *
            //Заполняем в массив mounth, все значения
            //из массива info, где ключ равен 'mounth'          
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'mounth') {
                    mounth_many.push(value);
                } else if (item.name === 'user') {
                    user_many.push(value);
                } else if (item.name === 'chapter') {
                    chapter_many.push(value);
                }
            }
            
            let mounth = mounth_many[0];
            let user = user_many[0];
            let chapter = chapter_many[0];
                
            $.ajax({
                url:"/budget/public/user/ofs/back",  
                method:"get",
                data:{
                    mounth, user, chapter, year, info
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

