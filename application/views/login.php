<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In CANSHOP</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/fonts/material-icon/css/material-design-iconic-font.min.css');?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>">
</head>
<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="register-form" action="<?php echo base_url('login/do_login');?>">
                            <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Your Email" required autofocus/>
                            </div>
                            <div class="form-group">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Log In"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url('/assets/images/signin-image.jpg');?>" alt="sing up image"></figure>
                        <a href="<?php echo base_url('login/daftar');?>" class="signup-image-link">Not yet a member? Register</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url('/assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('/assets/js/main.js');?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>