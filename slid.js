// var $dialog0 = document.getElementById('mydialog0'); 
// if(!('show' in $dialog0)){
//         document.getElementById('promptCompat').className = 'no_dialog'; 
// } 
// $dialog0.addEventListener('close', function() { 
//         console.log('Fermeture. ', this.returnValue); 
// }); 
// var $dialog1 = document.getElementById('mydialog1'); 
// if(!('show' in $dialog1)){
//         document.getElementById('promptCompat').className = 'no_dialog'; 
// } 
// $dialog1.addEventListener('close', function() { 
//         console.log('Fermeture. ', this.returnValue); 
// }); 
// var $dialog2 = document.getElementById('mydialog2'); 
// if(!('show' in $dialog2)){
//         document.getElementById('promptCompat').className = 'no_dialog'; 
// } 
// $dialog2.addEventListener('close', function() { 
//         console.log('Fermeture. ', this.returnValue); 
// }); 
// var $dialog3 = document.getElementById('mydialog3'); 
// if(!('show' in $dialog3)){
//         document.getElementById('promptCompat').className = 'no_dialog'; 
// } 
// $dialog3.addEventListener('close', function() { 
//         console.log('Fermeture. ', this.returnValue); 
// }); 



var carousel = document.querySelector(".carousel");
var position = 0
var next = document.querySelector(".next");
var prev = document.querySelector(".prev");
prev.addEventListener("click", function () {
    rotate(45)

})
next.addEventListener("click", function () {
    rotate(-45)
    
})
function rotate(direction){
    position+=direction;
    carousel.style.transform = "rotateY("+position+"deg)";
}
function auto() {
    setTimeout(function () {
        rotate(-45);
        auto();
    },4000);
}

auto();