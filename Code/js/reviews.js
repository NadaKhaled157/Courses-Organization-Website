// let reviewsDiv, divOne,divTwo,divThree,divFour;
// reviewsDiv = document.getElementById('reviews');
// divOne= document.getElementById("card1");
// divTwo= document.getElementById("card2");
// divThree= document.getElementById("card3");
// divFour= document.getElementById("card4");
// function showReviews(){
//     reviewsDiv.style.display = "block";
//
//     divOne.style.opacity=0.7;
//     divTwo.style.opacity=0.7;
//     divThree.style.opacity=0.7;
//     divFour.style.opacity=0.7;
// }
//
// document.addEventListener('mouseup', function(e) {
//     if (!reviewsDiv.contains(e.target)) {
//         reviewsDiv.style.display = 'none';
//
//         divOne.style.opacity=1;
//         divTwo.style.opacity=1;
//         divThree.style.opacity=1;
//         divFour.style.opacity=1;
//     }
// });

let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

let popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
let popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
})