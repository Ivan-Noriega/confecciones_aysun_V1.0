const toggle = document.querySelector(".toggle")
const navmenu = document.querySelector(".nav-menu")

toggle.addEventListener("click", () =>{
    navmenu.classList.toggle("menu-visible");
    if(navmenu.classList.contains("menu-visible")){
        toggle.setAttribute("aria-label", "Cerrar menú")
    }
    else{
        toggle.setAttribute("aria-label", "Abrir menú")
    }
})