<div>
    <h3>Available Sizes</h3>
    <table class="table ">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Pay Method</th>
                <th class="text-center" colspan="2">Action</th>
            </tr>
        </thead>
        <?php 
            $count = 1;
            foreach ($payMethods as $key) { 
        ?>
            <tr>
                <td><?=$count?></td>
                <td><?=$key['payment_method_name']?></td>
                <td>
                    <button class="btn btn-primary" style="height:40px"><a href="index.php?url=edit-payMethod&id=<?=$key['payment_method_id']?>">Edit</a></button>
                    <button class="btn btn-danger" style="height:40px"><a href="index.php?url=del-payMethod&id=<?=$key['payment_method_id']?>">Delete</a></button>
                </td>
            </tr> 
        <?php $count++; } ?>
        
    </table>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
        Add Size
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Size Record</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form enctype='multipart/form-data' action="index.php?url=add-payMethod" method="POST">
                        <div class="form-group">
                            <label for="name">Name Pay Method:</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary" name="add" style="height:40px">Add Size</button>
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