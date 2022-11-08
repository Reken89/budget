<html lang="en">
    @extends('layouts.main')
    @include('layouts.main') 
<head>
    <title>Laravel Ajax jquery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

<div class="container panel panel-default ">
        <h2 class="panel-heading">Laravel Ajax</h2>
    <form id="contactForm">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="введите имя" id="name">
        </div>

        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Введите Email" id="email">
        </div>

        <div class="form-group">
            <input type="text" name="mobile_number" class="form-control" placeholder="Введите номер телефона" id="mobile_number">
        </div>

        <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Введите тему" id="subject">
        </div>

        <div class="form-group"> 
          <textarea class="form-control" name="message" placeholder="Сообщение" id="message"></textarea>
        </div>
        <div class="form-group">
            <input type="button" name="formSubmit" id="submit" class="btn btn-success" value="Отправить">

        </div>
    </form>
</div>

    <script>
        $(document).ready(function(){
            $(document).on('click', '#submit', function(){

            let name = $('#name').val();
            let email = $('#email').val();
            let mobile_number = $('#mobile_number').val();
            let subject = $('#subject').val();
            let message = $('#message').val();
    
            $.ajax({  
                url:"/budget/public/contact",  
                method:"POST",  
                data:{
                    "_token": "{{ csrf_token() }}",
                    name:name, email:email, mobile_number:mobile_number, subject:subject, message:message 
                },
                dataType:"text",  
                success:function(data)  
                {  
                    alert(data);
                    fetch_data();  
                }  
           })
           })
        }); 
    </script>
</body>
</html>

