<div>
    <?php $TypesOfFruit = array("Berries", "Pits", "Core", "Melons","Citrus", "Tropical");
    foreach ($TypesOfFruit as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="HideOrUnhide(this.id,'<?php echo $value . "1"?>','fruitsRow')" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>