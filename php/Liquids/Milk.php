<div>
    <?php $TypesOfLiquids = array("Whole Milk", "2% Milk", "1% Milk", "Fat-Free Milk", "Organic Milk", "Lactose Free Milk", "Soy Based Milk");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>