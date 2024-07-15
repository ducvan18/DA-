<div class="container p-5">

    <h4>Edit Category</h4>

    <form id="update-Items" method="POST" action="index.php?url=edit-category">
        <div class="form-group">
            <label for="name">Name Category:</label>
            <?php
                echo (!empty($error)) ? '<span style="color:red" >' . $error . '</span>' : false;

            ?>
            <input type="text" class="form-control" id="p_desc" name="name" value="<?= $categorys['0']['category_name'] ?>">
        </div>
        <input type="hidden" name="id" value="<?= $categorys['0']['category_id'] ?>">
        <div class="form-group">
            <button type="submit" style="height:40px" class="btn btn-primary" name="update">Update Item</button>
        </div>

    </form>

</div>