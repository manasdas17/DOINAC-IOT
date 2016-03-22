<!-- Shows up a top navigation bar for registration and stuff -->

<!-- Static navbar -->
<nav class="navbar navbar-inverse navbar-static-top" style="margin-bottom:0px">
  <div class="container-fluid">
    <div class="navbar-header">    
      <button type="button" class="navbar-toggle" data-toggle="collapse" 
      data-target="#top-navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
      <?php 
        echo $HELLO;
      ?></a>
    </div>
    <div class="collapse navbar-collapse" id="top-navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="">
            <strong>Sign in </strong>
            <span><b class="caret"></b></span>
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