<div class="container p-5">

    <h4>Edit Pay Method</h4>

    <form id="update-Items" method="POST" action="index.php?url=edit-payMethod" >
        <div class="form-group">
            <label for="name">Name Pay Method:</label>
            <input type="text" class="form-control" name="name" value="<?= $payMethod['0']['payment_method_name'] ?>">
        </div>
        <input type="hidden" name="id" value="<?= $payMethod['0']['payment_method_id'] ?>">
        <div class="form-group">
            <button type="submit" style="height:40px" class="btn btn-primary" name="update">Update Item</button>
        </div>

    </form>

</div>