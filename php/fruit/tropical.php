<div>
    <?php $TypesOfTropicals = array("Avocados", "Coconut", "Bananas", "Figs", "Dates", "Guavas", "Mangoes", "Papayas", "Pineapples", "Pomegranates", "Kiwi");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" />
    <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>