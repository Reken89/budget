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
                    
                    var heat_one = structure('.heat_one');
                    var heat_two = structure('.heat_two');
                    var drainage_one = structure('.drainage_one');
                    var drainage_two = structure('.drainage_two');
                    var negative_one = structure('.negative_one');
                    var negative_two = structure('.negative_two');
                    var water_one = structure('.water_one');
                    var water_two = structure('.water_two');
                    var power_one = structure('.power_one');
                    var power_two = structure('.power_two');
                    var trash_one = structure('.trash_one');
                    var trash_two = structure('.trash_two');
                                        
                    $.ajax({
                        url:"/budget/public/admin/communal/updatetarrif",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, heat_one, heat_two, drainage_one,
                            drainage_two, negative_one, negative_two,
                            water_one, water_two, power_one, power_two,
                            trash_one, trash_two
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
            var year = info['year'];
            var mounth = info['mounth'];
            $.ajax({  
                url:"/budget/public/admin/communal/back",  
                method:"GET",
                data:{
                    //"_token": "{{ csrf_token() }}",
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
        
        //Выполняем действие (изменение статуса) при нажатии на кнопку
        $(document).on('click', '#btn_two', function(){
            var tr = this.closest('tr');
            var id = $('.id', tr).val();
                $.ajax({
                    url:"/budget/public/admin/communal/updatestatus",  
                    method:"patch",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        id
                    },
                    dataType:"text",  
                    success:function(data){  
                        fetch_data();  
                    } 
                })               
        })
        
        //Отправляем email при нажатии на кнопку
        $(document).on('click', '#btn_three', function(){
                $.ajax({
                    url:"/budget/public/admin/communal/email",  
                    method:"get",
                    dataType:"text",  
                    success:function(data){  
                        alert(data);
                        fetch_data();  
                    } 
                })               
        })
        
    });
</script>

