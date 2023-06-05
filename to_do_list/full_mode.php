<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/categoris_style.css">
    <link rel="stylesheet" href="styles/optimisation_style.css">
    <title>Document</title>
</head>
<?php
    include "cat.php";
    include "task.php";
    $id=0;
    //********id task between link and header*/
    if(isset($_GET['id_cat_db']) || isset($_GET['refrech']))
    {
        @$id_cat_db = $_GET['id_cat_db'];
        @$id_cat_refrech = $_GET['refrech'];
        if($id_cat_db)
            $id=$id_cat_db;
        else
            $id=$id_cat_refrech;
    }
?>
<body>
    <div class="body">
        <!-- ***********************taskes************** -->
        <div class="tasks">
                <p class="global_title">to-do-list</p>
                <div class="main_home">
                    <!-- ***************categoris************** -->
                    <div class="categoris" id="cat">
                        <?php
                            show_cat();
                        ?>
                    </div>
                    <!-- ***************task************** -->
                    <div class="task_frame" id="task">
                        <?php
                            if($id==0)
                            echo "<p>select a categori</p>";
                            else{
                                echo<<<class
                                        <form action="task.php" method="post">
                                            <div class='first'>
                                                <input type="text" value="$id" id="cat_id" name="id_cat">
                                            </div>
                                            <div class="second">
                                                <input placeholder="write a task" type="text" name="task_val" id="task_val" required>
                                                <input type="submit" name="save_task" value="add" id="save_task">
                                            </div>
                                        </form>
                                        class;
                                        echo"<div class='taskes_panel'>";
                                        echo show_task($id);
                                        echo"</div>";
                            }
                        ?>
                    </div>
                </div>
                <!-- **************add cat************ -->
                <div class="add" id="add_button">
                        <img src="icons/add.png" alt="">
                </div>
                <!-- display absolut -->
                <div class="add_cat_frame" id="add_cat_frame">
                    <div class="add_cat_panel">
                        <div class="exit" id="exit_button">
                            <img src="icons/add.png" alt="">
                        </div>
                        <form action="cat.php" method="post">
                            <input  placeholder="write a title for your to-do list" type="text" name="cat_val" id="cat_val">
                            <input type="submit" name="save" value="save" id="save_cat">
                        </form>
                    </div>
                </div>
        </div>
        <!-- ************************hourglass************* -->
        <div class="hourglass">
            <img class="glass_icon1" src="icons/hourglass.png" alt="">
            <img class="glass_icon2" src="icons/opt_hourglass.png" alt="">
        </div>
    </div>
</body>
<script src="script_js/add_cat_script.js"></script>
<script src="script_js/select_categoris.js"></script>
</html>