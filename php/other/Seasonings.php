<div>
    <?php $TypesOfBerries = array("Salt", "Pepper", "Chives", "Basil", "Parsley", "Mint", "Oregano", "Rosemary", "Sage", "Chili Powder", "Cinnamon", "Cloves", "Cumin", "Ginger", "Nutmeg", "Paprika", "Vanilla Extract");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>
