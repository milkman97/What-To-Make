<!DOCTYPE html>

<html lang="en">

<body>
    <head>
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="/images/myfavicon.png">
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
                <li><a href="contact.php" class="white-text tooltipped" data-position="bottom" data-delay="3" data-tooltip="Contact Us"><i class="mdi-communication-phone"></i></a></li>
                
            </ul>
        </div>
        <!-- Mobile -->
        <ul id="nav-mobile" class="side-nav " style="left: -700px;">
            
            <li><a href="index.php"><i class="mdi-navigation-refresh left"></i>Refresh</a></li>
            <li><a href="#modalLogin" class="modal-trigger"><i class="mdi-action-perm-identity left"></i>Login</a></li>
            <li><a href="contact.php" class="black-text"><i class="mdi-communication-phone left"></i>Contact Us</a></li>
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
        <section class="amber lighten-4">
            <br>
            <br>
            <div class="container">
                <form>
                    <div class="row">
                        
                        <h5 id="types" class="animated fadeInDown ">Main Types Of Food</h5>
                        <div class="col s10 m6 l3 animated fadeInDown">
                            <p>
                                <input type="checkbox" id="fruit" onclick="HideOrUnhide(this.id,'fruitDiv', 'categories')" />
                                <label class="black-text" for="fruit">Fruit</label>
                            </p>
                        </div>
                        <div class="col s10 m6 l3 animated fadeInDown">
                            <p>
                                <input type="checkbox" id="vegtable" onclick="HideOrUnhide(this.id,'vegtableDiv', 'categories')" />
                                <label class="black-text" for="vegtable">Vegetables</label>
                            </p>
                        </div>
                        <div class="col s10 m6 l3 animated fadeInDown">
                            <p>
                                <input type="checkbox" id="liquid" onclick="HideOrUnhide(this.id,'liquidDiv', 'categories')" />
                                <label class="black-text" for="liquid">Liquid</label>
                            </p>
                        </div>
                        <div class="col s10 m6 l3 animated fadeInDown">
                            <p>
                                <input type="checkbox" id="other" onclick="HideOrUnhide(this.id,'otherDiv', 'categories')" />
                                <label class="black-text" for="other">Other</label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <h5 id="categories" class="animated fadeInDown">Categories</h5>
                        <div class="col s10 m6 l3 animated fadeInDown" id="fruitDiv">
                            <?php include('php/fruitdiv.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l3 animated fadeInDown" id="vegtableDiv">
                            <?php include('php/vegtablediv.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l3 animated fadeInDown" id="liquidDiv">
                            <?php include('php/liquiddiv.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l3 animated fadeInDown" id="otherDiv">
                            <?php include('php/otherdiv.php');?>
                                <br>
                        </div>
                    </div>
                    <div class="row">
                        <h5 id="fruitsRow" class="animated fadeInDown">Fruits</h5>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Berries1">
                            <?php include('php/fruit/berries.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Pits1">
                            <?php include('php/fruit/pits.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Core1">
                            <?php include('php/fruit/cores.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Melons1">
                            <?php include('php/fruit/melons.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Citrus1">
                            <?php include('php/fruit/citrus.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Tropical1">
                            <?php include('php/fruit/tropical.php');?>
                                <br>
                        </div>
                    </div>
                    <div class="row">
                        <h5 id="vegetableRow" class="animated fadeInDown">Vegetables</h5>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Bulbs1">
                            <?php include('php/vegetables/Bulbs.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Flower1">
                            <?php include('php/vegetables/Flower.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Fruit1">
                            <?php include('php/vegetables/Fruit.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Fungi1">
                            <?php include('php/vegetables/Fungi.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Leaves1">
                            <?php include('php/vegetables/Leaves.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Roots1">
                            <?php include('php/vegetables/Roots.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Seeds1">
                            <?php include('php/vegetables/Seeds.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Stems1">
                            <?php include('php/vegetables/Stems.php');?>
                                <br>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Tubers1">
                            <?php include('php/vegetables/Tubers.php');?>
                                <br>
                        </div>
                    </div>
                    <div class="row">
                        <h5 id="Liquids2" class="animated fadeInDown">Liquids</h5>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Water1">
                            <?php include('php/Liquids/Water.php');?>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Alcahol1">
                            <?php include('php/Liquids/Alcohol.php');?>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Sodas1">
                            <?php include('php/Liquids/SoftDrinks.php');?>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Milk1">
                            <?php include('php/Liquids/Milk.php');?>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Oils1">
                            <?php include('php/Liquids/Oil.php');?>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Juice1">
                            <?php include('php/Liquids/Juice.php');?>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Coffee1">
                            <?php include('php/Liquids/Coffee.php');?>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Tea1">
                            <?php include('php/Liquids/Tea.php');?>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Sports-Energy1">
                            <?php include('php/Liquids/Sport.php');?>
                        </div>
                    </div>
                    <div class="row">
                        <h5 id="Breads2" class="animated fadeInDown">Breads and Grains</h5>
                        <div class="col s12 m12 l12 animated fadeInDown" id="Breads1">
                            <?php include('php/other/breads.php');?>
                        </div>
                    </div>
                    <div class="row">
                        <h5 id="Protein2" class="animated fadeInDown">Protein</h5>
                        <div class="col s12 m12 l12 animated fadeInDown" id="Protein1">
                            <?php include('php/other/Protein.php');?>
                        </div>
                    </div>
                    <div class="row">
                        <h5 id="Seasoning2" class="animated fadeInDown">Seasonings</h5>
                        <div class="col s12 m12 l12 animated fadeInDown" id="Seasoning1">
                            <?php include('php/other/Seasonings.php');?>
                        </div>
                    </div>
                    <div class="row">
                        <h5 id="Dairy2" class="animated fadeInDown">Dairy</h5>
                        <div class="col s12 m12 l12 animated fadeInDown" id="Dairy1">
                            <?php include('php/other/Dairy.php');?>
                        </div>
                    </div>
                    <div class="row">
                        <h5 id="Condiments2" class="animated fadeInDown">Condiments</h5>
                        <div class="col s12 m12 l12 animated fadeInDown" id="Condiments1">
                            <?php include('php/other/condiments.php');?>
                        </div>
                    </div>
                    <div class="row">
                        <h5 id="Meal2" class="animated fadeInDown">Meal Types</h5>
                        <div class="col s12 m12 l12 animated fadeInDown" id="Meal1">
                            <?php include('php/other/MealType.php');?>
                        </div>
                    </div>
                </form>
                <a class="btn-floating btn-large waves-effect waves-light right animated zoomIn orange accent-3"><i class="mdi-content-send" id="send"></i></a>
            </div>
            <br>
        </section>
        <section class="orange accent-1">
            <br>
            <br>
            <br>
            <div class="container">
                <?php include('php/cards.php');?>
            </div>
            <br><br>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/MobileButtonView.js"></script>
        <script type="text/javascript" src="js/test.js"></script>
        <script type="text/javascript" src="js/apiTest.js"></script>
</body>

</html>