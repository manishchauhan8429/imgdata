 <!DOCTYPE html>
 <html lang="en-US">
  <head>
    <title>home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	 
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/animate.css">
    <link rel="stylesheet" href="style/index.css">
    <script src="js/jquery.js"></script>
    <script src="js/index.js"></script>
    <script type="js/bootstrap.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/ajax_random_password.js"></script>
    <script src="js/ajax_user_check.js"></script>
    <script src="js/ajax_sign_up.js"></script>
    <script src="js/ajax_activate.js"></script>
    <script src="js/ajax_login.js"></script> 
    <!-- JavaScript Bundle with Popper -->
  </head>
<body>
 	<div class="container-fluid margin-top">
    <div class = "row">
     <div class="col-md-4 p-0 h-100 ">
        <image src="images/main_pic.jpg" class=" image shadow-lg rounded w-100 " style="height:600px;">
      </div>
      <!-- sigin code -->
     <div class="col-md-4 p-4 ">
        <h3 class="ml-2 mb-3" style="color:black">SIGN UP</h3>    
        <form autocomplete="off" id="signup-form">
            <input type="text" name="fullname" id="fullname" placeholder="ENTER YOUR NAME" required="required"><br><br>
            <div id="email-box">
              <input  type="email" name="email" id="email" placeholder="EMAIL" required="required">
              <i class="fa fa-circle-o-notch fa-spin d-none email-loader" ></i>
            </div>
              <br>
            <div id="password-box">
              <input type ="password" name="password" id="password" placeholder="ENTER YOUR PASSWORD" required="required">
              <i class="fa fa-eye show-icon" style="font-size:18px"></i>
            </div>
            <br>
              <button class="btn float-left py-2 gen" >CLICK GENERATE TO IMPROVE SECUITY</button>
              <button class="btn float-right generate-btn">GENERATE</button>
            <br><br>
              <button class="btn submit-btn my-5 btn-dark" type="submit" disabled="disabled">Register now</button>
        </form>
        <div class="signup-notice p-2"></div>
        <div class="px-2 d-none activator">
          <span>Please check your email to get activation code</span>
          <input type="text"  id="code" name="code" class="my-3" placeholder="activation code">
          <button class="btn btn-dark activate-btn">Activate now</button>
        </div>
     </div>
     <!-- login code -->
     <div class="col-md-4 px-5 py-4" >
        <h3 class="ml-2 mb-3">LOGIN</h3>
        <form autocomplete="off" id="login-form">
          <div class="email-box">
            <input type="email" name="email" id="login-email" placeholder="USERNAME" required="required">
          </div>
          <div class="possword-box">
            <input type="password" id="login-password" placeholder="PASSWORD" required="required">
            <i class="fa fa-eye login-show-icon"style="font-size:18px;"></i>
          </div>
          <button class="btn login-submit-btn btn-dark float-right" type="submit">Login now</button>
          <br>     
        </form>
        <div class="login-notice p-2"></div>
        <div class="px-2 d-none login-activator">
            <span>Please check your email to get activation code</span>
            <input type="text" placeholder="activation code" id="login-code">
            <button class="btn btn-dark login-activate-btn">Activate now</button>
        </div>
     </div>
     <!-- login end code -->
  </div>
</body>
</html>