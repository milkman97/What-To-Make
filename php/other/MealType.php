<div>
    <?php $TypesOfBerries = array("Breakfast", "Lunch", "Brunch", "Dinner", "Dessert", "Drink");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>"  onclick="addItemToArray(this.id)" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>
