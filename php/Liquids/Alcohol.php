<div>
    <?php $TypesOfLiquids = array("Beer","Wine","Whisky", "Moonshine", "Vodka", "Tequila", "Malt Liquor", "Gin", "Rum", "Champagne");
    foreach ($TypesOfLiquids as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>"  onclick="addItemToArray(this.id)" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>