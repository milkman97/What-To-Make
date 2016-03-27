<div>
    <?php $TypesOfOthers = array("Breads", "Protein", "Seasoning","Fats","Dairy","Condiments");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="HideOrUnhide(this.id,'<?php echo $value . "1"?>','<?php echo $value . "2"?>')" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>
