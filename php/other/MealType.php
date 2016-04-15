<div>
    <?php $TypesOfBerries = array("Breakfast", "Lunch", "Brunch", "Dinner", "Dessert");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>"  onclick="addItemToArray(this.id)" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>
