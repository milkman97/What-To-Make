<div>
    <?php $TypesOfLiquids = array("Spring Water","Tap Water","Distilled Water", "Boiled Water");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>"  onclick="addItemToArray(this.id)" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>