<div>
    <?php $TypesOfBerries = array("Cantaloupe", "Casaba", "Honeydew", "Watermelon");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>