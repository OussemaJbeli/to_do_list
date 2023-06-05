<?php
include "script_php/query_task.php";
    if(isset($_POST['save_task'])){
        $task_name=$_POST["task_val"];
        $id_cat=$_POST["id_cat"];
        insert_task($id_cat,$task_name,0);
        header('location: full_mode.php? refrech='.$id_cat);
    }
    function show_task($id){
        $lenght = select_all_task($id)["length"];
        $tab = select_all_task($id)["table"];
        if($lenght==0){
            echo"<p class='empty_task'><img src='icons/empty1.png' alt=''></p>";
        }
        else{
        for($i=0;$i<$lenght;$i++){
            echo"<div class='task'>";
            echo"   <p>".$tab[$i][2]."</p>";
            echo"</div>";
            }
        }
    }
?>