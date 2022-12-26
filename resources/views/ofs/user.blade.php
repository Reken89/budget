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
                    var number = $('.number', tr).val();
                    var year = $('.year', tr).val();
                    var mounth = $('.mounth', tr).val();
                    var chapter = $('.chapter', tr).val();
                    var user_id = $('.user_id', tr).val();
                    var main_id = $('.main_id', tr).val();
                    var shared_id = $('.shared_id', tr).val();
                    
                    //Получаем значения, меняем запятую на точку и убираем пробелы в числе                   
                    function structure(title){
                        var volume = $(title, tr).val();
                        var volume = volume.replace(",",".");
                        var volume = volume.replace(" ","");
                        return volume;
                    }
                    
                    var lbo = structure('.lbo');
                    var prepaid = structure('.prepaid');
                    var credit_year_all = structure('.credit_year_all');
                    var credit_year_term = structure('.credit_year_term');
                    var debit_year_all = structure('.debit_year_all');
                    var debit_year_term = structure('.debit_year_term');
                    var fact_mounth = structure('.fact_mounth');
                    var kassa_mounth = structure('.kassa_mounth');
                    var credit_end_all = structure('.credit_end_all');
                    var credit_end_term = structure('.credit_end_term');
                    var debit_end_all = structure('.debit_end_all');
                    var debit_end_term = structure('.debit_end_term');
                    var return_old_year = structure('.return_old_year');
                                        
                    $.ajax({
                        url:"/budget/public/user/ofs/update",  
                        method:"patch",  
                        data:{
                            "_token": "{{ csrf_token() }}",
                            id, number, lbo, prepaid, credit_year_all,
                            credit_year_term, debit_year_all, debit_year_term,
                            fact_mounth, kassa_mounth, credit_end_all, credit_end_term,
                            debit_end_all, debit_end_term, return_old_year,
                            year, mounth, chapter, user_id, main_id, shared_id
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
        
        //Выполняем действие (сбрасываем значения) при нажатии на кнопку
        $(document).on('click', '#btn_one', function(){          
            var tr = this.closest('tr');
                var id = $('.id', tr).val(); 
                var number = $('.number', tr).val();
                var year = $('.year', tr).val();
                var mounth = $('.mounth', tr).val();
                var chapter = $('.chapter', tr).val();
                var user_id = $('.user_id', tr).val();
                var main_id = $('.main_id', tr).val();
                var shared_id = $('.shared_id', tr).val();
                
            $.ajax({
                url:"/budget/public/user/ofs/reset",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    id, number, year, mounth, chapter,
                    user_id, main_id, shared_id
                },
                dataType:"text",  
                success:function(data){ 
                    fetch_data();
                } 
            })               
        })
        
        //Выполняем действие (меняем статус) при нажатии на кнопку
        $(document).on('click', '#btn_three', function(){
            let user = <?=session('user') == true ? session('user') : 10?>;
            let year = <?=session('year') == true ? session('year') : 10?>;
            let mounth = <?=session('mounth') == true ? session('mounth') : 10?>;
            let chapter = <?=session('chapter') == true ? session('chapter') : 10?>;
              
            $.ajax({
                url:"/budget/public/user/ofs/stat",  
                method:"patch",
                data:{
                    "_token": "{{ csrf_token() }}",
                    user, year, mounth, chapter
                },

                success:function(data){
                    alert(data);
                    fetch_data();
                } 
            })               
        })
    
    });
</script>    

