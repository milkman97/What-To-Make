<div>
    <?php $TypesOfLiquids = array("Beetroot", "Carrot", "Celeriac", "Daikon", "Parsnip", "Radish", "Swede", "Turnip");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>