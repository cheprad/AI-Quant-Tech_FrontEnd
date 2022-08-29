
<?php 
    session_start();
    if(isset($_POST['Username'])){
        include '../connect.php';
        $Username = $_POST['Username'];
        $Password= $_POST['Password'];
        
        $query = "SELECT * FROM admint WHERE loginname = '$Username' AND passwd = '$Password'";
        
        $result = mysqli_query($conn,$query);

        if (mysqli_num_rows($result)>=1) {
            $row = mysqli_fetch_array($result);

            $_SESSION['uid'] = $row['uid'];
            $_SESSION['loginname'] = $row['loginname'];
            $_SESSION['pclass'] = $row['pclass'];
            // print_r($_SESSION);
            header("Location: dashboard ");

        }

        }
?>