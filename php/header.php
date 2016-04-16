<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>What to Make</title>
</head>
<nav class="orange darken-2" role="navigation">
    <div class="nav-wrapper">
        <div class="bar">
            <a href="index.php" class="white-text brand-logo" id="titleText">Makey It</a>
            <form class="hide-on-med-and-down searchBar" action="#">
                <div class="input-field left tooltipped" data-position="right" data-delay="3" data-tooltip="Search">
                    <input id="search" type="search" required>
                    <label for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php" class="tooltipped" data-position="bottom" data-delay="3" data-tooltip="Refresh Me"><i class="mdi-navigation-refresh"></i></a></li>
                <li><a href="#modalLogin" class="modal-trigger tooltipped" data-position="bottom" data-delay="3" data-tooltip="Login"><i class="mdi-action-perm-identity"></i></a></li>
                <li><a href="contact.php" class="white-text tooltipped" data-position="bottom" data-delay="3" data-tooltip="Contact Us"><i class="material-icons">phone</i></a></li>

            </ul>
        </div>
        <!-- Mobile -->
        <ul id="nav-mobile" class="side-nav " style="left: -600px;">
            
            <li><a href="index.php"><i class="mdi-navigation-refresh left"></i>Refresh</a></li>
            <li><a href="#modalLogin" class="modal-trigger"><i class="mdi-action-perm-identity left"></i>Login</a></li>
            <li><a href="contact.php" class="black-text"><i class="material-icons left">phone</i> Contact Us</a></li>
        </ul><a href="#" data-activates="nav-mobile" class="white-text button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

<!--login modal-->
<div id="modalLogin" class="modal">
    <div class="modal-content">
        <h4 class="center-align">Login</h4>
        <div class="center-align">
            <div class="divider"></div>
            <form class="col s12">
                <div class="row center-align">
                    <div class="input-field col m10 offset-m1 orange-text">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Username</label>
                    </div>
                    <div class="input-field col m10 offset-m1 orange-text ">
                        <i class="mdi-action-lock-open prefix"></i>
                        <input id="icon_password" type="password" class="validate">
                        <label for="icon_password">Password</label>
                    </div>
                    <div class="input-field col m10 offset-m1 orange-text">
                        <input type="checkbox" class="orange-text" id="filled-in-box">
                        <label for="filled-in-box">Remember me next time</label>
                    </div>
                </div>
            </form>
            <div class="divider"></div>
            <p>
                <a href="#" class="btn btn-flat white modal-close">Cancel</a> &nbsp;
                <a href="#" class="waves-effect waves-blue blue btn btn-flat modal-action modal-close">Login</a>
            </p>
        </div>
    </div>
</div>