
<!-- top navigation bar -->  
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom:0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" 
    data-target="#top-navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">Internet of Things</a>
    </div>
    <!-- Top Menu Items -->  
    <!-- A list with 3 elements pretty easy stuff-->  
    <ul class="nav navbar-right top-nav">
      <li class="dropdown">
        <!-- Create a dropdown with envelope icon -->  
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope"></i> <b class="caret"></b>
        </a>
        <!-- Contains a list of 'media' elements for messages 
           and a footer for read all messages -->  
        <ul class="dropdown-menu message-dropdown">
          <li class="message-preview">
            <a href="#">
              <div class="media">
                <span class="pull-left">
                  <img class="media-object" src="http://placehold.it/50x50" alt=""></span>
                <div class="media-body">
                  <h5 class="media-heading"> <strong>BlaBlaBla</strong>
                  </h5>
                  <p class="small text-muted"> <i class="fa fa-clock-o"></i>
                    Yesterday at 4:32 PM
                  </p>
                  <p>Lorem ipsum dolor sit amet, consectetur...</p>
                </div>
              </div>
            </a>
          </li>
          <li class="message-preview">
            <a href="#">
              <div class="media">
                <span class="pull-left">
                  <img class="media-object" src="http://placehold.it/50x50" alt=""></span>
                <div class="media-body">
                  <h5 class="media-heading"> <strong>John Smith</strong>
                  </h5>
                  <p class="small text-muted">
                    <i class="fa fa-clock-o"></i>
                    Yesterday at 4:32 PM
                  </p>
                  <p>Lorem ipsum dolor sit amet, consectetur...</p>
                </div>
              </div>
            </a>
          </li>
          <li class="message-preview">
            <a href="#">
              <div class="media">
                <span class="pull-left">
                  <img class="media-object" src="http://placehold.it/50x50" alt=""></span>
                <div class="media-body">
                  <h5 class="media-heading">
                    <strong>John Smith</strong>
                  </h5>
                  <p class="small text-muted">
                    <i class="fa fa-clock-o"></i>
                    Yesterday at 4:32 PM
                  </p>
                  <p>Lorem ipsum dolor sit amet, consectetur...</p>
                </div>
              </div>
            </a>
          </li>
          <li class="message-footer">
            <a href="#">Read All New Messages</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <!-- For notifications dropdown -->  
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell"></i> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu alert-dropdown">
          <li>
            <a href="#">
              Alert Name
              <span class="label label-default">Alert Badge</span>
            </a>
          </li>
          <li>
            <a href="#">
              Alert Name
              <span class="label label-primary">Alert Badge</span>
            </a>
          </li>
          <li>
            <a href="#">
              Alert Name
              <span class="label label-success">Alert Badge</span>
            </a>
          </li>
          <li>
            <a href="#">
              Alert Name
              <span class="label label-info">Alert Badge</span>
            </a>
          </li>
          <li>
            <a href="#">
              Alert Name
              <span class="label label-warning">Alert Badge</span>
            </a>
          </li>
          <li>
            <a href="#">
              Alert Name
              <span class="label label-danger">Alert Badge</span>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">View All</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <!-- for account -->  
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-user"></i>
          <?php 
                        echo $_SESSION['login-first-name'] . " " . $_SESSION['login-last-name'];
                      ?>  
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a href="#">
              <i class="fa fa-fw fa-user"></i>
              Profile
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-fw fa-envelope"></i>
              Inbox
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-fw fa-gear"></i>
              Settings
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="" data-toggle="modal" data-target="#logout-modal">
              <i class="fa fa-fw fa-power-off"></i>
              Log Out
            </a>
          </li>
        </ul>
      </li>
    </ul>

    <div class="collapse navbar-collapse" id="top-navbar-collapse">
      <ul class="nav navbar-nav side-nav">
        <!-- put a navigation side bar with a list of icons and text -->  
        <li class="active">
          <a href="dashboard_home.php">
            <i class="fa fa-fw fa-home"></i>
            Home
          </a>
          <!-- fw stands for fixed width --> </li>
        <li>
          <a href="dashboard_things.php">
            <i class="fa fa-fw fa-heart"></i>
            Things
          </a>
          <!-- just a link with links to other pages --> </li>
        <li>
          <a href="dashboard_monitor.php">
            <i class="fa fa-fw fa-cloud-upload"></i>
            Monitor
          </a>
        </li>
        <li>
          <a href="dashboard_statistics.php">
            <i class="fa fa-fw fa-bar-chart"></i>
            Statistics
          </a>
        </li>
        <li>
          <a href="dashboard_mailbox.php">
            <i class="fa fa-fw fa-envelope"></i>
            Mailbox
            <span class="badge pull-right">44</span>
          </a>
        </li>
        <li>
          <a href="dashboard_notifications.php">
            <i class="fa fa-fw fa-bell"></i>
            Notifications
          </a>
        </li>
        <li>
          <a href="dashboard_settings.php">
            <i class="fa fa-fw fa-cog"></i>
            Settings
          </a>
        </li>
        <li>
          <a href="" data-toggle="modal" data-target="#logout-modal">
            <i class="fa fa-fw fa-power-off"></i>
            Log Out
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade bs-modal-sm" id="logout-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <h3>
          <center>Are you sure?</center>
        </h3>
        <br>
        <form class="form-horizontal" method="POST" action="scripts/logout.php" role="form">
          <fieldset>
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <center>
                  <button id="signin" name="signin" class="btn btn-md btn-info">Yes</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </center>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>