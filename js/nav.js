const hamburguesa = document.querySelector('#hamburger');
const menu = document.querySelector('#menu');
const header = document.querySelector('.header');
const logo = document.querySelector('.header__img');





hamburguesa.addEventListener('click', ()=>{ 
    hamburguesa.classList.toggle('animate');
    menu.classList.toggle('menu--mostrar');
    hamburguesa.classList.toggle('hamburger__fijo');
    logo.classList.toggle('header__img-top');
    
    
})


