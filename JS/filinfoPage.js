
let gridInfo = document.querySelectorAll(".gridInfo");
let redirectionInfos = document.querySelectorAll(".redirectionInfo");
let cookieString = document.cookie;
let cookies = cookieString.split(";");
let infoCookie = cookies.find(cookie => cookie.includes("info="));
let info;
info = infoCookie.split("=")[1];

console.log(info)



if(infoCookie == "" || infoCookie == undefined || infoCookie == null){
    info = "tout";
}else{
    info = infoCookie.split("=")[1];
}

if(info=="tout"){
    gridInfo[0].style.transform="scale(100%)";
    redirectionInfos[0].style.backgroundImage="linear-gradient(110deg,#f1a242, #f3c791, #f1a242 )";

}else if(info=="escalade"){
    gridInfo[1].style.transform="scale(100%)";
    redirectionInfos[1].style.backgroundImage="linear-gradient(110deg,#f1a242, #f3c791, #f1a242 )";

}else if(info=="pratique"){
    gridInfo[2].style.transform="scale(100%)";
    redirectionInfos[2].style.backgroundImage="linear-gradient(110deg,#f1a242, #f3c791, #f1a242 )";

}else if(info=="varap"){
    gridInfo[3].style.transform="scale(100%)";
    redirectionInfos[3].style.backgroundImage="linear-gradient(110deg,#f1a242, #f3c791, #f1a242 )";

}





redirectionInfos.forEach((redirectionInfo, key) => {

    redirectionInfo.addEventListener("click", (event) =>{

        for (let i = 0; i < 4; i++) {
            gridInfo[i].style.opacity = "0";
            gridInfo[i].style.transform = "scale(0%)";
            redirectionInfos[i].style.backgroundImage="";


        }
        
        gridInfo[key].style.opacity = "1";
        gridInfo[key].style.transform = "scale(100%)";
        redirectionInfos[key].style.backgroundImage="linear-gradient(110deg,#f1a242, #f3c791, #f1a242 )";



    }) 

})



