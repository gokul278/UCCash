<?php
include('../connectiondb.php');
$date = date("d/m/Y");
$name = $_POST["name"];
$phoneno = $_POST["phoneno"];
$panno = $_POST["panno"];
$email = $_POST["email"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$city = $_POST["city"];
$district = $_POST["district"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
$country = $_POST["country"];
$amount = $_POST["amount"];
$amountimage = $_FILES["amountimage"]["name"];
$timestamp = date("YmdHis");
$newImageName = $timestamp . '_' . $amountimage;

if(move_uploaded_file($_FILES["amountimage"]["tmp_name"],"../../admin/ajax/donationimage/". $newImageName)){
    $sql = "INSERT INTO donation_messages (donation_date,donation_name,donation_phoneno,donation_panno,donation_email,donation_address1,donation_address2,donation_city,donation_district,donation_state,donation_zipcode,donation_country,donation_amount,donation_image) 
    VALUES ('{$date}' , '{$name}', '{$phoneno}', '{$panno}', '{$email}', '{$address1}', '{$address2}', '{$city}', '{$district}', '{$state}', '{$zipcode}', '{$country}', '{$amount}', '{$newImageName}')";
    $res = $con->query($sql);
    if($res){
        $response["status"] = "success";
    echo json_encode($response);
    }else{
        $response["status"] = "failed";
		die('Error: ' . $con->error);
    }
}else{
    $response["status"] = "file error";
    echo json_encode($response);
}
?>