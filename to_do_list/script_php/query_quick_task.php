<?php
    function insert_task($val){
        require 'connection.php';
        $sql = "INSERT INTO `quick_tasks`(`value`, `statue`) VALUES ('$val',0)";
        $conn->execute_query($sql);
    }
    function delete_task($val){
        require 'connection.php';
        $sql = "DELETE FROM `quick_tasks` WHERE `ID`= $val";
        $conn->execute_query($sql);
    }
    function setStatues($id){
        include 'connection.php';
        $sql1 = "SELECT `statue`
                FROM `quick_tasks`
                WHERE `ID`=".$id;
        $result = mysqli_query($conn, $sql1);
        // Declare empty two-dimensional array
        $s=0;
        $statue;
        if (mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
                $s=1;
                $statue = $row["statue"];
                if($statue==0){
                    $s=2;
                    $sql = "UPDATE `quick_tasks` 
                            SET `statue`= '1' 
                            WHERE `ID`=".$id;
                            $conn->execute_query($sql);
                }
                else{
                    $s=3;
                    $sql = "UPDATE `quick_tasks` 
                            SET `statue`= '0' 
                            WHERE `ID`=".$id;
                            $conn->execute_query($sql);
                }
            }
        }
        $tab=[$id,$s,$statue];
        return $tab;
    }
    function select_task(){
        include 'connection.php';
        // Select data from table
        $sql = "SELECT *
                FROM `quick_tasks`";
        $result = mysqli_query($conn, $sql);
        // Declare empty two-dimensional array
        $tab1 = array();
        $tab2 = array();
        $count1 = 0;
        $count2 = 0;
        if (mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
                if($row["statue"]==0){
                    $tab1[$count1][0] = $row["ID"];
                    $tab1[$count1][1] = $row["value"];
                    $count1++;
                }
                else{
                    $tab2[$count2][0] = $row["ID"];
                    $tab2[$count2][1] = $row["value"];
                    $count2++;
                }
            }
        }                           
        $array = ["length1" => $count1,"table1" => $tab1,"length2" => $count2,"table2" => $tab2];
    return $array;
    }
?>