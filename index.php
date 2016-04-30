<!DOCTYPE html>

<html lang="en">

<body>
    <?php include('php/header.php');?>
    <?php include('php/dbconnect.php');?>
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
                <h4>Welcome, <?php echo $_SESSION['user_name']; ?> here are some recipes for you:</h4>
                <?php include('php/cards.php');?>
            </div>
            <br>
            <br>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/MobileButtonView.js"></script>
        <script type="text/javascript" src="js/test.js"></script>
        <script type="text/javascript" src="js/apiTest.js"></script>
</body>
<footer>
    <div class="footer-copyright  brown lighten-5">
        <div class="container">2016 Copyright <a href="http://www.food2fork.com" target="_blank">Powered by Food2Fork</a>
            <a class="right" href="https://www.dmca.com/Protection/Status.aspx?PAGE_ID=aHR0cDovL21ha2V5aXQuaGVyb2t1YXBwLmNvbS81" title="DMCA.com Protection Status" class="dmca-badge" target="_blank"> <img height="16" src="//images.dmca.com/Badges/dmca_protected_sml_120n.png?ID=1f14d35c-8e5c-4575-a551-02fd67489889" alt="DMCA.com Protection Status" /></a>
            
        </div>
    </div>
</footer>

</html>
