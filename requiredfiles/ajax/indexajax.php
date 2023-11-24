<?php
include('../connectiondb.php');
$name = $_POST["name"];
$email = $_POST["email"];
$content = $_POST["message"];

$sql = "INSERT INTO volunteer_messages (message_name,message_email,message_content) 
    VALUES ('{$name}','{$email}','{$content}')";
$res = $con->query($sql); 

if($res){
    $response["status"] = "success";
    echo json_encode($response);
}else{
    $response["status"] = "failed";
    echo json_encode($response);
}
?>