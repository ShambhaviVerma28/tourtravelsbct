let menu=document.querySelector('#menu-btn')
let navbar=document.querySelector('.header .navbar');

window.onscroll = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

function popup(popup_name)
    {
      get_popup=document.getElementById(popup_name);
      if(get_popup.style.display=="flex")
      {
        get_popup.style.display="none";
      }
      else
      {
        get_popup.style.display="flex";
      }
    }

var Swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


let loadMoreBtn=document.querySelector('.package .load-more btn');
let currentItem=3;

loadMoreBtn.onclick= () => {
  let boxes= [...document.querySelectorAll('.package .box-container .box')];
  for(var i=currentItem; i< currentItem + 3; i++){
    boxes[i].style.display= 'inline-block';
  };
  currentItem+=3;
  if(currentItem>= boxes.length){
    loadMoreBtn.style.display= 'none';
  }
};