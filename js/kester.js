function cart() {
  if (cart_content.style.right == '0' || cart_content.style.right == '0px') {
    cart_content.style.right = '-300px';
    cart_fixed.style.right = '0';
    cart_content.style.transition = '1s';
    cart_fixed.style.transition = '1s';
    after_cart.style.right = '0';
    after_cart.style.transition = '1s';
  } else {
    cart_content.style.right = '0'
    cart_fixed.style.right = '300px';
    cart_content.style.transition = '1s';
    cart_fixed.style.transition = '1s';
    after_cart.style.right = '300px';
    after_cart.style.transition = '1s';
  }
}

function cart_mobile() {
  if (cart_content__mobile.style.top == '100vh') {
    cart_content__mobile.style.top = '50vh';
    cart_content__mobile.style.transition = '1s';
    cart_fixed__mobile.style.bottom = 'calc(50vh)';
    cart_fixed__mobile.style.transition = '1s';
  } else {
    cart_content__mobile.style.top = '100vh';
    cart_content__mobile.style.transition = '1s';
    cart_fixed__mobile.style.bottom = '0';
    cart_fixed__mobile.style.transition = '1s';
  }
}