<div>
    <?php $TypesOfLiquids = array("Beans", "Pea", "Corn", "French Beans", "Green Beans", "Almonds", "Sunflower", "Peanuts", "Pecans", "Pistachos", "Walnuts", "Tofu", "Black Beans", "Soy Beans", "Kidney Beans", "Pinto Beans");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)"/>
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>