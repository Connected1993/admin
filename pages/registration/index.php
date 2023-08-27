<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>

    <form action="/core/handler.php" method="POST" class="col-10 col-sm-6 m-auto mt-5">
        <input name="login" class="form-control form-control-sm mb-1" type="text" placeholder="login">
        <input name="password" class="form-control form-control-sm mb-1" type="password" placeholder="password">
        <input name="passwordConfirm" class="form-control form-control-sm mb-1" type="password" placeholder="confirm password">
        <input name="phone" class="form-control form-control-sm mb-1" type="number" placeholder="phone">
        <input name="email" class="form-control form-control-sm mb-1" type="email" placeholder="email">
        <input name="action" class="form-control form-control-sm mb-1" value="registration" hidden>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
        <label class="form-check-label" for="flexCheckIndeterminate">
            Запомнить пароль
        </label>
        </div>
        <input class="form-control form-control-sm mb-1 btn btn-outline-success" type="submit">
    </form>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>