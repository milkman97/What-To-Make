<div>
    <?php $TypesOfBerries = array("Asiago", "Blue Cheese", "Parmesan", "Gouda", "Swiss", "Cheddar", "Monterey Jack", "Provolone", "Colby", "Pepper Jack", "Mozzarella", "Feta");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)"/>
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>
