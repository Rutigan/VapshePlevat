<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/lab3/assets/css/main.css">
    <title>Авторизация и регистрация</title>
</head><body>
    <!-- Форма авторизации -->
    <?
if (isset($_POST['login']) && isset($_POST['password'])) {
    if (($_POST['login'] == "user") && ($_POST['password'] == "1234")){
        $logpas="admin.php";
    }
    else {$logpas="";}
}
else {$logpas="";}
?>
<form action="<?= $logpas ?>" method="post">
<label for="" >Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" id="login">
    <label for="" >Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль" id="password">
<button type="submit">Войти</button>
</form></body></html>