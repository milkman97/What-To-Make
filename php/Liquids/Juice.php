<div>
    <?php $TypesOfLiquids = array("Cranberry Juice", "Grape Fruit", "Blueberry", "100% Fruit Juice", "Cherry");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>