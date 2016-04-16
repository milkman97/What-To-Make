<div>
    <?php $TypesOfBerries = array("Butter","Ketchup","Hot Sauce", "BBQ Sauce", "Mayonnaise","Salad Dressing","Yellow Mustard", "Salsa","Soy Sauce", "Dijon Mustard","Lemon Juice", "Garlic", "Jam", "Peanut Butter", "A-1 Steak Sauce", "Tartar Sauce", "Sweet and Sour Sauce", "Sriracha", "Wasabi");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>
