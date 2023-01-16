var tImg = ['sapkowski.jpg','sapkowski2.jpg'];      
var vImg = true;
function fSetImg(){
    if (vImg){
        document.getElementById('iImg').src = tImg[1];
        vImg = false;
    }
    
    else {
        document.getElementById('iImg').src = tImg[0];
        vImg = true;
    }
}