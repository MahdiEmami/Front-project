const sections= document.querySelectorAll('.section__title');
sections.forEach(n=>{
    const expand= n.parentElement.nextElementSibling ;
    n.addEventListener('click',(m)=>{
        expand.classList.toggle('dashboard__sect-container--active');
    })
    })
const cardLinks=document.querySelectorAll(".dashboard__card");
cardLinks.forEach(n=>{
    const link=n.querySelector('a');
    n.addEventListener('click',(c)=>{
        window.location.href=link.href;
    })
})