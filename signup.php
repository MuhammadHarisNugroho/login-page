<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="box">
        <span class="borderLine"></span>
        <form action="login.php" method="post">
            <h2>Sign Up</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
            <?php } ?>
            <div class="inputBox">
                <input type="text" name="name" placeholder="Name">
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="uname" placeholder="User Name">
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" placeholder="Password">
                <i></i>
            </div>
            <div class="links">
                <span class="sub">Already have an account?</span>
                <a href="index.php">Sign In</a>
            </div>
            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>

</html>