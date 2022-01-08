

$(function() {
    $('.addCart').on('click',addToCart);
    // $('.cart-item-remove').on('click',deleteToCart);

});

function addToCart () {
    event.preventDefault();
    var cartStore = [];

    $(document).ready(function() {
        $.getJSON("../data/shoes.json",function(data) {
            var shoes = (data.shoes);
            var shoe = shoes[id];
            
            console.log(shoe);

            if(checkProductExistInCart(shoe)) {
                console.log('có rồi');
                var indexProductInCart = cartStore.findIndex(item => item.id === shoe.id);
                var productItemInCart = cartStore[indexProductInCart];
                 cartStore[indexProductInCart] = productItemInCart;
            }
            else {
                    cartStore.push({
                    id : shoe.id,
                    image : shoe.image,
                    name : shoe.name,
                    price : shoe.price,
                    amout : 1,
                    color : shoe.color,
                });
            }
            
        renderCartDOM();

        }).fail(function() {
            console.log("Lỗi......");
        });
    });
    var url = $(this).data('id');
    var id = url - 1;
    function checkProductExistInCart(a) {
        // a = url;
        const indexProductInCart = cartStore.findIndex(item => item.id === a);
        if (indexProductInCart > -1) { // 0,1,2,3
          return true;
        } else {
          return false;
        }
      }
      function renderCartDOM() {
        $(".cart-empty").addClass('none-active');

        $('.buttonAddCart').filter(`[data-id=${url}]`).addClass('none-active');
        $('.check-btn').filter(`[data-id=${url}]`).addClass('active');


        var html = ``;
        var domCart = cartStore.forEach(productItem => {
            html = `<div class="cart-item">
          <div class="cart-item-left">
              <div class="cart-item-image" style="background-color: ${productItem.color} ">
                  <div class="cart-item-image-block">
                      <img src="${productItem.image}" alt="">
                  </div>
              </div>
          </div>
          <div class="cart-item-right">
              <div class="cart-item-name">${productItem.name}</div>
              <div class="cart-item-price">${productItem.price}</div>
              <div class="cart-item-actions">
                  <div class="cart-item-count">
                      <div  class="cart-item-count-button">-</div>
                      <div class="cart-item-count-number">${productItem.amout}</div>
                      <div  class="cart-item-count-button">+</div>
                  </div>
                  <div data-id="${productItem.id}" onclick="xoa(this)" class="delecart cart-item-remove">
                      <img src="../style/webdev-intern-assignment-main/app/assets/trash.png" class="cart-item-remove-icon" alt="">
                  </div>
              </div>
          </div>
      </div>`;
            $('.cart-items').append(html);
            var total = 0;
            var totalPrice = productItem.price;
             total += totalPrice;
            document.getElementById('total').innerHTML = total;
            console.log(totalPrice);
        });

      }
}
function total() {
    var listCart = document.getElementById('Cart_list');
    var list = listCart.children;
    console.log (list);
    var total = 0;
    for (var i = 0; i< list.length; i++) {
        var children = document.getElementsByClassName('cart-item-price');
        var price = parseInt(children.innerHTML);
        total += price;
    }
    document.getElementById('total').innerHTML = total;
}
function xoa(x) {

    var url = $('.delecart').data('id');
    const indexProductInCart = cartStore.findIndex(item => item.id === a);
    var El = x.parentElement.parentElement.parentElement;
    $('.buttonAddCart').filter(`[data-id=${url}]`).removeClass('none-active');
    $('.check-btn').filter(`[data-id=${url}]`).removeClass('active');
    El.remove();

}
