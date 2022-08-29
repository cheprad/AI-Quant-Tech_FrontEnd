<?php 
    require("../../connect.php");
    $id=$_GET["id"];
    // $sql = "SELECT * FROM payment_slip WHERE id = $id";
    // $result = mysqli_query($conn,$sql);
    // $row = mysqli_fetch_assoc($result);
    // print_r($row);
   
    if(isset($_POST['flag'])){
        $flag = $_POST['flag'];
        date_default_timezone_set("Asia/Bangkok");
        $approvedt = date("Y-m-d H:i:s");
        print_r($approvedt);
        $approveid = (int)0;
        $sql = "UPDATE `payment_slip` 
        SET 
        `flag` = '$flag',
        `approveid` = '$approveid',
        `approvedt` = '$approvedt'
        WHERE `payment_slip`.`id` = $id;";

        
        $result = mysqli_query($conn,$sql);
        header("Location: index.php");
        }

?>