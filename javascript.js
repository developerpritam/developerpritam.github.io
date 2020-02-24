
// loading animation ////////////////////////////////////////




// loading animation ////////////////////////////////////////


// sticky navbar animation

window.addEventListener("scroll", function(){
    let menuarea = document.getElementById('menuarea');

    if(window.pageYOffset > 0){
        menuarea.classList.add("cus-nav");

    }
    else{
        menuarea.classList.remove("cus-nav")
    }
});
