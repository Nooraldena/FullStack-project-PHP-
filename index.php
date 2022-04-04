<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" href="./login.css">
</head>
<body>
    
    <section id="header">
            <div class="brand">
              <a href="#hero">
                <h1><span>@</span>Noor <span>@</span>ALDEN</h1>
              </a>
            </div>     
      </section>
      <h2>Sign Up if you dont have account</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="username" required/>
			<input type="email" placeholder="Email"  name="email" required  />
			<input type="password" placeholder="Password"  name="password"required />
			<button  name="signup" >Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="POST" >
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" name="username" placeholder="Username" required />
			<input  name="password"  type="password" placeholder="Password" required />
			<a href="#">Forgot your password?</a>
			<button name="login" >Sign In</button>
		</form>
	</div>

	<style>
		
@media only screen and (max-width: 728px){
	.container{
		width: 150rem;
		text-align: left;
		background-color: white;
		
	}
	.container input{
		width: 10rem;
		color: red;
	}
	.container button{
		margin: top 5rem;
	}
	.container form{
		margin-top:-10px;
		
	}

	.container h1{
		font-size:10px
	}
	p{
		display:none;
	}
	.social-container{
		display:none

	}
	h2{
		font-size:12px
	}
	button{
		font-size:10px
	}
}
	

</style>

	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://www.instagram.com/nooralden.khalayle/">NoorAlden</a>
			عملت هذه الصفحه انا الرجاء التزام القوانين حقوق الطبيع محفوظه ("نور الدين خالد خلايله")
		<a target="_blank" href="https://www.facebook.com/zenkrem/">here</a>.
	</p>
	<h4>
		حقوق النشر محفوظه (نور الدين خلايله) الرجاء الالتزام بلقوانين
	</h4>
</footer>
<script type="text/javascript" src="app.js"></script>


<?PHP

//هنا اضفنا داه شرط للتحقق من زر 
include 'formsignUp.php';
include 'formLogin.php';

?>
<script type="text/javascript" src="Login.js"></script>

</body>
</html>
