<!-- https://stackoverflow.com/questions/47435708/why-i-cant-display-same-result-twice-using-mysqli-fetch-assoc -->

<?php
require 'functions.php';
$query_result=select_all_published_category();
$category = []; //create array
while($cat_info=mysqli_fetch_assoc($query_result)) {
    $category[] = $cat_info; //assign whole values to array
}
?>

<div class="control-group">
        <label class="control-label">Parent Category Name</label>
        <div class="controls">
            <select name="category_id">

                <?php foreach($category as $cat){?>
                    <option value="<?php echo $cat['category_id']; ?>"><?php echo $cat['category_name']; ?></option>
                <?php }?>

            </select>
        </div>
</div>

<div class="control-group">
        <label class="control-label">Parent Category Name 2</label>
        <div class="controls">
            <select name="category_id2">
                <?php foreach($category as $cat){?>
                    <option value="<?php echo $cat['category_id']; ?>"><?php echo $cat['category_name']; ?></option>
                <?php }?>
            </select>
        </div>
</div>
