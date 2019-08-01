var modal = document.getElementById("myModalNoBS");

var croix = document.getElementsByClassName("cross")[0];

// console.log(image);

function afficherModal() {
    modal.style.transform = "scale(1,1)";
    modal.style.opacity = 0.99;
}

croix.onclick = function() {
    modal.style.transform = "scale(0,0)";
    modal.style.opacity = 0;
}

// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }