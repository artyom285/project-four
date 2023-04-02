<?php 

    require "config.php";

    $id = $_GET["id"];
    $sql = "DELETE FROM `data` WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("location: index.php");
    }

?>