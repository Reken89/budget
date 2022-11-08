@include('layouts.main')
<div id="live_data"></div>

<script>
    $(document).ready(function(){
        function fetch_data(){              
            let year ='<?= $year ?>';
            $.ajax({  
                url:"/budget/public/user/communal/back",  
                method:"GET",
                data:{
                    //"_token": "{{ csrf_token() }}",
                    year:year
                },
                dataType:"text",
                success:function(data){  
                    $('#live_data').html(data);  
                    setKeydownmyForm()
                }   
            });  
        } 
     fetch_data(); 
    });
</script>    


