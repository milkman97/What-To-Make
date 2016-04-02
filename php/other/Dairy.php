<div>
    <?php $TypesOfBerries = array("Asiago", "Blue Cheese", "Parmesan", "Gouda", "Swiss", "Chedder", "Monterey Jack", "Provolone", "Colby", "Pepper Jack", "Mozzarella", "Feta", "Munster");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>
