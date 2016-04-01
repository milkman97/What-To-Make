<div>
    <?php $TypesOfLiquids = array("Cranberry Juice", "Grape Fruit", "Blueberry", "100% Fruit Juice", "Cherry");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="HideOrUnhide(this.id,'<?php echo $value . "1"?>')" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>