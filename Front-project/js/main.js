//hamburger handler start
const bars= document.querySelector('.header__bar');
let isopen=document.querySelector('.header__links');
bars.addEventListener('click',()=>{
isopen.classList.toggle('header_close');
}
)
//hamburger handler end
//async POST request start
const hotel_container=document.querySelector(".tours__container");
const form=document.getElementById("welcome__form");
var notfound=false;
form.addEventListener("submit",(e)=>{
    e.preventDefault();
    const form_data=new FormData(form);
    fetch("update.php",{
        method:"post",
        body:form_data 
    }).then(response=>response.json())
    .then(data=>{
        if(data=='empty'){
            window.alert("لطفا هر 3 فیلد را پر نمایید");
        }
        if(data.length==0){
            window.alert("موردی یافت نشد");
        }
        else if(data.length>0) {
            hotel_container.innerHTML="";
            var span="";
            const baseURI="admin/addHotel/uploads/";
             for(var i=0;i<data.length;i++){
                 for(var j=0;j<data[i][6];j++){
                     span+="<i class='fa fa-star'></i>"
                 }
                 hotel_container.innerHTML+=`<article class="card hotel__card hotel__card2">
                 <img class='hotel__card__image' src="${baseURI+data[i][7]}">
                 <h3>${data[i][1]}</h3>
                 <p class='right med'>${data[i][3]}/${data[i][2]}</p>
                 <p class='right med'>${data[i][4]}</p>
                 <p class='right med'>قیمت به ازای هر شب  <span class='red'>${data[i][5]}</span>تومان</p>
                 <span class='yellow'>${span}</span>
                 <a class="btn-fill" href='hotel_details.php?id=${data[i][0]}'>بیشتر</a>
                 </article>`
                 span="";
             }
        }
        
    })
})
//async POST request end
