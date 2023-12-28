<?php
include('../../requiredfiles/connectiondb.php');
session_start();
$type = $_POST["type"];
if($type == "checkpasskey"){
    $passkey = $_POST["passkey"];
    $sql = "SELECT * FROM login_details";
    $res = $con->query($sql);

    if(mysqli_num_rows($res) == 1){
        foreach($res as $row){
            if($row["admin_passkey"] == $passkey){
                $_SESSION["passwordchange"] = "true";
                $_SESSION["passkeyid"] = $passkey;
                $response["status"] = "success";
                echo json_encode($response);
            }else{
                $response["status"] = "InvalidPassKey";
                echo json_encode($response);
            }
        }
    }else{
        $response["status"] = "notexits";
        echo json_encode($response);
    }
}else if($type == "passchange"){
    $pass = $_POST["password"];
    $repass = $_POST["repassword"];
    if($pass == $repass){
        $sql = "UPDATE login_details SET admin_password='{$pass}' WHERE admin_passkey={$_SESSION["passkeyid"]}";
        $res = $con->query($sql);
        if($res){
            $response["status"] = "success";
            session_destroy();
            echo json_encode($response);
        }else{
            $response["status"] = "failed";
            echo json_encode($response);
        }
    }else{
        $response["status"] = "repasscheck";
        echo json_encode($response);
    }
}
?>