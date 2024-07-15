<div>
    <h2>Product Variant Item</h2>
    <table class="table ">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Product Name</th>
                <th class="text-center">Size</th>
                <th class="text-center">Color</th>
                <th class="text-center">Stock Quantity</th>
                <th class="text-center" colspan="2">Action</th>
            </tr>
        </thead>
        <?php
            $count = 1;
            foreach ($productVariants as $key) { 
        ?>
                <tr>
                    <td><?=$count?></td>
                    <td><?=$key['product_name']?></td>
                    <td><?=$key['size']?></td>
                    <td><?=$key['color']?></td>
                    <td><?=$key['variant_quantity']?></td>
                    <td>
                        <button class="btn btn-primary" style="height:40px" ><a href="index.php?url=edit-productVariant&id=<?=$key['variant_id']?>">Edit</a></button>
                        <button class="btn btn-danger" style="height:40px" ><a href="index.php?url=del-productVariant&id=<?=$key['variant_id']?>"onclick="return confirm('Bạn có muốn xoá không?')">Delete</a></button>
                    </td>
                </tr>
            <?php $count++; } ?>

    </table>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
        Add Product Variation
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Product Variant</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form enctype='multipart/form-data' action="index.php?url=add-productVariant" method="POST">

                        <div class="form-group">
                            <label>Product:</label>
                            <select name="product">
                                <?php foreach ($products as $key) { ?>
                                    <option value="<?=$key['product_id']?>" ><?=$key['product_name']?></option>   
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="size" >Size:</label>
                            <input type="text" class="form-control" name="size" >
                        </div>
                        <div class="form-group">
                            <label for="color">Color:</label>
                            <input type="text" class="form-control" name="color" >
                        </div>
                        <div class="form-group">
                            <label for="qty">Stock Quantity:</label>
                            <input type="number" class="form-control" name="qty" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary" name="add" style="height:40px">Add Product Variation</button>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
                </div>
            </div>

        </div>
    </div>


</div>