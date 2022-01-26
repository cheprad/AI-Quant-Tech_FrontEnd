
<title>webdamn.com : Demo User Management </title>
<?php include '../include/header.php'; 
   
?>
<div class="container contact">	
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   
		<h1>ตรวจเช็คสลิป</h1>
		<hr>		
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
			</div>
		</div>
		<table id="userList" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>stampddt</th>
					<th>firstname</th>
					<th>lastname</th>
					<th>email</th>
					<th>package</th>					
					<th>image</th>
					<th>flag</th>
					<th>วันเวลาตรวจสอบข้อมูล</th>
                    <th>approveid</th>
				</tr>
			</thead>
            <tbody>
                
                    <?php 
                    include '../../connect.php';
                    $query = "SELECT * FROM payment_slip ";
                    $result = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                          echo "<td>" .$row["id"] .  "</td> ";
                          echo "<td>" .$row["stampdt"] .  "</td> ";
                          echo "<td>" .$row["firstname"] .  "</td> ";
                          echo "<td>" .$row["lastname"] .  "</td> ";
                          echo "<td>" .$row["email"] .  "</td> ";
                          echo "<td>" .$row["package"] .  "</td> ";
                          echo '<td><a target="_blank" href="../../'.$row["image"] .'"><img src="../../'.$row["image"] .'" width="50" alt=""></a></td>';
                          echo "<td>" .$row["flag"] .  "</td> ";
                          if ($row["approvedt"] == null){
                            echo "<td> ยังไม่ได้ตรวจสอบ </td>";
                          } else {
                            echo "<td>" .$row["approvedt"] .  "</td> ";
                          };
                          echo "<td>" .$row["approveid"] .  "</td> ";
                        echo "</tr>";
                        }

                    
                    // for ($x = 0; $x <= 10; $x++) {
                    //     echo "<tr>";
                    //     echo "<td>1</td>";
                    //     echo "<td>2022-01-26 01:09:32</td>";
                    //     echo "<td>pradprad</td>";
                    //     echo "<td>pradprad</td>";
                    //     echo "<td>pradpradprad3@gmail.com</td>";
                    //     echo "<td>Standard</td>";
                        
                    //     echo "<td>N</td>";
                    //     echo "<td>NULL</td>";
                    //     echo "<td>0</td>";
                    //     echo "</tr>";
                    // }
                    // ?>
					
				
            </tbody>
		</table>
	</div>


</div>	
<?php include('../include/footer.php');?>