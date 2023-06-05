<?php
include "script_php/query_quick_task.php";
    if(isset($_POST['save_quick_task'])){
        $task_name=$_POST["quick_task_val"];
        insert_task($task_name);
        header('location: quick_task_home.php');
    }
    if(isset($_GET['UpState'])||isset($_GET['resortID'])){
        $id=$_GET['UpState'];
        if($_GET['resortID'])
            $id=$_GET['resortID'];
        setStatues($id)[0];
        header('location: quick_task_home.php');
    }
    if(isset($_GET['deleteID'])){
        $id=$_GET['deleteID'];
        delete_task($id);
        header('location: quick_task_home.php');
    }
    function show_quik_task(){
        $lenght1 = select_task()["length1"];
        $tab1 = select_task()["table1"];
        if($lenght1==0){
            echo"<p class='empty_task'><img src='icons/empty1.png' alt=''></p>";
        }
        else{
            for($i=0;$i<$lenght1;$i++){
                echo "<div class='task' id='".$tab1[$i][0]."'>";
                echo    "<div class='chek'>";
                echo        "<input type='checkbox' class='chek_task' id='".$tab1[$i][0]."'>";
                echo    "</div>";
                echo    "<label for='".$tab1[$i][0]."' class='tesk_value'>".$tab1[$i][1]."</label>";
                echo "</div>";
                }
        }
        function count_done(){
            $count = select_task()["length2"];
            return $count;
        }
    function show_done_task(){
        $lenght2 = select_task()["length2"];
        $tab2 = select_task()["table2"];
        for($i=0;$i<$lenght2;$i++){
            echo "<div class='task_done' id='".$tab2[$i][0]."'>";
            echo    "<div class='chek'>";
            echo        "<input type='checkbox' class='chek_task' id='".$tab2[$i][0]."' checked>";
            echo    "</div>";
            echo    "<label for='".$tab2[$i][0]."' class='tesk_value'>".$tab2[$i][1]."</label>";
            echo "</div>";
            }
        }
    }
?>