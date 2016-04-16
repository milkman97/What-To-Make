<div>
    <?php $TypesOfLiquids = array("Beans", "Pea", "Corn", "French Beans", "Green Beans", "Almonds", "Sunflower Seeds", "Peanuts", "Pecans", "Pistachos", "Walnuts", "Tofu", "Black Beans", "Soy Beans", "Kidney Beans", "Pinto Beans");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)"/>
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>