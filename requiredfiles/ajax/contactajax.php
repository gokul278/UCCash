<?php
include('../connectiondb.php');
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$content = $_POST["message"];

$sql = "INSERT INTO contact_messages (message_name,message_email,message_subject,message_content) 
    VALUES ('{$name}','{$email}','{$subject}','{$content}')";
$res = $con->query($sql); 

if($res){
    $response["status"] = "success";
    echo json_encode($response);
}else{
    $response["status"] = "failed";
    echo json_encode($response);
}
?>