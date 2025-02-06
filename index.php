<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="form" action="login.php" method="post">
        <h2 class="logintxt">LOGIN</h2>
        <?php
        if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?> </p>
        <?php   } ?>
        <label class="unameLabel" > USERNAME </label>
        <input class="unameForm" type="text" name="username" placeholder="Username"><br>
        <label class="pwordLabel" >PASSWORD</label>
        <input class="passwordForm" type="password" name="password" placeholder="Password"><br>

        <button class="loginbtn" type="submit">Login</button>
    </form>
</body>
</html>
