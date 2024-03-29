<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<div id="live_data"></div>

<script>
    $(document).ready(function(){
   
        //Подгружаем BACK шаблон отрисовки
        function fetch_data(){
            $.ajax({                
                url:"/budget/public/delo/filters/table", 
                method:"GET",
                success:function(data){  
                    $('#live_data').html(data); 
                }   
            });  
        } 
        fetch_data();
        
        //Выполняем действие (формируем таблицу) при нажатии на кнопку
        $(document).on('click', '#start', function(){
            let infomany = $('#filters').serializeArray();

            //Создаем пустые массивы
            let npa = [];
            let corr = [];
            let user = [];
            let datestart = [];
            let datestop = [];
            let type = [];
            
            //Распределяем нужные значения из формы   
            for (const item of infomany) {
                const value = item.value;
                if (item.name === 'npa') {
                    npa.push(value);
                } else if (item.name === 'user') {
                    user.push(value);
                } else if (item.name === 'correspondent') {
                    corr.push(value);
                } else if (item.name === 'datestart') {
                    datestart.push(value);
                } else if (item.name === 'datestop') {
                    datestop.push(value);
                } else if (item.name === 'type') {
                    type.push(value);
                }
            }   
            
            $.ajax({
                url:"/budget/public/delo/filters/table",  
                method:"get",
                data:{
                    npa, corr, user, datestart, datestop, type
                },
                dataType:"text",  
                success:function(data){ 
                    $('#live_data').html(data);  
                } 
            })
            
        })
              
    });
</script>


