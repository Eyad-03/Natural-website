<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signin</title>
  <link rel="stylesheet" href="../css/sign_in.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="login-container">
      <h2 class="brand">Natural<span>Website</span></h2>
      <h1>Login now</h1>
      <p>Hi, Welcome back 👋</p>
     
      <div class="divider">
        
        <span> Login with Email</span>
    
    
    </div>
<form action="../php/login_process.php" method="post" autocomplete="on">
  <div class="email-space">
    <label>Email</label>
    <input type="email" name="email" placeholder="Enter your email id" required>
  </div>

  <label>Password</label>
  <div class="password-wrapper">
    <input id="pwd" type="password" name="password" placeholder="Enter your password" required>
    <span class="toggle-icon" id="togglePwd" style="cursor:pointer">👁️‍🗨️</span>
  </div>

  <div class="options">
    <label><input type="checkbox" name="remember" value="1"> Remember Me</label>
    <a href="#">Forgot Password?</a>
  </div>

  <button type="submit" class="login-btn">Login</button>
  <p class="signup-text">Not registered yet?
    <a href="sign_up.html">Create an account <span>SignUp</span></a>
  </p>
</form>

    </div>
    <div class="illustration">
      <div class="mock-illustration">
        <!-- Replace with SVG or illustration -->
        <img src="../media/background-sign.png" alt="Illustration">
      </div>
      <button class="signup-top" onclick="window.location.href='sign_up.html'">Sign Up</button>
    </div>
  </div>


  



</body>
</html>
