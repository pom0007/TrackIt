const fullscreenBtn =
document.getElementById("fullscreenBtn");

fullscreenBtn.addEventListener("click",()=>{

    const wrapper =
    document.querySelector(".wrapper");

    if(!document.fullscreenElement){

        wrapper.requestFullscreen();

        wrapper.classList.add("fullscreen-mode");

        fullscreenBtn.innerHTML =
        '<i class="fa-solid fa-compress"></i>';

    }else{

        document.exitFullscreen();

    }

});

document.addEventListener(
"fullscreenchange",
()=>{

    const wrapper =
    document.querySelector(".wrapper");

    if(!document.fullscreenElement){

        wrapper.classList.remove(
        "fullscreen-mode"
        );

        fullscreenBtn.innerHTML =
        '<i class="fa-solid fa-expand"></i>';
    }

});