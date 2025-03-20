@include('layouts.version')
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
                        url:"/budget/public/forecast25/update",  
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
            var title = info['title'];

            $.ajax({                
                url:"/budget/public/forecast25/back",
                method:"get",
                data:{
                    title
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
            let info = $('#forecast').serializeArray();
           
            //Создаем пустой массив
            let title_many = [];
            
            //Заполняем в массив title_many, все значения
            //из массива info, где ключ равен 'title'          
            for (const item of info) {
                const value = item.value;
                if (item.name === 'title') {
                    title_many.push(value);
                } 
            }
            
            let title = title_many[0];
                
            $.ajax({
                url:"/budget/public/forecast25/back",  
                method:"get",
                data:{
                    title
                },
                dataType:"text",  
                success:function(data){ 
                    $('#live_data').html(data);  
                    setKeydownmyForm() 
                } 
            })               
        })
        
        //Выполняем синхронизацию таблиц
        $(document).on('click', '#btn_two', function(){               
            $.ajax({
                url:"/budget/public/forecast25/synch",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
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




