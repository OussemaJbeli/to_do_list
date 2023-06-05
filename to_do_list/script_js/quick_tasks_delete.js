/**************************************************delete***************** */
let add_cat_frame = document.getElementById("add_cat_frame");
/*buttons*/
let resort_cat = document.getElementById("resort_cat");
let delete_cat = document.getElementById("delete_cat");
let exit_button = document.getElementById("exit_button");
resort_cat.addEventListener("click",resort_fun);
delete_cat.addEventListener("click",delete_fun);
exit_button.addEventListener("click",exit_fun);
let id;
let var_select;
// Get all elements with class "task"
let del = document.querySelectorAll(".task_done");
// Add a click event listener to each chekbox
del.forEach(image => {
    image.addEventListener("click", () => {
        /****get id */
        id = image.getAttribute("id");
        add_cat_frame.style.visibility="visible";
    });
});
function resort_fun(){
    anime_card("#1671b5","resortID");
}
function delete_fun(){
    anime_card("#b51e16","deleteID");
}
function anime_card(col,link_var){
    add_cat_frame.style.visibility="hidden";
    var_select = document.getElementById(id);
    var_select.style.backgroundColor=col;
    flip_delete(var_select);
    display(var_select);
    openLinkWithDelay('quick_task_script.php? '+link_var+'="'+id+'"');
}
function exit_fun(){
    add_cat_frame.style.visibility="hidden";
}
function flip_delete(card) {
    setTimeout(function() {
        card.style.transform="rotateY(90deg)";
    }, 500); // Delay of 2000 milliseconds (2 seconds)
}