let add_cat_frame = document.getElementById("add_cat_frame");
/*buttons*/
let open_button = document.getElementById("add_button");
let exit_button = document.getElementById("exit_button");
add_button.addEventListener("click",open_fun);
exit_button.addEventListener("click",exit_fun);
function open_fun(){
    add_cat_frame.style.visibility="visible";
}
function exit_fun(){
    add_cat_frame.style.visibility="hidden";
}