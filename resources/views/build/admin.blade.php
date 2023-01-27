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
                    var ekr_double = $('.ekr_double', tr).val();
                    var title = $('.title', tr).val();
                    var ekr = $('.ekr', tr).val();
                    var fu_sum = $('.fu_sum', tr).val();
                    var fu_sum = fu_sum.replace(",",".");
                    var fu_sum = fu_sum.replace(" ","");
                                        
                    $.ajax({
                        url:"/budget/public/admin/build/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, ekr_double, title, ekr, fu_sum
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
            var variant = info['variant'];
            $.ajax({  
                url:"/budget/public/admin/build/back",  
                method:"GET",
                data:{
                    //"_token": "{{ csrf_token() }}",
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
           
            let year = 2023;

            //Создаем пустые массивы
            let mounth = [];
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
                }
            }
            
            let variant = variant_many[0];
                
            $.ajax({
                url:"/budget/public/admin/build/back",  
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

