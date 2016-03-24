
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
              <form method="POST" action="scripts/signup.php" role="form">
                <div class="form-group">
                  <label class="control-label" for="signupFName">First Name</label>
                  <input name="signupFName" id="signupFName" type="text" maxlength="50" class="form-control">
                </div>
                <div class="form-group">
                  <label class="control-label" for="signupLName">Last Name</label>
                  <input id="signupLName" type="text" maxlength="50" class="form-control">
                </div>
                <div class="form-group">
                  <label class="control-label" for="signupEmail">Email</label>
                  <input id="signupEmail" type="email" maxlength="50" class="form-control">
                </div>
                <div class="form-group">
                  <label class="control-label" for="signupPassword">Password</label>
                  <input id="signupPassword" type="password" maxlength="25" class="form-control" placeholder="at least 6 characters" length="40">
                </div>
                <div class="form-group">
                  <label class="control-label" for="signupPasswordagain">Password again</label>
                  <input id="signupPasswordagain" type="password" maxlength="25" class="form-control">
                </div>
                <div class="form-group">
                  <button id="signupSubmit" type="submit" class="btn btn-info btn-block">Create your account</button>
                </div>
                <p class="form-group" style="font-size:12px; color:white;">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
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


  <!-- Put the script at the bottom for better performance -->
  <script src="lib/jquery-2.2.2.js" type="text/javascript" charset="utf-8"></script>
  <script src="lib/bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>