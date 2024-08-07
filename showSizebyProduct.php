<?php
require_once "BaseModel.php";
    $color =$_POST['color'];
    $product_id = $_POST['product_id'];
    $sql = "SELECT * FROM product_variant WHERE product_variant.product_id = $product_id AND color = '$color'";
    $size = getData($sql);
    foreach($size as $s){
?>  
    <label for="size"><?= $s['size'] ?></label>
    <input type="radio" name="size" value="<?= $s['size'] ?>">

<?php }?>
