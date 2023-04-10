@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){   
        //Выполняем запись в БД при нажатии на клавишу ENTER
        function setKeydownmyForm() {
            $('input').keydown(function(e) {
                if (e.keyCode === 13) {
                    var td = this.closest('td');
                    var id = $('.id', td).val(); 
                    var user_id = $('.user_id', td).val();
                    var main_id = $('.main_id', td).val();
                    var shared_id = $('.shared_id', td).val();
                    
                    var tr = this.closest('tr');
                    var number = $('.number', tr).val();
                    var year = $('.year', tr).val();
                    
                    //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
                    function structure(title){
                        var volume = $(title, td).val();
                        //Меняем запятую на точку
                        //Убираем лишние пробелы
                        //Выполняем арифметические действия в строке
                        var volume = volume.replace(/\,/g,'.');
                        var volume = volume.replace(/ /g,'');
                        var volume = eval(volume);
                        return volume;
                    }
                    
                    var sum_fu = structure('.sum_fu');
                                        
                    $.ajax({
                        url:"/budget/public/admin/count/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, sum_fu, main_id, number, 
                            user_id, year, shared_id
                        },
                        dataType:"text",  
                        success:function(data){
                            fetch_data(); 
                            //alert(data);
                        } 
                    })                   
                }               
            })
        }
        
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
            let many_year = [];
            let many_variant = [];
            
            //Заполняем в массив year, все значения
            //из массива info, где ключ равен 'year'
            // *
            //Заполняем в массив mounth, все значения
            //из массива info, где ключ равен 'mounth'          
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'year') {
                    many_year.push(value);
                } else if (item.name === 'variant') {
                    many_variant.push(value);
                } 
            }   
            
            let variant = many_variant[0];
            let year = many_year[0];
                
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
        
        //Выполняем действие (синхронизация) при нажатии на кнопку
        $(document).on('click', '#btn_two', function(){              
            $.ajax({
                url:"/budget/public/admin/count/synch",  
                method:"patch",
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