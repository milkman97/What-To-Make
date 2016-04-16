<div>
    <?php $TypesOfLiquids = array("Whole", "2%", "1%", "Fat-Free", "Organic", "Lactose Free", "Soy Based");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>