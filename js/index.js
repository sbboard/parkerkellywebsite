var freshArray = document.getElementsByClassName("freshText");
    document.getElementsByClassName("contentBoxes")[0].addEventListener("mouseover", function() { textShow(0); } );
    document.getElementsByClassName("contentBoxes")[1].addEventListener("mouseover", function() { textShow(1); } );
    document.getElementsByClassName("contentBoxes")[2].addEventListener("mouseover", function() { textShow(2); } );
    document.getElementsByClassName("contentBoxes")[3].addEventListener("mouseover", function() { textShow(3); } );

    document.getElementsByClassName("contentBoxes")[0].addEventListener("mouseout", function() { textLeave(0); } );
    document.getElementsByClassName("contentBoxes")[1].addEventListener("mouseout", function() { textLeave(1); } );
    document.getElementsByClassName("contentBoxes")[2].addEventListener("mouseout", function() { textLeave(2); } );
    document.getElementsByClassName("contentBoxes")[3].addEventListener("mouseout", function() { textLeave(3); } );

    function textShow(x){
        document.getElementsByClassName("titleName")[x].style.display = "inline";
        document.getElementsByClassName("greyFade")[x].style.display = "inline";
    }

    function textLeave(x){
        document.getElementsByClassName("titleName")[x].style.display = "none";
        document.getElementsByClassName("greyFade")[x].style.display = "none";
    }

    //resize changes for background image
    //resize changes 900px width for FRESH! text (change to ! font awesome)
    function resizedTitle(){
    if(window.innerWidth<=920){
        changeFresh("<i class='fa fa-exclamation-circle' aria-hidden='true'></i>");

    }
    else{
        changeFresh("FRESH!");
    }
}

function changeFresh(x){
    if(freshArray.length!=null){
        for(i=0;i<freshArray.length;i++){
            freshArray[i].innerHTML = x;
        }
    }
}

window.addEventListener("resize", resizedTitle);
window.addEventListener("load", resizedTitle);