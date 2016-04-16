<div>
    <?php $TypesOfLiquids = array("Coca-Cola", "Pepsi", "Diet Coke", "Moutain Dew", "Diet Pepsi", "Fanta", "Diet Moutain Dew", "Doctor Pepper", "Coke Zero");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>"  onclick="addItemToArray(this.id)" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>