<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google fonts link-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sign-up form</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1 class="logo-text"><span>NSUer's</span> Blogs</h1>
        </div>
        <i class="fa fa-bars menu-shift"></i>
        <ul class="nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Service</a></li>
        </ul>
    </header>

    <!--sign up form starts-->
    <div class="signup-content">
        <form action="signup.html">
            <h2 class="form-title">Register</h2>

            <!-- <div class="msg success error">
                <li>Username Required</li>
            </div>-->
            <div>
                <label>Username</label>
                <input type="text" name="username" class="text-input">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" class="text-input">
            </div>
            <div>
                <label>Password Confirmtion</label>
                <input type="password" name="passwordConf" class="text-input">
            </div>
            <div>
                <button type="submit" name="signup-btn" class="btn btn-big">Sign Up</button>
            </div>
            <p>Or <a href="login.html">Log in</a> </p>
        </form>
    </div>
    <!--sign up form end-->

</body>

</html>