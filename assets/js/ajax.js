function showSizebyProduct(){
        var color = $(".color-list").val();
        var product_id = $(".product_id").val();
        $.ajax({
            url:"./Models/showSizebyProduct.php",
            method:"post",
            data:{color:color, product_id:product_id},
            success:function(data){
                $('.size-list').html(data);
            }
        });
}
// Product Quantity JS
var proQty = $(".pro-qty");
proQty.append('<div class= "dec qty-btn">-</div>');
proQty.append('<div class="inc qty-btn">+</div>');
$('.qty-btn').on('click', function (e) {
  e.preventDefault();
  var $button = $(this);
  var oldValue = $button.parent().find('input').val();
  if ($button.hasClass('inc')) {
    var newVal = parseFloat(oldValue) + 1;
  } else {
    // Don't allow decrementing below zero
    if (oldValue > 1) {
      var newVal = parseFloat(oldValue) - 1;
    } else {
      newVal = 1;
    }
  }
  $button.parent().find('input').val(newVal);
});

var checkboxes = document.querySelectorAll(".productCartCheckbox");
var total_money=0;
checkboxes.forEach(function(checkbox) {
  // Gắn sự kiện "change" cho mỗi ô checkbox
  checkbox.addEventListener("change", function() {
      // Kiểm tra xem ô checkbox có được chọn không
      var isChecked = this.checked;
      // Lấy giá trị của ô checkbox
      var checkboxValue = this.value;
      // Hiển thị kết quả
      if(isChecked)
      { 
        $.ajax({
          url:"./Models/Subtotal.php",
          method:"post",
          data:{cart_id:checkboxValue},
          success:function(data){
            total_money+=Number(data);
            // console.log(total_money);
            document.getElementById("subtotal").innerHTML=total_money + "$";
            // document.getElementById("total_subtotal").value=total_money;

          }
        });
        // total_money+=Number(checkboxValue);
      }else{
        $.ajax({
          url:"./Models/Subtotal.php",
          method:"post",
          data:{cart_id:checkboxValue},
          success:function(data){
            total_money-=Number(data);
            // console.log(total_money);
            document.getElementById("subtotal").innerHTML=total_money + "$";
          }
        });
        // console.log(total_money);
      }
      // console.log("Checkbox value:", checkboxValue, " - Checked:", isChecked);
  });
});

