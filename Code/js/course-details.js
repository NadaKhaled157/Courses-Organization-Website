// document.getElementById("demo").addEventListener("click",setPageTitle);
// function setPageTitle (courseName){
//     document.getElementById("title").innerHTML= courseName;
// }

let popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
let popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
})

let popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {
    trigger: 'focus'
})