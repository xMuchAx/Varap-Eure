let carousel = document.getElementById("carousel");
let btnRight = document.getElementById("btnRight");
let btnLeft = document.getElementById("btnLeft");
let count = 0;
let pourcent;

btnLeft.addEventListener("click", function(){
    count++;
    console.log(count)
    pourcent = -33.33 + count*3.33;
    carousel.style.transition = "transform 0.5s ease";
    

    if(count == 10){

        btnLeft.style.pointerEvents = "none";

        setTimeout(() => {
            btnLeft.style.pointerEvents = "";

        }, 500);

        count = 0;
        carousel.style.transform = "translateX("+pourcent+"%)";

        setTimeout(() => {
            carousel.style.transition = "none";
            carousel.style.transform = "translateX(-33.33%)";
        }, 500);

    }else{
        carousel.style.transform = "translateX("+pourcent+"%)";
    }

})

btnRight.addEventListener("click", function(){
    count--;
    console.log(count)
    pourcent = -33.33 + count*3.33;
    carousel.style.transition = "transform 0.5s ease";


    if(count == -10){

        btnRight.style.pointerEvents = "none";

        setTimeout(() => {
            btnRight.style.pointerEvents = "";
    
        }, 500);

        count = 0;
        carousel.style.transform = "translateX("+pourcent+"%)";

        setTimeout(() => {
            carousel.style.transition = "none";
            carousel.style.transform = "translateX(-33.33%)";
        }, 500);

    }else{
        carousel.style.transform = "translateX("+pourcent+"%)";
    }
})
