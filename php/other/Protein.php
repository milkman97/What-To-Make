<div>
    <?php $TypesOfBerries = array("Bacon","Chicken", "Dove", "Goose", "Turkey", "Pheasant", "Eggs", "Fish", "Trout", "Cod", "Tilapia", "Crab", "Lobster", "Shrimp", "Tuna", "Beef", "Deer", "Elk", "Pork", "Goat", "Sheep", "Bison", "Rabbit");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>"  onclick="addItemToArray(this.id)" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>
