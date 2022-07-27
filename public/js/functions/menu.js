const $menu=document.querySelector("#menu-active");

$menu.addEventListener("click",()=>{
    const $ul=document.querySelector(".header-nav__ul");
    if($ul){
        $ul.classList.toggle("header-nav__ul--active");
    }
})


