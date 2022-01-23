
const black = document.getElementById('black-btn');
const blue = document.getElementById('blue-btn');
const red = document.getElementById('red-btn');
const others = document.getElementById('others');
const  product = document.querySelector('.shop-product-1');
// const btns = document.getElementsByClassName('filter-btn');

let black_ =false;
let blue_ =false;
let red_ =false;
let others_ =false;

const products = document.getElementById('products');

let productsChilds = products.children;
// product_name = document.getElementById('product-name');
/*
for(let j=0;j< btns.length;j++){
    btns[j].addEventListener("click", function() {
        // console.log(btns[i].innerHTML);
        for(let i=0;i<productsChilds.length;i++){
            // console.log('child: '+ i);
            console.log(productsChilds[i].querySelector('h3').childNodes[0].textContent);
            // if(!productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('blue') && btns[j].innerHTML ==='blue'){
            //     console.log('blue');
            //     // console.log(productsChilds[i].querySelector('h3').childNodes[0].textContent);
            //     productsChilds[i].style.display = 'none';
            // }else if(!productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('black') && btns[j].innerHTML === 'black'){
            //     console.log('black');
            //     // console.log(productsChilds[i].querySelector('h3').childNodes[0].textContent);
            //     productsChilds[i].style.display = 'none';
            // }else if(!productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('red') && btns[j].innerHTML ==='red'){
            //     console.log('red');

            //     // console.log(productsChilds[i].querySelector('h3').childNodes[0].textContent);
            //     productsChilds[i].style.display = 'none';
            // }else if(!productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('tortoise') && btns[j].innerHTML==='others'){
            //     // console.log(productsChilds[i].querySelector('h3').childNodes[0].textContent);
            //     productsChilds[i].style.display = 'none';
            // }
        }
    })
}*/

blue.addEventListener('click',function(){
    for(let i=0;i<productsChilds.length;i++){
        // console.log('child: '+ i);
        if(!productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('blue')){
            console.log(productsChilds[i].querySelector('h3').childNodes[0].textContent);
            productsChilds[i].style.display = 'none';
        }
    }
})

black.addEventListener('click',function(){
    for(let i=0;i<productsChilds.length;i++){
        // console.log('child: '+ i);
        if(!productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('black')){
            console.log(productsChilds[i].querySelector('h3').childNodes[0].textContent);
            productsChilds[i].style.display = 'none';
        }
    }
})
others.addEventListener('click',function(){
    for(let i=0;i<productsChilds.length;i++){
        // console.log('child: '+ i);
        if(!productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('tortoise')){
            console.log(productsChilds[i].querySelector('h3').childNodes[0].textContent);
            productsChilds[i].style.display = 'none';
        }
    }
})
red.addEventListener('click',function(){
    for(let i=0;i<productsChilds.length;i++){
        // console.log('child: '+ i);
        if(!productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('red')){
            console.log(productsChilds[i].querySelector('h3').childNodes[0].textContent);
            productsChilds[i].style.display = 'none';
        }
    }
})
/*}
for(let i=0;i<productsChilds.length;i++){
    console.log('child: '+ i);
    if(black_ === true){
        console.log('>>: '+ black_);

        if(!productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('black')){
            console.log(productsChilds[i].querySelector('h3').childNodes[0].textContent);
            productsChilds[i].style.display = 'none';
        }
    }else if(blue_){
        if(!productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('blue')){
            productsChilds[i].style.display = 'none';
        }
    }else if(red_){
        if(!productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('red')){
            productsChilds[i].style.display = 'none';
        }
    }else if(others_){
        if(!productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('tortoise')){
            productsChilds[i].style.display = 'none';
        }
    }
    // console.log(productsChilds[i].querySelector('h3').childNodes[0].textContent.toLowerCase().includes('blue'));
    // for(let j=0;j<productsChilds[i].childNodes.length;j++)
    //      console.log(productsChilds[i].childNodes[j].nodeValue);
}
*/