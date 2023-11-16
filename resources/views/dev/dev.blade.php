<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
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
                url:"/budget/public/admin/dev/back",  
                method:"GET",
                data:{
                    //"_token": "{{ csrf_token() }}",
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
        $(document).on('click', '#btn_one', function(){
            let infomany = $('#ofs24').serializeArray();
           
            let year = [2024];
            let info = 'yes';

            //Создаем пустые массивы
            let user = [];
            let mounth = [];
            let chapter = [];
            
            //Заполняем в массив year, все значения
            //из массива info, где ключ равен 'year'
            // *
            //Заполняем в массив mounth, все значения
            //из массива info, где ключ равен 'mounth'          
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'mounth') {
                    mounth.push(value);
                } else if (item.name === 'user') {
                    user.push(value);
                } else if (item.name === 'chapter') {
                    chapter.push(value);
                }
            }             
                
            $.ajax({
                url:"/budget/public/admin/dev/back",  
                method:"get",
                data:{
                    year, mounth, user, chapter, info
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


