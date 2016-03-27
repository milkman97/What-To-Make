<div>
    <?php $TypesOfLiquids = array("Bitter Mellon","Tomato","Squash", "Pumpkin", "Eggplant", "Cucumber", "Marrow", "Choko");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="HideOrUnhide(this.id,'<?php echo $value . "1"?>')" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>