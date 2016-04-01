<div>
    <?php $TypesOfLiquids = array("Water", "Alcahol", "Sodas", "Milk","Oils", "Juice", "Coffee", "Tea", "Sports");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="HideOrUnhide(this.id,'<?php echo $value . "1"?>','Liquids2')" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>