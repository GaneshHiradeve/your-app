let userBox = document.querySelector('.header .header-2 .user-box');

document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .header-2 .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 60){
      document.querySelector('.header .header-2').classList.add('active');
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}

new Swiper('.gallery-slider', {
   speed: 400,
   loop: true,
   centeredSlides: true,
   autoplay: {
     delay: 5000,
     disableOnInteraction: false
   },
   slidesPerView: 'auto',
   pagination: {
     el: '.swiper-pagination',
     type: 'bullets',
     clickable: true
   },
   breakpoints: {
     320: {
       slidesPerView: 1,
       spaceBetween: 20
     },
     640: {
       slidesPerView: 3,
       spaceBetween: 20
     },
     992: {
       slidesPerView: 5,
       spaceBetween: 20
     }
   }
 });