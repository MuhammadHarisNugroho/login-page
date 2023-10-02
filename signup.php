<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <span class="borderLine"></span>
        <form action="signup-check.php" method="post">
            <h2>Sign Up</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success">
                    <?php echo $_GET['success']; ?>
                </p>
            <?php } ?>
            <div class="inputBox">
                <?php if (isset($_GET['name'])) { ?>
                    <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
                <?php } else { ?>
                    <input type="text" name="name" placeholder="Name"><br>
                    <?php } ?>
                <i></i>
            </div>
            <div class="inputBox">
            <?php if (isset($_GET['uname'])) { ?>
                <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?><input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
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