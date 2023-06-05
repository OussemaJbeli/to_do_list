<?php
    function insert_task($id,$val,$stat){
        require 'connection.php';
        $sql = "INSERT INTO `tasks`(`ID_cat`, `task_val`, `state`) 
                VALUES ('$id','$val','$stat')";
        $conn->execute_query($sql);
    }
    function select_all_task($id){
        include 'connection.php';
        // Select data from table
        @$sql = "SELECT *
                FROM `tasks` WHERE ID_cat= $id";
        @$result = mysqli_query($conn, $sql);
        // Declare empty two-dimensional array
        $tab = array();
        $count = 0;
        if (mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
                $tab[$count][0] = $row["ID_local"];
                $tab[$count][1] = $row["ID_cat"];
                $tab[$count][2] = $row["task_val"];
                $tab[$count][3] = $row["state"];
                $count++;
            }
        }                           
        $array = ["length" => $count,"table" => $tab];
    return $array;
    }
?>