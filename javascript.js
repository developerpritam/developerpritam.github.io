// sticky navbar animation

window.addEventListener("scroll", function(){
    let menuarea = document.getElementById('menuarea');

    if(window.pageYOffset > 1){
        menuarea.classList.add("cus-nav");
        }
    else{
        menuarea.classList.remove("cus-nav")
    }
});
// sticky navbar animation
