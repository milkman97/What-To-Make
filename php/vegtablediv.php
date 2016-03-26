<div>
    <?php $TypesOfLiquids = array("Bulbs","Flower","Fruit", "Fungi", "Leaves", "Roots", "Seeds", "Stems", "Tubers");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="HideOrUnhide(this.id,'<?php echo $value . "1"?>')" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>