<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../theme.css">
    <title>welcome admin</title>
    <style>
        .admin__login__container{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="admin__login__container">
        <div class="card login__card">
                <form action="auth.php" method="POST" class="form__container">
                    <i class="fa fa-user-circle login__icon"></i> 
                    <h1 class="login__title">ادمین خوش آمدید</h1>
                    <div class="input-container">
                        <input name="email" type="text" class="input form__inp" placeholder="نام کاربری">
                        <i class="fa fa-user inp-icon"></i>
                    </div>
                    <div class="input-container">
                        <input name="password" type="password" class="input form__inp" placeholder="رمز عبور">
                        <i class="fa fa-lock inp-icon"></i>
                        </div>
                    <input type="submit" class="btn-fill" value="وارد شوید">
                </form>
        </div>
    </div>
</body>
</html>