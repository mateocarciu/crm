var MInput = document.getElementById('montant');
var MNInput = document.getElementById('montantn');

var Lettre = document.getElementById('la');
var NumPig = document.getElementById('nom');
var NumMag = document.getElementById('id');


var type_this = "1000";
var index = 0;

window.update = function() {
    if (MInput.value != null){
        MNInput.value = (MInput.value * 0.8).toFixed(2);
    }
    la.value = "1m2p-la-" + NumMag.value +"-"+ NumPig.value 
    setTimeout("update()", 1000);
}

update();