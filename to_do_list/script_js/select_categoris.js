//tow panel of cat abd task
let categoris = document.getElementById("cat");
let task_frame = document.getElementById("task");
// Get all elements with class "cat"+open
let buttons = document.querySelectorAll(".categori");
// Add a click event listener to each card
buttons.forEach(image => {
    image.addEventListener("click", () => {
        categoris.style.width="40%";
        task_frame.style.display="flex";
    });
});
// close
let exit_task = document.getElementById("exit_task");
exit_task.addEventListener("click",exit_tas)
function exit_tas(){
    categoris.style.width="90%";
    task_frame.style.display="none";
}