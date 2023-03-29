@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){  
        //Выполняем запись в БД при нажатии на клавишу ENTER
        function setKeydownmyForm() {
            $('input').keydown(function(e) {
                if (e.keyCode === 13) {
                    var tr = this.closest('tr');
                    var id = $('.id', tr).val(); 
                    
                    //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
                    function structure(title){
                        var volume = $(title, tr).val();
                        var volume = volume.replace(",",".");
                        var volume = volume.replace(/ /g,'');
                        return volume;
                    }
                    
                    var tarrif_one = structure('.tarrif_one');
                    var tarrif_two = structure('.tarrif_two');
                                        
                    $.ajax({
                        url:"/budget/public/forecast/updatetarrif",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, tarrif_one, tarrif_two
                        },
                        dataType:"text",  
                        success:function(data){  
                            fetch_data(); 
                        } 
                    })                   
                }               
            })
        }
        
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){  
            var info = <?=json_encode($info)?>;
            var chapter = info['chapter'];
            
            $.ajax({  
                url:"/budget/public/forecast/back",  
                method:"get",
                data:{
                    chapter
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
            let info = $('#forecast').serializeArray();
           
            //Создаем пустые массивы
            let chapter_many = [];
            
            //Заполняем в массив year, все значения
            //из массива info, где ключ равен 'year'
            // *
            //Заполняем в массив mounth, все значения
            //из массива info, где ключ равен 'mounth'          
            for (const item of info) {
                const value = item.value;
                if (item.name === 'chapter') {
                    chapter_many.push(value);
                } 
            }
            
            let chapter = chapter_many[0];
                
            $.ajax({
                url:"/budget/public/forecast/back",  
                method:"get",
                data:{
                    chapter
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

