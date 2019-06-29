<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>University Sign in</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container" id="signincontainer">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../images/bg1.jpg"></figure>
                        <a href="signup.html" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login in</h2>
                        <form method="POST" class="register-form" id="login-form" action="login.php" autocomplete = "off">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" required/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- footer starts -->

    <footer class="site-footer">
        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by Scholarship Portal <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>