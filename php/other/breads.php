<div>
    <?php $TypesOfBerries = array("Bagels", "Buns", "Corn Bread", "Stuffing","English Muffins","French Bread","Ice Cream Cones","Pie Crust","Pita Bread","Pizza Crust","Buscuits","Rye Bread","Tortillas", "Taco Shells"," Wheat Bread", "White Bread");
    foreach ($TypesOfBerries as $value) { ?>
    <p>
    <input type="checkbox" id="<?php echo $value; ?>" onclick="addItemToArray(this.id)" />
    <label class="black-text" for="<?php echo $value; ?>"><?php echo $value; ?></label>
    </p>
    <?php } ?>
</div>
