<div>
    <?php $TypesOfLiquids = array("beetroot", "carrot", "celeriac", "daikon", "parsnip", "radish", "swede", "turnip");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="HideOrUnhide(this.id,'<?php echo $value . "1"?>')" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>