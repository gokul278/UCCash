<?php
include('../../requiredfiles/connectiondb.php');
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM login_details WHERE admin_username = '{$username}'";

$res = $con->query($sql);

if(mysqli_num_rows($res) == 1){
    foreach($res as $row){
        if($row["admin_password"] == $password){
            $_SESSION["admin_id"] = $row["admin_id"];
            $_SESSION["admin_username"] = $row["admin_username"];
            $_SESSION["admin_password"] = $row["admin_password"];
            $response["status"] = "success";
            echo json_encode($response);
        }else{
            $response["status"] = "checkpass";
            echo json_encode($response);
        }
    }
}else{
    $response["status"] = "notexits";
    echo json_encode($response);
}
?>