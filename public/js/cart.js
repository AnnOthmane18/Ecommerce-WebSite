
const cart = document.getElementById('cart');
const closeCartBtn = document.getElementById('close-cart');
const ClearBtn = document.querySelector('.clearAll');
const cartBtn = document.getElementById('cart-icon');
const cartItemsNbr = document.querySelector('.cart-items-nbr');


const menu_cart = document.getElementById('menu');
const menu_icon = document.getElementById('hamburger-icon');
const menu_close = document.getElementById('close-menu');


    cartBtn.addEventListener('click', function(){
        cart.classList.add('show-cart');
        cart.classList.remove('hide-cart');
    })
    
    closeCartBtn.addEventListener('click', function(){
        cart.classList.add('hide-cart');
        cart.classList.remove('show-cart');
    })

menu_icon.addEventListener('click', function(){
    menu_cart.classList.add('show-cart-menu');
    menu_cart.classList.remove('hide-cart-menu');

    // console.log('cart clicked !!');
})

menu_close.addEventListener('click', function(){
    menu_cart.classList.add('hide-cart-menu');
    menu_cart.classList.remove('show-cart-menu');
    // console.log('cart clicked !!');
})

document.getElementById('nav-link').addEventListener('click', function(){
    menu_cart.classList.add('hide-cart-menu');
    menu_cart.classList.remove('show-cart-menu');
})