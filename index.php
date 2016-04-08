<!DOCTYPE html>
<html lang="en">

<body>
    <?php include('php/header.php');?>
        <br>
        <br>
        <section>
            <div class="container">
                <form>
                    <div class="row">
                        <h5 id="types" class="animated fadeInDown">Main Types Of Food</h5>
                        <div class="col s10 m6 l3 animated fadeInDown">
                            <p>
                                <input type="checkbox" id="fruit" onclick="HideOrUnhide(this.id,'fruitDiv', 'categories')" />
                                <label for="fruit">Fruit</label>
                            </p>
                        </div>
                        <div class="col s10 m6 l3 animated fadeInDown">
                            <p>
                                <input type="checkbox" id="vegtable" onclick="HideOrUnhide(this.id,'vegtableDiv', 'categories')" />
                                <label for="vegtable">Vegetables</label>
                            </p>
                        </div>
                        <div class="col s10 m6 l3 animated fadeInDown">
                            <p>
                                <input type="checkbox" id="liquid" onclick="HideOrUnhide(this.id,'liquidDiv', 'categories')" />
                                <label for="liquid">Liquid</label>
                            </p>
                        </div>
                        <div class="col s10 m6 l3 animated fadeInDown">
                            <p>
                                <input type="checkbox" id="other" onclick="HideOrUnhide(this.id,'otherDiv', 'categories')" />
                                <label for="other">Other</label>
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

                </form>
                <button class="btn waves-effect waves-light right" type="submit" name="action" id="send">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </section>
        <br>
        <br>
        <br>
        <section>
            <div class="container">
                <div class="row">
                    <form>
                        <div class="input-field col s12">
                            <input placeholder="Enter with a space after comma: item, item, item" id="search" type="text">
                            <label for="search" id="searchText">Search</label>
                        </div>
                        <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row" id="id01">

                </div>
            </div>
        </section>
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/MobileButtonView.js"></script>
        <script type="text/javascript" src="js/test.js"></script>
        <script type="text/javascript" src="js/apiTest.js"></script>
</body>

</html>