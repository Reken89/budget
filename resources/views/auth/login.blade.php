<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<title>Аутентификация</title>

<style>
    .form-container{
        background: #ecf0f3;
        font-family: 'Nunito', sans-serif;
        margin-top: 20%;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
    }

    .form-container .form-icon{
        color: #696969;
        font-size: 55px;
        text-align: center;
        line-height: 100px;
        width: 100px;
        height:100px;
        margin: 0 auto 15px;
        border-radius: 50px;
        box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px #fff;
    }

    .form-container .title{
        color: #696969;
        font-size: 25px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-align: center;
        margin: 0 0 20px;
    }

    .form-container .form-horizontal .form-group{ margin: 0 0 25px 0; }

    .form-container .form-horizontal .form-group label{
        font-size: 15px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .form-container .form-horizontal .form-control{
        color: #333;
        background: #ecf0f3;
        font-size: 15px;
        height: 50px;
        padding: 20px;
        letter-spacing: 1px;
        border: none;
        border-radius: 50px;
        box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
        display: inline-block;
        transition: all 0.3s ease 0s;
    }

    .form-container .form-horizontal .form-control:focus{
        box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
        outline: none;
    }

    .form-container .form-horizontal .form-control::placeholder{
        color: #808080;
        font-size: 14px;
    }

    .form-container .form-horizontal .btn{
        color: #000;
        background-color: #696969;
        font-size: 15px;
        font-weight: bold;
        text-transform: uppercase;
        width: 100%;
        padding: 12px 15px 11px;
        border-radius: 20px;
        box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px #fff;
        border: none;
        transition: all 0.5s ease 0s;
    }

    .form-container .form-horizontal .btn:hover,
    .form-container .form-horizontal .btn:focus{
        color: #fff;
        letter-spacing: 3px;
        box-shadow: none;
        outline: none;
    }
</style>

<div class="container-fluid">
    <div class="col-md-4 offset-md-4">
        <div class="form-container">
            <div class="form-icon"><i class="fa fa-user"></i></div>
            <h3 class="title">Вход в личный кабинет</h3>
            <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label>Учетная запись</label>
                    <input id="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Введите Вашу электронную почту">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input id="password" type="password" class="form-control" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Введите Ваш пароль">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input type="submit" class="btn btn-default" value="Войти">
            </form>
        </div>
    </div>
</div>