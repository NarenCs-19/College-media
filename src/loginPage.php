<!DOCTYPE html>
<html>
    <head>
        <title>Project#01</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/loginPage.css">
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"crossorigin="anonymous"></script>
        <script type="text/javascript" src="../assets/js/jquery-3.6.0.min.js"crossorigin="anonymous"></script>
    </head>
    <body>
        <!----------------Main Container--------------------->
        <div class="container-fluid">
            <div class="row">
                <!--------------Overlay--------------------->
                <div class="panel-left col-sm-6" id="panel-left">
                    <div class="panel-content">
                        <h2 class="text-center mb-4 text-white text-uppercase">Welcome</h2>
                        <div class="login-nav text-center">
                            <button class="btn btn-outline-light bg-transaparent" onclick="login_toggle()">Login</button>
                            <button class="btn btn-outline-light bg-transaparent">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="panel-right col-sm-6" id="panel-right">
                    <div class="panel-content m-auto">
                        <h2 class="text-center mb-4 text-white text-uppercase">Welcome</h2>
                        <div class="signup-nav text-center">
                            <button class="btn btn-outline-light bg-transaparent" onclick="signup_toggle()">Signup</button>
                            <button class="btn btn-outline-light bg-transaparent">Cancel</button>
                        </div>
                    </div>
                </div>                
                <!--------------Overlay--------------------->

                <!----------------Login--------------------->
                <div class="form-container col-sm-6 login-container">
                    <div class="login-form m-auto align-items-center" id="login-form">
                        <form id="login" onsubmit="return false;">
                            <div class="login-logo mb-4 text-center">
                                <img src="../assets/Images/login-logo.png" width="40%">
                            </div>
                            <div class="error_msg text-center mb-3">Error message</div>
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white">
                                    <img src="../assets/bootstrap-icons-1.4.1/person-fill.svg">
                                </span>
                                <input type="text" name="username" class="form-control input_user" placeholder="">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text bg-white">
                                    <img src="../assets/bootstrap-icons-1.4.1/lock-fill.svg">
                                </span>
                                <input type="password" name="password" class="form-control input_pass" placeholder="">
                                <!---------------------paswword-eye-icon---------------------------->

                                <button class="input-group-text bg-white pwd-show-icon" style="z-index: 10;">
                                    <img src="../assets/bootstrap-icons-1.4.1/eye-fill.svg">
                                </button>

                                <!-----------------------paswword-eye-icon---------------------------->
                            </div>
                            <div class="submit-btn text-center mb-3">
                                <button class="btn text-white px-4">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="#" class="text text-decoration-none">Forget Password?</a><br>
                                <a class="text nav-link" onclick="signup_toggle()">Haven't signed in yet? Signup</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!----------------Login--------------------->

                <!----------------signup--------------------->
                <div class="form-container col-sm-6 signup-container">
                    <div class="signup-form m-auto" id="signup-form">
                        <form id="signup" onsubmit="return false;">
                            <div class="signup-logo mb-3 text-center">
                                <img src="../assets/Images/signup-logo.png" width="40%">
                            </div>
                            <div class="error_msg text-center mb-3">Error message</div>
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white">
                                    <img src="../assets/bootstrap-icons-1.4.1/person-fill.svg">
                                </span>
                                <input type="text" name="username" class="form-control input_user" placeholder="Enter a username">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white">
                                    <img src="../assets/bootstrap-icons-1.4.1/lock-fill.svg">
                                </span>
                                <input type="password" name="password" class="form-control input_pass" id="input_pass"placeholder="Enter a password">
                                <!---------------------paswword-eye-icon-------------------------->

                                <button class="input-group-text bg-white pwd-show-icon"  style="z-index: 10;">
                                    <img src="../assets/bootstrap-icons-1.4.1/eye-fill.svg">
                                </button>

                                <!---------------------paswword-eye-icon---------------------------->
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white">
                                    <img src="../assets/bootstrap-icons-1.4.1/lock-fill.svg">
                                </span>
                                <input type="password" name="conf_password" class="form-control input_pass" placeholder="Confirm password">
                                <!---------------------paswword-eye-icon---------------------------->

                                <button class="input-group-text bg-white pwd-show-icon" style="z-index: 10;">
                                    <img src="../assets/bootstrap-icons-1.4.1/eye-fill.svg">
                                </button>

                                <!---------------------paswword-eye-icon---------------------------->
                            </div>
                            <div class="submit-btn text-center mb-3">
                                <button class="btn text-white px-4">Signup</button>
                            </div>
                            <div class="text-center">
                                <a href="#" class=" text nav-link" onclick="login_toggle()">Already have an account? Login</a>
                                <span class="text"><hr>Or Signup using</span>
                            </div>
                            <div class="social-media text-center">
                                <!-- Facebook -->
                                <a class="btn btn-floating m-1" href="#!" role="button">
                                    <img src="../assets/Images/social-media-icons/facebook.png">
                                </a>
                                  
                                <!-- Instagram -->
                                <a class="btn btn-floating m-1" href="#!" role="button">
                                    <img src="../assets/Images/social-media-icons/instagram.png">
                                </a>
                      
                                <!-- LinkedIn -->
                                <a class="btn btn-floating m-1" href="#!" role="button">
                                    <img src="../assets/Images/social-media-icons/linkedin.png">
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!----------------signup--------------------->

            </div>
        </div>
        <!----------------Main Container--------------------->
        <script type="text/javascript" src="../JS/login-panel-toggle.js"></script>
        <script type="text/javascript" src="../JS/password-show-hide.js"></script>       
        <script type="text/javascript" src="../JS/Signup.js"></script>    
        <script type="text/javascript" src="../JS/Login.js"></script> 
    </body>
</html>