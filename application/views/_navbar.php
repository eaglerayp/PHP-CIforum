    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">SDM Homework2</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="<?=site_url("/")?>">Home</a></li>
                <li><a href="#about">Articles</a></li>
                <li><a href="#contact">Contact</a></li>
                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                  
                </li>
              </ul>
              <!-- login status -->
              <?php 
               if(!isset($_SESSION["user"]) || ($_SESSION["user"] == null)){
                session_start();
               }
               if(isset($_SESSION["user"]) && $_SESSION["user"] != null){ ?>  
              <ul class="nav pull-right">  
              <li><a href="#">Hi <?=$_SESSION["user"]->UserID?></a></li>  
              <li class="divider-vertical"></li>  
              <li><a href="<?=site_url("user/logout")?>">Log out</a></li> 
              <li><a href="<?=site_url("article/post")?>">Post</a></li> 
              </ul>  
              <?php }else{ ?>   
              <ul class="nav pull-right">  
              <li><a href="<?=site_url("user/login")?>">Sign in</a></li>  
              <li class="divider-vertical"></li>  
              <li><a href="<?=site_url("user/register")?>">Sign up</a></li>  
              </ul>          
              <?php } ?> 
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->