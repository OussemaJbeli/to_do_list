/**************************************************chek**************** */
// Get all elements with class "task"
let buttons = document.querySelectorAll(".task");
// Add a click event listener to each chekbox
buttons.forEach(image => {
    image.addEventListener("click", () => {
        /****get id */
        let id = image.getAttribute("id");
        /****animation */
        image.style.backgroundColor="#454343";
        flip(image);
        display(image);
        openLinkWithDelay('quick_task_script.php? UpState="'+id+'"');
    });
});
function flip(card) {
    setTimeout(function() {
        card.style.transform="rotateX(90deg)";
    }, 500); // Delay of 2000 milliseconds (2 seconds)
}
function display(card) {
    setTimeout(function() {
        card.style.display="none";
    }, 1000); // Delay of 2000 milliseconds (2 seconds)
}
function openLinkWithDelay(link) {
    setTimeout(function() {
        window.location.href = link;
    }, 1000); // Delay of 2000 milliseconds (2 seconds)
}
