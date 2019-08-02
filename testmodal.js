let modal = document.querySelector("#myModalNoBS");
let croix = document.getElementsByClassName("cross")[0];

// function afficherModal(event) {
//     event.preventdefault();
//     modal.style.transform = "scale(1,1)";
//     modal.style.opacity = 1;
// }

let cliccard = document.querySelector(".our-team .d-block");

cliccard.addEventListener("click", (e) => {
    // e.preventDefault();
    modal.style.transform = "scale(1,1)";
    modal.style.opacity = 1;
});

croix.onclick = function () {
    modal.style.transform = "scale(0,0)";
    modal.style.opacity = 0;
}

// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }

/************** AJAX GET ******************/

// $(document).ready(function () {
//     $("#action").click(function () {
//         $.ajax({
//             url: "ajax_info.txt",
//             dataType: "text",
//             success: function (data) {
//                 $("#demo").html(data);
//             }
//         });
//     });
// });