<div>
    <?php $TypesOfLiquids = array("Olive Oil", "Peanut Oil", "Corn Oil", "Vegetable Oil", "Canola Oil");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>