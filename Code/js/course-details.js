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

// // Add an event listener to each button
// document.querySelectorAll('.course').forEach(button => {
//     button.addEventListener('click', () => {
//         // Store the course details in a variable
//         const courseDetails = {
//             title: button.dataset.title,
//             brief: button.dataset.brief,
//             description: button.dataset.description,
//             // instructor: button.dataset.instructor,
//             rating: button.dataset.rating,
//             duration: button.dataset.duration,
//             projects: button.dataset.projects,
//             price: button.dataset.price
//         };
//
//         // Store the course details in a session variable
//         sessionStorage.setItem('courseDetails', JSON.stringify(courseDetails));
//
//         // Redirect the user to the page containing the course details
//         window.location.href = 'course-data.php';
//     });
// });

