document.getElementById("demo").addEventListener("click",setPageTitle);
function setPageTitle (courseName){
    document.getElementById("title").innerHTML= courseName;
}