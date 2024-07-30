<main class="main-content">
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
                <li>Shopping Cart</li>
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
    <form action="index.php?url=checkout" method="post">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="shopping-cart-form table-responsive">
              <form action="#" method="post">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th class="remove">&nbsp;</th>
                      <th class="thumb">&nbsp;</th>
                      <th>Image</th>
                      <th class="name">Product</th>
                      <th class="name">Size</th>
                      <th class="price">Color</th>
                      <th class="price">Price</th>
                      <th class="quantity">Quantity</th>
                      <th class="subtotal">Total</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $count = 1;
                    foreach ($productCarts as $key) {
                    ?>
                      <tr class="cart-product-item">
                        <td class="remove"><a href="index.php?url=del-productCart&idCart=<?= $key['cart_id'] ?>"><i class="fa fa-trash-o"></i></a></td>
                        <td><?= $count ?></td>
                        <td class="thumb"><a href="index.php?url=detail-product&id=<?= $key['product_id'] ?>"><img src="<?= $key['product_image'] ?>" width="90" height="110" alt="Image-HasTech"></a></td>
                        <td class="name">
                          <h4 class="title"><a href="index.php?url=detail-product&id=<?= $key['product_id'] ?>"><?= $key['product_name'] ?></a></h4>
                        </td>
                        <td class="name"><span class="price"><?= $key['size'] ?></span></td>
                        <td class="name"><span class="price"><?= $key['color'] ?></span></td>
                        <td class="price"><span class="price"><?= $key['product_price'] ?></span></td>
                        <td class="product-quantity">
                          <div class="pro-qty"><input type="text" class="quantity" title="Quantity" value="<?= $key['cart_quantity'] ?>"></div>
                        </td>
                        <td class="subtotal"><span class="price"><?= $key['cart_totals_money'] ?></span></td>
                        <td><input type="checkbox" class="productCartCheckbox" name="cart_id[]" value="<?= $key['cart_id'] ?>" id=""></td>
                      </tr>
                    <?php $count++;
                    } ?>
                    <tr class="actions">
                      <td class="border-0" colspan="10">
                        <a href="index.php?url=shop" class="btn-theme btn-flat">Continue Shopping</a>
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
                <h5 class="title">Calculate Shipping</h5>
                <div class="desc">
                  <p>Estimate your shipping fee *</p>
                </div>
              </div>
              <span data-bs-toggle="collapse" data-bs-target="#CategoriesTwo" aria-expanded="true" role="button">Calculate shipping</span>
              <div id="CategoriesTwo" class="collapse show" data-bs-parent="#CategoriesAccordion">
                <form action="#" method="post">
                  <div class="row row-gutter-50">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="visually-hidden" for="FormCountry">State</label>
                        <select id="FormCountry" class="form-control">
                          <option selected>Select a country…</option>
                          <option>...</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="stateCounty" class="visually-hidden">State / County</label>
                        <input type="text" id="stateCounty" class="form-control" placeholder="State / County">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="townCity" class="visually-hidden">Town / City</label>
                        <input type="text" id="townCity" class="form-control" placeholder="Town / City">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="postcodeZip" class="visually-hidden">Postcode / ZIP</label>
                        <input type="text" id="postcodeZip" class="form-control" placeholder="Postcode / ZIP">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <button type="submit" class="update-totals">Update totals</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="shipping-form-coupon">
              <div class="section-title-cart">
                <h5 class="title">Coupon Code</h5>
                <div class="desc">
                  <p>Enter your coupon code if you have one.</p>
                </div>
              </div>
              <form action="#" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="couponCode" class="visually-hidden">Coupon Code</label>
                      <input type="text" id="couponCode" class="form-control" placeholder="Enter your coupon code..">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <button type="submit" class="coupon-btn">Apply coupon</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <div class="shipping-form-cart-totals">
              <div class="section-title-cart">
                <h5 class="title">Cart totals</h5>
              </div>
              <div class="cart-total-table">
                <table class="table">
                  <tbody>
                    <tr class="cart-subtotal">
                      <td>
                        <p class="value">Totals</p>
                      </td>
                      <td>
                        <p class="subtotal" id="subtotal">0$</p>
                      </td>
                    </tr>
                    <!-- <tr class="shipping">
                      <td>
                        <p class="value">Shipping</p>
                      </td>
                      <td>
                        <ul class="shipping-list">
                          <li class="radio">
                            <input type="radio" name="shipping" id="radio1" checked>
                            <label for="radio1"><span></span> Flat Rate</label>
                          </li>
                          <li class="radio">
                            <input type="radio" name="shipping" id="radio2">
                            <label for="radio2"><span></span> Free Shipping</label>
                          </li>
                          <li class="radio">
                            <input type="radio" name="shipping" id="radio3">
                            <label for="radio3"><span></span> Local Pickup</label>
                          </li>
                        </ul>
                      </td>
                    </tr> -->
                    <!-- <tr class="order-total">
                      <td>
                        <p class="value">Total</p>
                      </td>
                      <td>
                        <p class="price">£128.00</p>
                      </td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
              <input style="width:100%;" type="submit" class="btn-theme btn-flat" name="proceedToCheckout" value="Proceed to checkout" >
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <!--== End Blog Area Wrapper ==-->
</main>
<!-- <script>
  function getIdProductChecked() {
    var id_product_checked = [];
    var checkboxes = document.querySelectorAll(".productCartCheckbox");
    checkboxes.forEach(function(checkbox) {
      if (checkbox.checked) {
        id_product_checked.push(checkbox.value);
      }
    });
    // $.ajax({
    //           url:"./Models/getProductBuy.php",
    //           method:"post",
    //           data:{product_id_buy:id_product_checked},
    //           success:function(data){
    //               console.log(data);
    //               window.location.href = "index.php?url=checkout";
    //           }
    //       });
    var queryString = id_product_checked.map(function(value) {
      return 'data[]=' + encodeURIComponent(value);
    }).join('&');
    window.location.href = "index.php?url=checkout&" + queryString;
    // console.log(checkboxes.length);
  }
</script> -->