const hamburguesa = document.querySelector('#hamburger');
const menu = document.querySelector('#menu');
const header = document.querySelector('.header');





hamburguesa.addEventListener('click', ()=>{ 
    hamburguesa.classList.toggle('animate');
    menu.classList.toggle('menu--mostrar');
    hamburguesa.classList.toggle('hamburger__fijo');
    
})


