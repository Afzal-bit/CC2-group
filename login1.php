<?php
session_start();
include_once('classes/User.php');  
   
$user = new User();  
 
if(isset($_POST['login'])){ 

$emailLog=$_POST['email_log'];
$passwordLog=$_POST['password_log'];
if(empty($_POST['email_log']) || empty($_POST['password_log'])){
echo "<script>alert('Please fill all fields!')</script>";
}else{
$user->setEmail($emailLog);
$user->setPassword($passwordLog);
$login = $user->Login();
if(!$login){
    echo "<script>alert('Incorrect email or password')</script>";
}else if($login!=null){

            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $login['Name'];
            $_SESSION['email'] = $login['Email'];
            $_SESSION['id'] = $login['Id'];
            $_SESSION['level'] = $login['Level'];
            if ($login['Level']=='Admin') {
                   
              header("location:admin.php");  
            }else if($login['Level']=='Buyer') { 
              header("location:buyer.php");
           }else if($login['Level']=='Seller'){
            header("location:sellerDashboard.php");
           }
}
}
}else if(isset($_POST['register'])){
    $email=$_POST['email'];
	$name=$_POST['name'];
	$password=$_POST['new_pass'];
	$confirmpassword=$_POST['con_pass'];
    $phone=$_POST['phone'];
	$level=$_POST["userType"];
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['new_pass']) || empty($_POST['con_pass']) || empty($_POST['phone']) ){
	echo "<script>alert('Please fill all fields!')</script>";
	}else{
		
		if($confirmpassword===$password){
		$user->setName($name);
        $user->setEmail($email);
		$user->setLevel($level);
        $user->setPassword($password);
        $user->setPhone($phone);
        $register = $user->userRegistration();
	if (!$register) { 
	echo "<script>alert('Email already exists')</script>";
            
        } else if($register!=null) {
                session_regenerate_id();
                $_SESSION['loggedin'] = true;
				$_SESSION['name'] = $register['Name'];
                $_SESSION['email'] = $register['Email'];
				$_SESSION['id'] = $register['Id'];
                $_SESSION['level'] = $register['Level'];
        if ($register['Level']=='Admin') {
           			
            header("location:admin.php");  
        }else if($register['Level']=='Buyer') { 
		    header("location:buyer.php");
		}else if($register['Level']=='Seller') { 
		    header("location:sellerDashboard.php");
		}			
              
        }
	
	
	}else{
		echo "<script>alert('Passwords do not match')</script>";
	}
	}

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>SignUp and Login</title>
    <link rel="stylesheet" type="text/css" href="css/login1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    
    
    

    <div class="container" id="container">
        <div class="form-container sign-up-container">

            <form action="" method="post">
                <h1>Create Account</h1>
                <!--
                <div class="social-container">
                  
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
               
                </div>
                <span>or use your email for registration</span>-->
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="new_pass" id="new_pass" placeholder="Password" maxlength="20">
                <input type="password" name="con_pass" id="confirm_pass" placeholder="ConfirmPassword" maxlength="20">
                <div class="registrationFormAlert" id="divCheckPasswordMatch">
                  
                </div>
                <input type="text" name="phone" placeholder="Phone">
                <div class="radio-group">
                                I am a : 

                                <label class="radio-inline">
                                <input type="radio" id="r1" name="userType" checked value="Buyer">Buyer
                              </label> 

                                <label class="radio-inline">
                                <input type="radio" id="r2" name="userType" value="Seller">Seller
                              </label>

                </div>
                
                <input type="submit" name="register" value="Register">
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="" method="post">
                <h1>Sign In</h1>
                <!--
                <div class="social-container">
                   
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                   
                </div>
                <span>or use your account</span>-->
                <input type="email" name="email_log" placeholder="Email">
                <input type="password" name="password_log" placeholder="Password">
                <a href="#">Forgot Your Password</a>

                <input type="submit" name="login" value="Login">
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello!</h1>
                    <p>Enter your details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/login.js"></script>

</body>

</html>
