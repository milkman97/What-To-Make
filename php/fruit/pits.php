<div>
    <?php $TypesOfBerries = array("Cherries", "Apricots", "Nectarines", "Peaches", "Plums");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>