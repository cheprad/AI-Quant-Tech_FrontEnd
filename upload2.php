<!-- <?php include 'connect.php'?> -->
<?php
// require_once 'connect.php';
    // echo '<pre>';
    // print_r($_FILES);
    // echo '<pre>';
if (isset($_POST['submit'])){
    echo '<pre>';
    // print_r($_POST);
    echo '<pre>';
//     date_default_timezone_set('Asia/Bangkok');
//     $check = getimagesize($_FILES['file']['tmp_name']);
//     echo '<pre>';
//     print_r($check);
//     echo '<pre>';
    $f2_firstname = $_POST['first_name'];
    $f2_lastname =  $_POST['last_name'];
    $f2_email   =   $_POST['email'];
    $f2_tel =       $_POST['tel'];
    $f2_gender =    $_POST['gender'];
    $f2_age =       $_POST['age'];
    $f2_job =       $_POST['job'];
    $f2_income =    $_POST['income'];
    $f2_portfolioStatus = $_POST['portfolio_status'];
    $f2_experience = $_POST['experience'];
    $f2_invested_product  = $_POST['invested_product'];
    $f2_interested = $_POST['interested'];
    $f2_platform = $_POST['platform'];
    $f2_stampdt = Date("Ymdhisa");

    mysqli_query($conn,"INSERT INTO `form2` (`f2_id`, `f2_firstname`, `f2_lastname`, `f2_email`, `f2_tel`, `f2_gender`, `f2_age`, `f2_job`, `f2_income`, `f2_portfolioStatus`, `f2_experience`, `f2_invested_product`, `f2_interested`, `f2_platform`, `f2_stampdt`) 
                        VALUES (NULL, '$f2_firstname', '$f2_lastname', '$f2_email', '$f2_tel', '$f2_gender', '$f2_age', '$f2_job', '$f2_income', '$f2_portfolioStatus', '$f2_experience', '$f2_invested_product', '$f2_interested', '$f2_platform', '$f2_stampdt');");
    echo "<script> alert('ดำเนินการสำเร็จ') </script>";
    header("Refresh:0; url=form2.php");

}   
?>