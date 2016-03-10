<div>
    <?php $TypesOfBerries = array("Grains", "Protein", "Seasoning","Fats","Dairy");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>
