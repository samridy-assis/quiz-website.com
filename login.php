<?php  
session_start();  

// Database connection  
$con = mysqli_connect('localhost', 'root', '', 'quizlogin');  

// Check connection  
if (!$con) {  
    die("Connection failed: " . mysqli_connect_error());  
}  

// Process login when form is submitted  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $username = mysqli_real_escape_string($con, $_POST['username']);  
    $password = mysqli_real_escape_string($con, $_POST['password']);  

    // Check if user exists in database  
    $query = "SELECT * FROM user1 WHERE username='$username'";  
    $result = mysqli_query($con, $query);  

    if (!$result) {  
        die("Query failed: " . mysqli_error($con));  
    }  

    // Fetch user data  
    if (mysqli_num_rows($result) > 0) {  
        $user = mysqli_fetch_assoc($result);  

        // Verify the hashed password  
        if (password_verify($password, $user['password'])) {   
            $_SESSION['username'] = $username;  
            header("Location: home.php");  // Redirect to home.php  
            exit();  
        } else {  
            echo "<script>alert('Invalid password'); window.location.href='login.php';</script>";  
        }  
    } else {  
        echo "<script>alert('User not found'); window.location.href='login.php';</script>";  
    }  
}  
?>

<!DOCTYPE html> 
 <html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Login Register form</title>  <!--Boxicons CDN-->  
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'   
rel='stylesheet'>  

<!--Custom CSS-->  
<link rel="stylesheet" href="style.css">

</head>  <body>  
    <div class="wrapper">  
        <span class="rotate-bg"></span>  
        <span class="rotate-bg2"></span>  
        <!--coding for login form-->  
        <div class="form-box login">  
        <h2 class="title animation" style="--i:0; --j:21">Login</h2>  
        <form action="login.php" method ="post">  
    <div class="input-box animation" style="--i:1; --j:22">  
        <input type="text" name="username" required>  
        <label for="">Username</label>  
        <i class='bx bxs-user'></i>  
    </div>  

    <div class="input-box animation" style="--i:2; --j:23">  
        <input type="password" name="password" required>  
        <label for="">Password</label>  
        <i class='bx bxs-lock-alt'></i>  
    </div>  

    <button type="submit" class="btn animation" style="--i:3; --j:24">Login</button>  
    <div class="linkTxt animation" style="--i:5; --j:25">  
                <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>  
            </div>  


</form>
    </div>  

    <div class="info-text login">  
        <h2 class="animation" style="--i:0; --j:20">Welcome to our website</h2>  
        <p class="animation" style="--i:1; --j:21"> together I turn into We  </p>  
    </div>  
   <div class="form-box register">  
    <h2 class="title animation" style="--i:17; --j:0">Sign Up</h2>  

      <!--coding for signup form-->    
      
      <form action="register.php" method="post">  
<div class="input-box animation" style="--i:18; --j:1">  
    <input type="text" name="username" required>  
    <label for="">Username</label>  
    <i class='bx bxs-user'></i>  
</div>  

<div class="input-box animation" style="--i:19; --j:2">  
    <input type="email" name="mail" required>  
    <label for="">Email</label>  
    <i class='bx bxs-envelope'></i>  
</div>  

<div class="input-box animation" style="--i:20; --j:3">  
<input type="password" name="password" required>  
<label for="">Password</label>  
<i class='bx bxs-lock-alt'></i>  
<i class='bx bx-show eye-icon' id="togglePassword"></i>

</div>  
    <button type="submit" name="sb" class="btn animation" style="--i:21;--j:4">Sign Up</button>  <div class="linkTxt animation" style="--i:22; --j:5">  
    <p>Already have an account? <a href="#" class="login-link">Login</a></p>  
</div>

</form>  
     <!--php-->  
                <?php  
                $con = mysqli_connect('localhost', 'root', '', 'quizlogin');  if(isset($_POST['sb']))  
              
            {  
             $name=$POST['name'];  
             $email=$POST['mail'];  
             $password=$POST['pass'];  
            $query="INSERT INTO user1(username,email,password)values('$usrname','$email','password')";  
            $execute=mysqli_query($con,query: $query);  
             }  
            ?>  


    </div>  

    <div class="info-text register">  
        <h2 class="animation" style="--i:17; --j:0;">test your knowledge here </h2>  
        <p class="animation" style="--i:18; --j:1;">and take one more step forward towards your goal</p>  
    </div>  

</div>  

<!--Script.js-->  
<script src="script.js">
</script>



</body>  
</html>