
const cart = document.getElementById('cart');
const closeCartBtn = document.getElementById('close-cart');
const ClearBtn = document.querySelector('.clearAll');
const cartBtn = document.getElementById('cart-icon');
const cartItemsNbr = document.querySelector('.cart-items-nbr');

// while(true){
    cartBtn.addEventListener('click', function(){
        cart.classList.add('show-cart');
        cart.classList.remove('hide-cart');

        // console.log('cart clicked !!');
    })
    
    closeCartBtn.addEventListener('click', function(){
        cart.classList.add('hide-cart');
        cart.classList.remove('show-cart');
        // console.log('cart clicked !!');
    })
// }