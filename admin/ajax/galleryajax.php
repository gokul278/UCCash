<?php
include('../../requiredfiles/connectiondb.php');

$way = $_POST["way"];

if($way == "uploadimagefrm") {

    $count = 0;
    $tempcount = 0;

    foreach ($_FILES["uploadimages"]["name"] as $key => $image) {
        $count++;
        $timestamp = date("YmdHis");
        $newImageName = $timestamp . '_' . $image;
        $tempFile = $_FILES["uploadimages"]["tmp_name"][$key];
        $destinationFolder = "../images/";  // Specify the correct destination folder
    
        if (move_uploaded_file($tempFile, $destinationFolder . $newImageName)) {
            $sql = "INSERT INTO gallery_images (image_name) VALUES ('{$newImageName}')";
            $res = $con->query($sql);
            if($res){
                $tempcount++;
            }
        }
        
    }

    if($count == $tempcount){
        $response["status"] = "success";
        echo json_encode($response);
    }else{
        $response["status"] = "failed";
        echo json_encode($response);
    }
    
}else if($way == "deleteimage"){
    $deleteid = $_POST["deleteid"];
    $imagename = $_POST["imagename"];
    if (unlink("../images/" . $imagename)) {
        $sql = "DELETE FROM gallery_images WHERE image_id={$deleteid}";
        $res = $con->query($sql);
        if($res){
            $response["status"] = "success";
            echo json_encode($response);
        }else{
            $response["status"] = "failed";
            echo json_encode($response);
        }
    }else{
        $response["status"] = "filefailed";
        echo json_encode($response);
    }
}

?>