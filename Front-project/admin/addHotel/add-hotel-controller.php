<?php
include('../session.php');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["hpic"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["hpic"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["hpic"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["hpic"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["hpic"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
$hotel_name=$_POST["hname"];
$hotel_desc=$_POST["hdesc"];
$hotel_province=$_POST["hprov"];
$hotel_city=$_POST["hcity"];
$hotel_price=$_POST["hprice"];
$hotel_star=$_POST["hstar"];
$hotel_pic=$_FILES["hpic"]["name"];
$hotel_tozihat=$_POST["htozihat"];
$locationQindex=$_POST["hlocation"];
$facalityQindex=$_POST["hfaca"];
$foodQindex=$_POST["hfood"];
$dualRoom=$_POST["hdualperson"];
$fourRoom=$_POST["hfourperson"];
include("../../config.php");
$sql="INSERT INTO hotel(hname,hprov,hcity,hdesc,hprice,hstar,hpic,htozihat,hfaca,hfood,hlocation,dualperson,fourperson) 
VALUES('{$hotel_name}','{$hotel_province}','{$hotel_city}','{$hotel_desc}',
'{$hotel_price}','{$hotel_star}','{$hotel_pic}','{$hotel_tozihat}','{$facalityQindex}',
'{$foodQindex}','{$locationQindex}','{$dualRoom}','{$fourRoom}')";
$db->query($sql);
$db->close();
header("location:add-hotel-view.php");
?>