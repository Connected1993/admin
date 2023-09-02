<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/form.css">
    <link rel="stylesheet" href="/public/library/intl-tel-input/build/css/intlTelInput.css" />
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>

    <form  id="registration"  action="/core/handler.php" method="POST" class="col-10 col-sm-4 m-auto mt-5">
        <input name="login" class="form-control form-control-sm mb-1" type="text" placeholder="login">
        <input name="password" class="form-control form-control-sm mb-1" type="password" placeholder="password">
        <input name="passwordConfirm" class="form-control form-control-sm mb-1" type="password" placeholder="confirm password">
        <input name="phone" class="form-control form-control-sm mb-1" type="tel">
        <input name="email" class="form-control form-control-sm mb-1" type="email" placeholder="email">
        <input name="action" class="form-control form-control-sm mb-1" value="registration" hidden>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
        <label class="form-check-label" for="flexCheckIndeterminate">
            Запомнить пароль
        </label>
        </div>
        <input data="reg" class="form-control form-control-sm mb-1 btn btn-outline-success" type="submit" value="Зарегистрироваться">
    </form>

    <script src="/public/js/confirm.js" type="module"></script>
    <script src="/public/js/request.js" type="module"></script>
    <script src="/public/library/intl-tel-input/build/js/intlTelInput.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>