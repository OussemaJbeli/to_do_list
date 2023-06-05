<?php 
include "script_php/query_cat.php";
    if(isset($_POST["save"]) && !isset($_SESSION["username"])){
        $cat_name=$_POST["cat_val"];
        insert($cat_name,"20/8/2016");
        $_SESSION["username"]=$cat_name;
        header('location: full_mode.php');
    }
    function show_cat(){
        $lenght = select_all()["length"];
        $tab = select_all()["table"];
        if($lenght==0){
            echo"<p class='empty_cat'><img src='icons/empty1.png' alt=''></p>";
        }
        else{
            for($i=0;$i<$lenght;$i++){
                echo"<a href='full_mode.php?id_cat_db=".$tab[$i][0]."' class='categori' id='".$tab[$i][0]."'>";
                echo"   <span>".$tab[$i][2]."</span>";
                echo"   <p>".$tab[$i][1]."</p>";
                echo"</a>";
            }
        }
    }
?>