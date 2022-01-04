<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../theme.css">
    <title>ورود</title>

    <style>
        .error{
            color:#eb2929;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="card login__card">
            <form method="POST" action="auth.php" class="form__container">
                <i class="fa fa-user-circle login__icon"></i> 
                <h1 class="login__title">وارد شوید</h1>
                <div class="input-container">
                    <input name="email" type="email" class="input form__inp" placeholder="ایمیل">
                    <i class="fa fa-user inp-icon"></i>
                </div>
                <div class="input-container">
                    <input name="password" type="password" class="input form__inp" placeholder="رمز عبور">
                    <i class="fa fa-lock inp-icon"></i>
                    </div>
                    <?php
                 if(isset($_SESSION['isInvalid'])){
                    echo '<span class="error">رمز عبور یا ایمیل نامعتبر است</span>';
                    }
    ?>
                <input type="submit" class="btn-fill" value="وارد شوید">
            </form>
        </div>
    </div>
    
</body>
</html>
