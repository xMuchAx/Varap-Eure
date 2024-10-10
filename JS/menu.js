




document.body.addEventListener("mousemove", function(event){
    let mouse = document.getElementById("mouse");
    let click = document.getElementById("click");
    mouse.style.left = event.pageX + "px";
    mouse.style.top = event.pageY + "px";
    click.style.left = event.pageX + "px";
    click.style.top = event.pageY + "px";
    mouse.style.opacity = "1";
    click.style.opacity = "1";
    // mouse.style.position = "absolute";
    // click.style.position = "absolute";
}) 


document.body.addEventListener("mousedown", function(event){
    mouse.style.animation = "clickDown 0.5s ease-out";
    click.style.animation = "clickDown 0.5s ease-out";

    setTimeout(function(){
        mouse.style.animation = "";
        click.style.animation = "";
    }, 500)  
})


//MENU DESKTOP

let lienMenuDesktop = document.getElementsByClassName("lienMenuDesktop");
let containerMenu = document.getElementsByClassName("containerMenu");


for (let i = 0; i < 4; i++) {

    lienMenuDesktop[i].addEventListener("mouseover", function(){
        containerMenu[i].style.transform = "translateY(0%)";
    }) 

    lienMenuDesktop[i].addEventListener("mouseleave", function(){
        containerMenu[i].style.transform = "translateY(-101%)";
    })

        containerMenu[i].addEventListener("mouseover", function(){
            containerMenu[i].style.transform = "translateY(0%)";
        
        })
        
        containerMenu[i].addEventListener("mouseleave", function(){
            containerMenu[i].style.transform = "translateY(-101%)";
        })

}



//MENU MOBIL//

let lienMenuMob = document.getElementsByClassName("lienMenuMob");
let containerRedirectionMob = document.getElementsByClassName("containerRedirectionMob");
let addMob = document.getElementsByClassName("addMob");

let countMob = [0, 0, 0, 0 ,0];

for (let i = 0; i < 4; i++) {


lienMenuMob[i].addEventListener("mousedown", function(){

   if(countMob[i]%2 != 0){
    containerRedirectionMob[i].style.maxHeight ="0";
    addMob[i].src = "icon/add.png";
    addMob[i].style.transform = "rotate(0deg)";




   }else{
    containerRedirectionMob[i].style.maxHeight ="200px";
    addMob[i].src = "icon/remove.png";
    addMob[i].style.transform = "rotate(180deg)";


   }

   countMob[i]++;

})

}

let iconNavMob = document.getElementsByClassName("iconNavMob");
let navMob = document.getElementsByClassName("navMob");
let navDesk = document.getElementsByClassName("navDesk");

let countMenu = 0;

iconNavMob[0].addEventListener("mousedown", function(){

    if(countMenu%2 != 0){
        navMob[0].style.opacity ="0";
        navMob[0].style.transform = "translateY(-120%)";
        iconNavMob[0].src = "icon/menu.png";
        iconNavMob[0].style.transform="rotate(0deg)";
    
       }else{
        
        navMob[0].style.opacity ="1";
        navMob[0].style.transform = "translateY(0%)";
        iconNavMob[0].src = "icon/arrow_up.png";
        iconNavMob[0].style.transform="rotate(360deg)";
       

       }
    
       countMenu++;
    
})



//DISPARITION OUVERTURE MENU MOB REZISE

function handle(event){
    if(screen.width >= 900){
        navMob[0].style.opacity ="0";
        navMob[0].style.transform = "translateY(-120%)";

        iconNavMob[0].src = "icon/menu.png";
        iconNavMob[0].style.transform="rotate(0deg)";
        countMenu = 0;
    }
}
window.onresize = handle;



//FILINFO REDIRECTION COOKIE

let infoTout = document.querySelectorAll(".tout");
let infoEscalade = document.querySelectorAll(".escalade");
let infoPratique = document.querySelectorAll(".pratique");
let infoVarap = document.querySelectorAll(".varap");
console.log(document.cookie)


for (let i = 0; i < 2; i++) {
    
    infoTout[i].addEventListener('click', function(){
        document.cookie = 'user=; expires=Thu, 01 Jan 1970 00:00:00 UTC'; 
        document.cookie = "info=tout";
        console.log(document.cookie);

    })


    infoEscalade[i].addEventListener('click', function(){
        document.cookie = 'user=; expires=Thu, 01 Jan 1970 00:00:00 UTC'; 
        document.cookie = "info=escalade";
        console.log(document.cookie);

    })


    infoPratique[i].addEventListener('click', function(){
        document.cookie = 'user=; expires=Thu, 01 Jan 1970 00:00:00 UTC'; 
        document.cookie = "info=pratique";
        console.log(document.cookie);

    })

    infoVarap[i].addEventListener('click', function(){
        document.cookie = 'user=; expires=Thu, 01 Jan 1970 00:00:00 UTC'; 
        document.cookie = "info=varap";
        console.log(document.cookie);
    })

}












