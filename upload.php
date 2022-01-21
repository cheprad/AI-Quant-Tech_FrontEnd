<?php
// require_once 'connect.php';
    // echo '<pre>';
    // print_r($_FILES);
    // echo '<pre>';
if (isset($_POST['submit'])){
    $check = getimagesize($_FILES['file']['tmp_name']);
    echo '<pre>';
    print_r($check);
    echo '<pre>';
 
    if($check){
    $dir = "uploads/";
    $uniq = "this_datetime";
    $pathFileImage = $dir .$uniq.basename($_FILES["file"]["name"]);
    echo $pathFileImage;
        if(move_uploaded_file($_FILES["file"]["tmp_name"],$pathFileImage)){
            echo "ไฟล์ภภาพชื่อ ". basename($_FILES["file"]["name"])."อัพโหลลดเสร็จ";        
        } else {
            echo "มีปัญหา";
        };
    } else {
        echo "<script> alert('ไม่ใช่รูปภาพ โปรดอัพโหลดไฟล์ภาพเท่านั้น') </script>";
        header("Refresh:0; url=form.php");
    }
} else {
    header("location: form.php");
}   



    
?>