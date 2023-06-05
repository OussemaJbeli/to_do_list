<?php
function insert($name,$date="20/9/1999"){
    require 'connection.php';
    $sql = "INSERT INTO `categoris`(`name`, `date`) 
                VALUES ('$name','$date');";
    $conn->execute_query($sql);
}
function select_all(){
    include 'connection.php';
    // Select data from table
    $sql = "SELECT *
            FROM `categoris` ";
    $result = mysqli_query($conn, $sql);
    // Declare empty two-dimensional array
    $tab = array();
    $count = 0;
    if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) 
        {
            $tab[$count][0] = $row["ID"];
            $tab[$count][1] = $row["name"];
            $tab[$count][2] = $row["date"];
            $count++;
        }
    }                           
    $array = ["length" => $count,"table" => $tab];
return $array;
}
?>