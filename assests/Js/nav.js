
const primaryNav = document.querySelector(".Nav-bar");
const NavTog = document.querySelector(".nav-bar-tog");

NavTog.addEventListener('click', () => {
const visibility = primaryNav.getAttribute('data-visible');

if (visibility=== "true"){
    primaryNav.setAttribute('data-visible',false) ;
    NavTog.setAttribute("aria-expanded",false);
    collections.setAttribute("clicked",false)
    Accessories.setAttribute("clicked",false)
    More.setAttribute("clicked",false)
    Fabric.setAttribute("clicked",false)
    shop.setAttribute("clicked",false)

}
else{
    primaryNav.setAttribute('data-visible',true);
    NavTog.setAttribute("aria-expanded",true);
  
}
})

const shop = document.querySelector(".shop");
shop.addEventListener('click', () => {
    const check_if_clicked = shop.getAttribute("clicked")
    if (check_if_clicked === "true")
    {
        shop.setAttribute("clicked",false)
    }
    else{shop.setAttribute("clicked",true)
    collections.setAttribute("clicked",false)
    Accessories.setAttribute("clicked",false)
    More.setAttribute("clicked",false)
    Fabric.setAttribute("clicked",false)
}
})
const collections = document.querySelector(".Collections");
collections.addEventListener('click', () => {
    const check_if_clicked = collections.getAttribute("clicked")
    if (check_if_clicked === "true")
    {
        collections.setAttribute("clicked",false)
    }
    else{collections.setAttribute("clicked",true)
    shop.setAttribute("clicked",false)
    
    Accessories.setAttribute("clicked",false)
    More.setAttribute("clicked",false)
    Fabric.setAttribute("clicked",false)
}
})
const Accessories = document.querySelector(".Accessories");
Accessories.addEventListener('click', () => {
    const check_if_clicked = Accessories.getAttribute("clicked")
    if (check_if_clicked === "true")
    {
        Accessories.setAttribute("clicked",false)
    }
    else{Accessories.setAttribute("clicked",true)
    shop.setAttribute("clicked",false)
    collections.setAttribute("clicked",false)
   
    More.setAttribute("clicked",false)
    Fabric.setAttribute("clicked",false)
}
})
const More = document.querySelector(".More");
More.addEventListener('click', () => {
    const check_if_clicked = More.getAttribute("clicked")
    if (check_if_clicked === "true")
    {
        More.setAttribute("clicked",false)
    }
    else{More.setAttribute("clicked",true)
    shop.setAttribute("clicked",false)
    collections.setAttribute("clicked",false)
    Accessories.setAttribute("clicked",false)
   
    Fabric.setAttribute("clicked",false)
}
})
const Fabric = document.querySelector(".Fabric");
Fabric.addEventListener('click', () => {
    const check_if_clicked = Fabric.getAttribute("clicked")
    if (check_if_clicked === "true")
    {
        Fabric.setAttribute("clicked",false)
    }
    else{Fabric.setAttribute("clicked",true)
    More.setAttribute("clicked",false)
    Accessories.setAttribute("clicked",false)
    collections.setAttribute("clicked",false)
    shop.setAttribute("clicked",false)
}
})

