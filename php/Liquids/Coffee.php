<div>
    <?php $TypesOfLiquids = array("Cappuccino", "Mocha", "Latte", "Americano", "Macchiato", "Doppio", "Espresso", "Ristretto");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>