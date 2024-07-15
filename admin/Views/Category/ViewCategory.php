<div>
    <h3>Category Items</h3>
    <table class="table ">
        <thead>
            <tr>
                <th class="text-center">STT</th>
                <th class="text-center">Category Name</th>
                <th class="text-center" colspan="2">Action</th>
            </tr>
        </thead>
        <?php
        $count = 1;
        foreach ($categorys as $c) {
        ?>
            <tr>
                <td><?= $count ?></td>
                <td><?= $c['category_name'] ?></td>
                <td><button class="btn btn-primary" style="height:40px"><a href="index.php?url=edit-category&id=<?= $c['category_id'] ?>">Edit</a></button>
                    <button class="btn btn-danger" style="height:40px"><a href="index.php?url=del-category&id=<?= $c['category_id'] ?>"onclick="return confirm('Bạn có muốn xoá không?')">Delete</a></button>
                </td>
            </tr>
        <?php $count++;
        } ?>

    </table>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
        Add Category
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Category Item</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form enctype='multipart/form-data' action="index.php?url=add-category" method="POST">
                        <div class="form-group">
                            <label for="c_name">Category Name:</label>
                            <?php
                            echo (!empty($error)) ? '<span style="color:red" >' . $error . '</span>' : false;
                            
                            ?>
                            <input type="text" class="form-control" name="c_name" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary" name="add" style="height:40px">Add Category</button>
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