<?php include 'connect.php'?>
<?php
// require_once 'connect.php';
    // echo '<pre>';
    // print_r($_FILES);
    // echo '<pre>';
if (isset($_POST['submit'])){
    print_r($_POST);
    date_default_timezone_set('Asia/Bangkok');
    $check = getimagesize($_FILES['file']['tmp_name']);
    echo '<pre>';
    print_r($check);
    echo '<pre>';
    
    if($check){
    $dir = "uploads/";
    $uniq = Date("Ymdhisa");
    echo gettype($uniq);
    $pathFileImage = $dir.$uniq.basename($_FILES["file"]["name"]);
    // echo $pathFileImage;
        if(move_uploaded_file($_FILES["file"]["tmp_name"],$pathFileImage)){
            
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $package = $_POST['package'];
            mysqli_query($conn,"INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`,`package`, `image`) 
                                VALUES (NULL, '$first_name', '$last_name', '$email','$package', '$pathFileImage');");
            echo "ไฟล์ภภาพชื่อ ". basename($_FILES["file"]["name"])."อัพโหลลดเสร็จ";
            echo "<script> alert('ดำเนินการสำเร็จ') </script>";
            header("Refresh:0; url=form.php");

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