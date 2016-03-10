<div>
    <?php $TypesOfBerries = array("Grains", "Protein", "Seasoning","Fats","Dairy","Condiments");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="HideOrUnhide(this.id,'<?php echo $value . "1"?>','condiments')" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>
