<div class="container p-5">

    <h4>Edit Product Detail</h4>
            <form id="update-Items" action="index.php?url=edit-product" enctype='multipart/form-data' method="POST" >
                <div class="form-group">
                    <input type="text" name="product_id" class="form-control"  value="<?= $product['0']['product_id'] ?>" hidden>
                </div>
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <?php
                        echo (!empty($error['product_name']['required'])) ?'<span style="color:red" >'.$error['product_name']['required'].'</span>':false;
                        echo (!empty($error['product_name']['min'])) ?'<span style="color:red" >'.$error['product_name']['min'].'</span>':false;
                    ?>
                    <input type="text" name="name" class="form-control" value="<?= $product['0']['product_name'] ?>">
                </div>
                <div class="form-group">
                    <label for="desc">Product Description:</label>
                    <input type="text" name="desc" class="form-control" value="<?= $product['0']['product_description'] ?>">
                </div>
                <div class="form-group">
                    <label for="price">Unit Price:</label>
                    <?php
                        echo (!empty($error['price']['isInt'])) ?'<span style="color:red" >'.$error['price']['isInt'].'</span>':false;
                        echo (!empty($error['price']['min'])) ?'<span style="color:red" >'.$error['price']['min'].'</span>':false;
                    ?>
                    <input type="number" name="price" class="form-control"  value="<?= $product['0']['product_price'] ?>">
                </div>
                <div class="form-group">
                    <label>Category:</label>
                    <select name="category" >
                        <?php foreach ($categorys as $key) { ?>
                            <option value="<?= $key['category_id']?>" <?=$selected = ($key['category_id'] == $product['0']['category_id']) ? 'selected' : false;?> ><?= $key['category_name']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <img width='200px' height='150px' src='<?= $product['0']["product_image"] ?>'>
                    <div>
                        <label for="file">Choose Image:</label>
                        <input type="text" name="existingImage"  class="form-control" value="<?= $product['0']['product_image'] ?>" hidden>
                        <input type="file" name="newImage"  value="">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Update" name="update" style="height:40px" class="btn btn-primary">
                </div>
            </form>

</div>