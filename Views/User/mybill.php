<main class="main-content">
    <?php
    if (isset($yourOrder) && (is_array($yourOrder))) {
        foreach ($yourOrder as $order) {
            extract($order);
            if (isset($product_id)) {
                $product_ids[] = $product_id;
            }
        }
    }

    ?>
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area" data-bg-img="../public/img/photos/bg3.webp">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Shopping Cart</h2>
                        <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="breadcrumb-sep">//</li>
                                <li>Đơn hàng của bạn<br><br>Mã đơn hàng của bạn: SG
                                    <?= $order_id ?>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="shopping-cart-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart-form table-responsive">
                        <form action="#" method="post">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th class="product-name">Tên sản phảm</th>
                                        <th class="product-thumb">Ảnh sản phẩm </th>
                                        <th class="product-price">Phân loại</th>
                                        
                                        <th class="product-price">Price</th>
                                        
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    //code wrote by nv son and youtube
                                    



                                    $ttdh = get_ttdh($order_status);
                                   
                                    foreach ($product_ids as $id) {
                                        $product_order = getOneProduct($id);
                                        foreach ($product_order as $bill) {

                                            extract($bill);
                                            // $hinh = $img_path . $image;
                                            $linkSP = "index.php?url=detail-product&id=" . $product_id;



                                            echo ' 
                    <tr class="cart-product-item">
                    
                   
                    <td class="product-name">
                      <h4 class="title"><a href="' . $linkSP . '">' . $product_name . '</a></h4>
                    </td>
                    <td class="product-thumb">
                    <a href="' . $linkSP . '">
                      <img src="' . $product_image . '" width="90px" height="110px" alt="Image-HasTech">
                    </a>
                  </td>
                    <td class="product-price">
                      <span class="price">Size: ' . $size . ' <br>Color: ' . $color . '</span>
                    </td>
                    <td class="product-price">
                    <span class="price">' . $product_price . '</span>
                  </td>
                    <td class="product-quantity">
                      <div>
                      <span>' . $order_detail_quantity . '</span>
                      </div>
                    </td>
                    <td class="product-subtotal">
                      <span class="price">' . $product_price * $order_detail_quantity . '</span>
                    </td>
                  </tr> ';
                                         
                                        }
                                    }
                                    ?>
                                    <tr class="actions">
                                        <td class="border-0" colspan="6">
                                            <a href="index.php?url=shop" class="btn-theme btn-flat">Continue
                                                Shopping</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row row-gutter-50">
                <div class="col-md-6 col-lg-4">
                    <div id="CategoriesAccordion" class="shipping-form-calculate">
                        <div class="section-title-cart">
                            <h5 class="title">Địa chỉ của bạn</h5>
                        </div>
                        <div id="CategoriesTwo" class="collapse show" data-bs-parent="#CategoriesAccordion">
                            <div class="row row-gutter-50" style="display: flex; justify-content: center;width: 600px;">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <span id="stateCounty" class="form-control" style="font-size: 15px;">Họ tên:
                                            <?=$order_fullname ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span id="stateCounty" class="form-control"
                                            style="font-size: 15px; height: 60px ">Địa chỉ:
                                            <?= $order_address ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span id="stateCounty" class="form-control" style="font-size: 15px;">Số điện
                                            thoại:
                                            <?= $order_phone ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <span id="stateCounty" class="form-control" style="font-size: 15px;">Ngày đặt
                                            mua:
                                            <?= $order_created_at ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <span id="stateCounty" class="form-control" style="font-size: 15px;">Trạng thái
                                            đơn hàng:
                                            <?= $ttdh ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="shipping-form-coupon">

                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="shipping-form-cart-totals">
                        <div class="section-title-cart">
                            <h5 class="title">Tổng giá trị đơn hàng</h5>
                        </div>
                        <div class="cart-total-table">
                            <table class="table">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <td>
                                            <p class="value">Tổng tiền: </p>
                                        </td>
                                        <td>
                                            <p class="price">$
                                                <?= $order_total ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <td>
                                            <p class="value">Phí vận chuyển: </p>
                                        </td>
                                        <td>
                                            <p class="price">
                                                Miễn phí
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <td>
                                            <p class="value">Phương thức thanh toán: </p>
                                        </td>
                                        <td>
                                            <p class="price">
                                                <?= $payment_method_id ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <td>
                                            <p class="value">Tổng</p>
                                        </td>
                                        <td>
                                            <p class="price">$
                                                <?= $order_total ?>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a class="btn-theme btn-flat" href="index.php">Trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
</main>