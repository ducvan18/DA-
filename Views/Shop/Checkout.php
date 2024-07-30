<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area" data-bg-img="../public/img/photos/bg3.webp">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Checkout</h2>
                        <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="breadcrumb-sep">//</li>
                                <li>Checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->
    <!--== Start Shopping Checkout Area Wrapper ==-->
    <section class="shopping-checkout-wrap">
        <form action="index.php?url=buy-success" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!--== Start Billing Accordion ==-->
                        <div class="checkout-billing-details-wrap">
                            <h2 class="title">Billing details</h2>
                            <div class="billing-form-wrap">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="f_name">Fullname <abbr class="required" title="required">*</abbr></label>
                                            <input id="f_name" name="fullname" type="text" class="form-control" value="<?=$userInfor[0]['fullname']?>" required>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="country">Country <abbr class="required" title="required">*</abbr></label>
                                            <select id="country" class="form-control">
                                                <option>Bangladesh</option>
                                                <option>Afghanistan</option>
                                                <option>Albania</option>
                                                <option>Algeria</option>
                                                <option>Armenia</option>
                                                <option>India</option>
                                                <option>Pakistan</option>
                                                <option>England</option>
                                                <option>London</option>
                                                <option>London</option>
                                                <option>China</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="street-address">Street address <abbr class="required" title="required">*</abbr></label>
                                            <input id="street-address" type="text" class="form-control" placeholder="House number and street name">
                                        </div>
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="town">Address <abbr class="required" title="required">*</abbr></label>
                                            <input id="town" name="address" type="text" value="<?=$userInfor[0]['address']?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="district">District <abbr class="required" title="required">*</abbr></label>
                                            <select id="district" class="form-control">
                                                <option>Afghanistan</option>
                                                <option>Albania</option>
                                                <option>Algeria</option>
                                                <option>Armenia</option>
                                                <option>India</option>
                                                <option>Pakistan</option>
                                                <option>England</option>
                                                <option>London</option>
                                                <option>London</option>
                                                <option>China</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Phone (optional)</label>
                                            <input id="phone" name="phone" type="text" value="<?=$userInfor[0]['phone']?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" data-margin-bottom="30">
                                            <label for="email">Email address <abbr class="required" title="required">*</abbr></label>
                                            <input id="email" name="email" type="text" value="<?=$userInfor[0]['email']?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Billing Accordion ==-->
                    </div>
                    <div class="col-lg-6">
                        <!--== Start Order Details Accordion ==-->
                        <div class="checkout-order-details-wrap">
                            <div class="order-details-table-wrap table-responsive">
                                <h2 class="title mb-25">Your order</h2>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">

                                        <?php
                                        foreach ($inforProduct as $key) {

                                            foreach ($key as $value) { ?>
                                    
                                                <tr class="cart-item">
                                                    <input type="hidden" name="cart_id[]" value="<?= $value['cart_id'] ?>">
                                                    <td class="product-name"><?= $value['product_name'] ?> <span class="product-quantity">× <?= $value['cart_quantity'] ?></span></td>
                                                    <td class="product-total"><?= $value['cart_totals_money'] ?>$</td>
                                                </tr>
                                        <?php }
                                        }
                                        ?>
                                    </tbody>
                                    <!-- <tfoot class="table-foot">
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td>£89.99</td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>Flat rate: £2.00</td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total </th>
                                            <td>£91.99</td>
                                        </tr>
                                    </tfoot> -->
                                </table>
                                <div class="shop-payment-method">
                                    <div id="PaymentMethodAccordion">
                                        <div class="card">
                                            <label for="payment_method">Payment Method</label>
                                            <!-- <select class="" name="payment_method" id="">
                                                <?php
                                                foreach ($payment_method as $key) { ?>
                                                    <option value="<?= $key['payment_method_id'] ?>"><?= $key['payment_method_name'] ?></option>
                                                <?php } ?>
                                            </select> -->
                                        </div>
                                    </div>
                                    <!-- <p class="p-text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#/">privacy policy.</a></p> -->
                                    <div class="agree-policy">
                                        <!-- <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="privacy" id="privacy" class="custom-control-input visually-hidden">
                                            <label for="privacy" class="custom-control-label">I have read and agree to the website terms and conditions <span class="required">*</span></label>
                                        </div> -->
                                    </div>
                                    <button type="submit" style="width: 100%;" name="payUrl" id="confirmBuy" class="btn-theme">Momo</button>
                                    <button type="submit" style="width: 100%;" name="vnpay" id="confirmBuy" class="btn-theme">VNPay</button>
                                    <button type="submit" style="width: 100%;" name="tienmat" id="confirmBuy" class="btn-theme">COD</button>
                                    <!-- <button type="submit" style="width: 100%;" id="confirmBuy" class="btn-theme">Place order</button> -->  

                                </div>
                            </div>
                        </div>
                        <!--== End Order Details Accordion ==-->
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!--== End Shopping Checkout Area Wrapper ==-->
</main>
<!-- <script>
    var variantId = document.getElementsByName('variant_id');

    function confirmBuy() {
        var radios = document.getElementsByName('payment_method');
        var payment_method_id = "";
        var variant_id = [];

        // Lặp qua danh sách các phần tử input
        for (var i = 0; i < variantId.length; i++) {
            // Thêm giá trị của mỗi phần tử vào mảng
            variant_id.push(variantId[i].value);
        }
        radios.forEach(function(radio) {
            if (radio.checked) {
                payment_method_id = radio.value;
            }
        });
        // console.log(variant_id);
        var queryString = variant_id.map(function(value) {
            return 'cartId[]=' + encodeURIComponent(value);
        }).join('&');
        window.location.href = "index.php?url=buy-success&" + queryString + "&paymentMethodId=" + payment_method_id;

    }
</script> -->