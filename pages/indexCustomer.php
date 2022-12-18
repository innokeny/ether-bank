<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!-- CSS -->
        <link href="css/styles2.css"  rel="stylesheet">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="validation-form/auth.php" method="post"> <!--id="auth-form"-->
                        <div class="field input-field">
                            <input type="email" id="email" placeholder="Email" class="input" name="email-auth" > <!--required>-->
                        </div>

                        <div class="field input-field">
                            <input type="password" id="password" placeholder="Password" class="password" name="pass-auth"> <!--required>-->
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button type="submit" name="do_login">Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div>
                </div>
            </div>

            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="validation-form/check.php" method="post">
                        <div style="color: red;" name="err_signup"></div>
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input" name="email">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Create password" class="password" name="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Confirm password" class="password" name="cpassword">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button type="submit" name="do_signup">Signup</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>
            </div>  
        </section>
        <script src="js/auth1.js"></script> <!--src="auth1.js"-->
    </body>
</html>