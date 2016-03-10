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
                        <div class="col s10 m6 l3">
                            <p>
                                <input type="checkbox" id="fruit" onclick="HideOrUnhide(this.id,'fruitDiv', 'categories')" />
                                <label for="fruit">Fruit</label>
                            </p>
                        </div>
                        <div class="col s10 m6 l3">
                            <p>
                                <input type="checkbox" id="vegtable" onclick="HideOrUnhide(this.id,'vegtableDiv', 'categories')" />
                                <label for="vegtable">Vegetables</label>
                            </p>
                        </div>
                        <div class="col s10 m6 l3">
                            <p>
                                <input type="checkbox" id="liquid" onclick="HideOrUnhide(this.id,'liquidDiv', 'categories')" />
                                <label for="liquid">Liquid</label>
                            </p>
                        </div>
                        <div class="col s10 m6 l3">
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
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Pits1">
                            <?php include('php/fruit/pits.php');?>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Core1">
                            <?php include('php/fruit/cores.php');?>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Melons1">
                            <?php include('php/fruit/melons.php');?>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Citrus1">
                            <?php include('php/fruit/citrus.php');?>
                        </div>
                        <div class="col s10 m6 l2 animated fadeInDown" id="Tropical1">
                            <?php include('php/fruit/tropical.php');?>
                        </div>
                    </div>
                    <div class="row">
                        <h5 id="condiments" class="animated fadeInDown">Condiments</h5>
                        <div class="col s12 m12 l12 animated fadeInDown" id="Condiments1">
                            <?php include('php/other/condiments.php');?>
                        </div>
                    </div>
                </form>
                <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
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
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/MobileButtonView.js"></script>
        <script type="text/javascript" src="js/test.js"></script>
</body>

</html>