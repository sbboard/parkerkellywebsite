window.onkeyup = function(e) {
   var key = e.keyCode ? e.keyCode : e.which;

   if (key == 83) {
       dongUp();
   }
}

var tapped = 0;

function hitIt(){
tapped++;
if(tapped>=5){
    dongUp();
}
}

function dongUp(){
    if(document.getElementById("secretBoy").classList.contains('down')){
        document.getElementById("secretBoy").classList.remove('down');
        document.getElementById("secretBoy").classList.add('up');
       }
       else{
         document.getElementById("secretBoy").classList.remove('up');
        document.getElementById("secretBoy").classList.add('down');
       }
}