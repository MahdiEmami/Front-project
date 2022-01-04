//hamburger handler start
const bars= document.querySelector('.header__bar');
let isopen=document.querySelector('.header__links');
bars.addEventListener('click',()=>{
isopen.classList.toggle('header_close');
}
)
//hamburger handler end