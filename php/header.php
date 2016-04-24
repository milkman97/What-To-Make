<head>
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../images/myfavicon.png">
    <title>MakeyMit</title>
</head>
<nav class="orange darken-2" role="navigation">
    <div class="nav-wrapper">
        <div class="bar">
            <a href="index.php" class="white-text brand-logo" id="titleText">MakeyMit</a>
            <form class="hide-on-med-and-down searchBar" action="#">
                <div class="input-field left tooltipped" data-position="right" data-delay="3" data-tooltip="Search">
                    <input id="search" type="search" required>
                    <label for="search"><i class="mdi-action-search"></i></label>
                    <i class="mdi-navigation-close"></i>
                </div>
            </form>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php" class="tooltipped" data-position="bottom" data-delay="3" data-tooltip="Refresh Me"><i class="mdi-navigation-refresh"></i></a></li>
                <li><a href="#modalLogin" class="modal-trigger tooltipped" data-position="bottom" data-delay="3" data-tooltip="Login"><i class="mdi-action-perm-identity"></i></a></li>
                <li><a href="#contact" class="modal-trigger tooltipped" data-position="bottom" data-delay="3" data-tooltip="Contact Us"><i class="mdi-communication-phone"></i></a></li>
                
            </ul>
        </div>
        <!-- Mobile -->
        <ul id="nav-mobile" class="side-nav " style="left: -700px;">
            
            <li><a href="index.php"><i class="mdi-navigation-refresh left"></i>Refresh</a></li>
            <li><a href="#modalLogin" class="modal-trigger"><i class="mdi-action-perm-identity left"></i>Login</a></li>
            <li><a href="#contact" class="modal-trigger"><i class="mdi-communication-phone left"></i>Contact Us</a></li>
            <li>
                <form action="#">
                <div class="input-field left tooltipped" data-position="bottom" data-delay="3" data-tooltip="Search">
                    <input id="search1" type="search" required>
                    <label  for="search"><i class="black-text mdi-action-search"></i></label>
                    <i class="mdi-navigation-close"></i>
                </div>
            </form>
            </li>
        </ul>
        
        <a href="#" data-activates="nav-mobile" class="white-text button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
</nav>

<!--login modal-->
<div id="modalLogin" class="modal">
    <div class="modal-content">
        <h4 class="center-align">Login</h4>
        <div class="center-align">
            <div class="divider"></div>
            <form class="col s12" >
                <div class="row center-align">
                    <div class="input-field col m10 offset-m1 orange-text">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="Username" type="text" name="Username" class="validate">
                        <label for="Username">Username</label>
                    </div>
                    <div class="input-field col m10 offset-m1 orange-text ">
                        <i class="mdi-action-lock-open prefix"></i>
                        <input id="Password" type="password" name="Password" class="validate">
                        <label for="Password">Password</label>
                    </div>
                    <div class="input-field col m10 offset-m1 orange-text">
                        <input type="checkbox" class="orange-text" id="filled-in-box">
                        <label for="filled-in-box">Remember me next time</label>
                    </div>
                </div>
                <a href="#" class="btn btn-flat white modal-close">Cancel</a>
                <button class="waves-effect waves-blue blue btn btn-flat modal-action modal-close" type="submit" name="SignUp">Login</button>
            </form>
            
            <br>
            <h4 class="center-align">Sign Up</h4>
            <div class="divider"></div>
            <form class="col s12" action="php/SignUpForm.php" method="post">
                <div class="row center-align">
                    <div class="input-field col m10 offset-m1 orange-text">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="FirstName" type="text" name="FirstName" class="validate">
                        <label for="FirstName">First Name</label>
                    </div>
                    <div class="input-field col m10 offset-m1 orange-text">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="LastName" type="text" name="LastName" class="validate">
                        <label for="LastName">Last Name</label>
                    </div>
                    <div class="input-field col m10 offset-m1 orange-text">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="Username1" type="text" name="Username1" class="validate">
                        <label for="Username1">Username</label>
                    </div>
                    <div class="input-field col m10 offset-m1 orange-text ">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="Email1" type="text" name="Email1" class="validate">
                        <label for="Emaill">Email</label>
                    </div>
                    <div class="input-field col m10 offset-m1 orange-text ">
                        <i class="mdi-action-lock-open prefix"></i>
                        <input id="Password1" type="password" name="Password1" class="validate">
                        <label for="Password1">Password</label>
                    </div>
                </div>
                <a href="#" class="btn btn-flat white modal-close">Cancel</a>
                <button class="waves-effect waves-blue blue btn btn-flat modal-action modal-close" type="submit" name="SignUp">Sign Up</button>
            </form>
            
        </div>
    </div>
</div>
<!---Contact us modal--->
<div id="contact" class="modal">
    <div class="modal-content">
        <h4 class="center-align">Contact Us</h4>
        <div class="center-align">
            <div class="divider"></div>
            <p><a target="_blank" class="waves-effect waves-blue blue btn btn-flat modal-action modal-close" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=makeymit@gmail.com">Email</a></p>
        </div>
    </div>
</div>