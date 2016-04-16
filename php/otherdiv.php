<div>
    <?php $TypesOfBerries = array("Breads", "Protein", "Seasoning","Dairy","Condiments", "Meal");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="HideOrUnhide(this.id,'<?php echo $value . "1"?>','<?php echo $value . "2"?>')" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>
