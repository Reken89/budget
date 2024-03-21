<form enctype="multipart/form-data" action="/budget/public/delo/upload" method="POST">
    @csrf
    <input name="file" id="file" type="file">
    <input type="submit" id="btn_one" class="btn btn-default" value="Загрузить">                   
</form>

