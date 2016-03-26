
<!DOCTYPE html>
<html>
<head>
  <!-- Import stylesheets at the top for better user performance -->
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title>Internet of Things</title>
</head>
<body>

  <nav class="navbar navbar-inverse navbar-static-top" style="margin-bottom:0px">
    <div class="container-fluid">

      <div class="navbar-header">   <!-- header collapse -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" 
        data-target="#top-navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">DOINAC - Internet of Things</a>
      </div>

      <div class="collapse navbar-collapse" id="top-navbar-collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="">Wiki</a>
          </li>
          <li>
            <a href="">GitHub</a>
          </li>
          <li>
            <a href="">About</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="" data-toggle="modal" data-target="#login-modal">
              <strong>Sign in</strong>
            </a>
          </li>
          <li>
            <a href="">
              <strong>Sign up</strong>
            </a>
          </li>
        </ul>
      </div>
    </div><!--/.container-fluid -->
  </nav>

<div class="jumbotron" id="home-jumbotron">
  <div class="container">
    <div class="row">
      <!-- adversting and stuff -->
      <div class="col-md-8 col1">
        <h1>Internet of Things<h1>
          <h2 style="margin-left:20px">Devices on the Internet</h2>
          <h2>for Acquistion and Control</h2>
        </div>  
        <div class="col-md-4 col2">
          <!-- Put a form here so we can use it -->
          <div class="panel panel-transparent">
            <div class="panel-heading">
              <h4>Create an account</h4>
            </div>
            <div class="panel-body">
              <form method="POST" action="scripts/signup.php" onsubmit="return validateSignUp(this)" role="form">
                <div class="form-group" id="signup-fname-group">
                  <label class="control-label" for="signup-fname" >First Name</label>
                  <label id="fname-error" class="control-label hidden" for="signup-fname" style="float:right">Please enter your first name</label>
                  <input name="signup-fname" id="signup-fname" type="text" maxlength="20" class="form-control">
                </div>
                <div class="form-group" id="signup-lname-group">
                  <label class="control-label" for="signup-lname">Last Name</label>
                  <label id="lname-error" class="control-label hidden" for="signup-lname" style="float:right">Please enter your last name</label>
                  <input name="signup-lname" id="signup-lname" type="text" maxlength="20" class="form-control">
                </div>
                 <div class="form-group" id="signup-email-group">
                  <label id="email-error" class="control-label hidden" for="signup-email" style="float:right">Email Error</label>
                  <label class="control-label" for="signup-email">Email</label>
                  <input name="signup-email" id="signup-email" type="email" maxlength="30" class="form-control">
                </div>
                <div class="form-group" id="signup-password-group">
                  <label class="control-label" for="signup-password">Password</label>
                  <label id="password-error" class="control-label hidden" for="signup-password" style="float:right">Password too short</label>
                  <input name="signup-password" id="signup-password" type="password" maxlength="25" class="form-control" placeholder="at least 6 characters" length="25">
                </div>
                <div class="form-group" id="signup-password-repeat-group">
                  <label class="control-label" for="signup-password-repeat">Repeat the password</label>
                   <label id="password-repeat-error" class="control-label hidden" for="signup-password-repeat" style="float:right">No match</label>
                  <input name="signup-password-repeat" id="signup-password-repeat" type="password" maxlength="25" class="form-control">
                </div>
                <div class="form-group">
                  <button id="signup-submit-btn" type="submit" class="btn btn-info btn-block">Create your account</button>
                </div>
                <p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
                <hr>
                <p></p>Already have an account? <a href="">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- applications and stuff -->
  <div class="container">
    <div class="row"> 
      <!-- etc. -->
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade bs-modal-sm" id="login-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          <h3><center>Sign In<center></h3>
          <br>
          <form class="form-horizontal" method="POST" action="scripts/signin.php">
            <fieldset>
              <div class="control-group">
                <label class="control-label" for="signin-email">Email</label>
                <input required="" id="signin-email" name="signin-email" type="text" class="form-control" placeholder="Enter your email" class="input-medium" required="true">
              </div>

              <div class="control-group">
                <label class="control-label" for="signin-password">Password:</label>
                <input required="" id="signin-password" name="signin-password" class="form-control" type="password" placeholder="password" class="input-medium">
              </div>

              <!-- Multiple Checkboxes (inline) -->
              <div class="control-group" style="margin-left:20px">
                <label class="control-label" for="remember-me-cb"></label>
                  <label class="checkbox inline" for="remember-me-cb-id">
                    <input type="checkbox" name="rememberme" id="remember-me-cb-id" value="Remember me">Remember me
                  </label>
              </div>
              <!-- Button -->
              <div class="control-group">
                <label class="control-label" for="signin"></label>
                <div class="controls">
                  <center>
                    <button id="signin" name="signin" class="btn btn-md btn-info">Sign In</button>
                  </center>
                </div>
              </div>
            </fieldset>
          </form>
          <br>
          <div class="modal-footer">
            <center>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </center>
          </div>
      </div>
    </div>
  </div>


  <!-- Put the script at the bottom for better performance -->
  <script src="lib/jquery-2.2.2.js" type="text/javascript" charset="utf-8"></script>
  <script src="lib/bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/home.js" type="text/javascript" charset="utf-8"></script>


</body>
</html>