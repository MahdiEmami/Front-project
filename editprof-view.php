<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit profile</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
    <div class="header">
        <h1><i class="fab fa-product-hunt"></i> World tour</h1>
    </div>
    <div class="card">
    <h2 class="center">Edit accound info</h2>
        <form method="POST" action="editprof-controller.php">
    <label for="userN">email</label>
    <input type="text" id="userN" placeholder="example:mahdiemami13" name="email">
    <label for="pass">password</label>
    <input type="password" id="pass" placeholder="enter your psword here" name="password">
    <label for="pass">Confirm your password</label>
    <input type="password" id="pass" placeholder="Confirm your password here" name="confpass">
    <input type="submit" class="btn" name="submit">
        </form>
    </div>

</body>
</html>