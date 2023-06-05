<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/quick_task_style.css">
    <title>Document</title>
    <?php
        include "quick_task_script.php";
    ?>
</head>
<body>
    <div class="task_frame" id="task">
        <form action="quick_task_script.php" method="post">
            <input placeholder="write a task" type="text" name="quick_task_val" id="task_val" required>
            <input type="submit" name="save_quick_task" value="add" id="save_task">
        </form>
        <div class='taskes_panel'> 
            <div class="work_one">
                <?php
                    show_quik_task();
                ?>
            </div>
            <div class="done">
                <?php
                    echo "<p>compleated ".count_done()." tasks</p>";
                    show_done_task();
                ?>
            </div>  
        </div>
    </div>
    <!-- display absolut -->
    <div class="add_cat_frame" id="add_cat_frame">
        <div class="add_cat_panel">
            <div class="exit" id="exit_button">
                <img src="icons/add.png" alt="">
            </div>
            <form action="" method="post">
                <label for="" id="cat_val">what you went to do whit task?</label>
                <div class="butons">
                    <input type="button" name="resort" value="restore" id="resort_cat">
                    <input type="button" name="delete" value="delete" id="delete_cat">
                </div>
            </form>
        </div>
    </div>
</body>
<script src="script_js/quick_tasks_select.js"></script>
<script src="script_js/quick_tasks_delete.js"></script>.
</html>