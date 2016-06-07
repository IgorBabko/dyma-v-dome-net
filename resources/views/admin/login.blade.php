<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">@include ('partials.styles')
    <title>dyma_v_dome_net</title>
    <style>
        html,
        body {
            width: 100vw;
            height: 100vh;
        }
        .admin input {
            border: none;
        }
    </style>
</head>

<body class="admin" style="display: flex; justify-content: center; align-items: center">
    <div>
        <h3 class="feature_title" style="margin: 0"><span style="color: white; text-transform: uppercase"><a href="/">Тепло</span><b style="text-transform: uppercase; color: #EE8B24">Квартал</b></a></h3>
        <div class="divider" style="margin: 10px auto"></div>
        <h4 style="color: white; text-align: center; margin: 20px auto">Админка</h4>
        <div class="{{ !count($errors) ? 'hidden' : '' }}" style="margin: 10px 0; font-weight: bold; font-size: 22px; color: #FF3A3A; text-align: center">Неверные данные</div>
        <form style="margin: 0 auto; width: 250px" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="exampleInputPassword3" placeholder="Пароль">
            </div>
            <button type="submit" style="width: 100%; font-weight: bold" class="btn btn-warning">Войти</button>
        </form>
    </div>
</body>

</html>
