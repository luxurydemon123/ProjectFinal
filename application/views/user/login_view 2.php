<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dekiru Nihongo</title>
	<link rel="stylesheet" href="<?= base_url() ?>css/signup.css">
	<link rel="stylesheet" href="fonts/font-awesome.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
    <link rel="icon" href="images/logo.png"  >

</head>
<body>

	<!-- Back Home -->
	
	

	<a href="<?php echo base_url() ?>Home" class="back-to-home-dkr d-flex align-items-center router-link-active">
		<span class="icon-back"><i aria-hidden="true" class="fa fa-arrow-left"></i></span>
		<span class="text-back">Back </span>
	</a>
   
	<h2>Login/Sign up</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="sign_up" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="username-new" placeholder="Name" required />
                <input type="email" name="email-new" placeholder="Email" required />
                <input type="password" name="password-new" placeholder="Password" required />
                <input type="password" name="repassword-new" placeholder="Re-enter Password" required />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="sign_in" method="post">
                <h1>Login</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                
                <input type="text" name="username" placeholder="Input Username"required />

                <input type="password" name="password" placeholder="Password"required />
                <a href="http://localhost:8888/Project2/Login/Forgotpassword">Forgot your password?</a>
                <button type="submit" >Log In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome to Dekiru Nihongo!</h1>
                    <img src="<?php echo base_url() ?>images/1.png" alt="">
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome to Dekiru Nihongo</h1>
                    <img src="<?php echo base_url() ?>images/1.png" alt="">
                    <p>If you don't have an account, then click on the sign up</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>


     <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add('right-panel-active');
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove('right-panel-active');
        });
    </script>

    
</body>
</html>