<div>
    <?php $TypesOfLiquids = array("Tomato","Squash", "Pumpkin", "Eggplant", "Cucumber", "Marrow");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)"/>
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>