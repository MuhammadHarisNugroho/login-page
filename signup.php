<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #23242a;
    flex-direction: column;
}

.box {
    position: relative;
    width: 380px;
    height: 420px;
    background: #1c1c1c;
    border-radius: 8px;
    overflow: hidden;
}

.box::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}

.box::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
}

.borderLine {
    position: absolute;
    top: 0;
    inset: 0;
}

.borderLine::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,transparent,#ff2770,#ff2770,#ff2770);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -1.5s;
}

.borderLine::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,transparent,#ff2770,#ff2770,#ff2770);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -4.5s;
}
@keyframes animate {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
.box form {
    position: absolute;
    inset: 4px;
    background: #222;
    padding: 50px 40px;
    border-radius: 8px;
    z-index: 2;
    display: flex;
    flex-direction: column;
}

.box h2 {
    color: #fff;
    font-weight: 500;
    text-align: center;
    letter-spacing: 0.1em;
    margin-top: -15px;
}

.box form .inputBox {
    position: relative;
    width: 300px;
    margin-top: 10px;
}

.box form .inputBox input {
    position: relative;
    width: 100%;
    padding: 20px 10px 10px;
    background: transparent;
    outline: none;
    border: none;
    box-shadow: none;
    color: #23242a;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
    z-index: 10;
}

.box form .inputBox span {
    position: absolute;
    left: 0;
    padding: 20px 0px 10px;
    pointer-events: none;
    color: #8f8f8f;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
}

.box form .inputBox input:valid ~ span,
.box form .inputBox input:focus ~ span {
    color: #fff;
    font-size: 0.75em;
    transform: translateY(-34px);
}

.box form .inputBox i {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #fff;
    border-radius: 4px;
    overflow: hidden;
    transition: 0.5s;
    pointer-events: none;
}

.box form .inputBox input:valid ~ i,
.box form .inputBox input:focus ~ i {
    height: 44px;
}

.box form .links {
    display: flex;
    justify-content: space-between;
}

.box form .links a {
    margin: 10px 0;
    font-size: 0.75em;
    color: #8f8f8f;
    text-decoration: none;
}

.sub {
    margin: 10px 0;
    color: #fff;
    font-size: 0.75em;
    text-decoration: none;
}

.success {
    background: #D4EDDA;
    color: #40754C;
    padding: 3px 10px;
    width: 95%;
    border-radius: 5px;
    margin: 5px auto;
    margin-bottom: -5px;
 }

.box form .links a:hover,
.box form .links a:nth-child(2) {
    color: #fff;
}

.box form input[type="submit"] {
    border: none;
    outline: none;
    padding: 9px 25px;
    background: #fff;
    cursor: pointer;
    font-size: 0.9em;
    border-radius: 4px;
    font-weight: 600;
    width: 100px;
    margin-top: 10px;
}

.box form .inputBox input[type="submit"]:active {
    opacity: 0.8;
}

.error {
    background: #F2DEDE;
    color: #A94442;
    padding: 5px;
    width: 80%;
    height: 20%;
    border-radius: 5px;
    margin: 5px auto;
 }
 
 h1 {
     text-align: center;
     color: #fff;
 }
 
 .logout-button a {
     float: right;
     background: #555;
     padding: 10px 15px;
     color: #fff;
     border-radius: 5px;
     margin-right: 10px;
     border: none;
     text-decoration: none;
 }
 .logout-button a:hover{
     opacity: .8;
 }
    </style>
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