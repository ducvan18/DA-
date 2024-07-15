<div id="main-content" class="container allContent-section py-4">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total Users</h4>
                <h5 style="color:white;">
                    <?= $quantity_user[0]['quantity_user'] ?>
                </h5>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total Categories</h4>
                <h5 style="color:white;">
                    <?= $quantity_category[0]['quantity_category'] ?>
                </h5>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total Products</h4>
                <h5 style="color:white;">
                    <?= $quantity_product[0]['quantity_product'] ?>
                </h5>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-list mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total orders</h4>
                <h5 style="color:white;">
                    <?= $quantity_order[0]['quantity_order'] ?>
                </h5>
            </div>
        </div>
    </div>
    <div style="margin-top: 35px" class="char" >
        <label for="select_date">Thống kê doanh thu theo:</label>
        <select id="select_date" name="select_date" id="">
            <option selected value="7ngay">7 ngày</option>
            <option value="30ngay">30 ngày</option>
            <option value="365ngay">Trong năm nay</option>
        </select>
        <div id="myfirstchart" style="height: 250px;"></div>
    </div>
</div>