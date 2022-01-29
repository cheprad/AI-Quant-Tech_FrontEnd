
<title>admin </title>
<?php include '../include/header.php'; 
   
?>
<div class="container-fluid contact">	
	<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   
		<h1>ตรวจเช็คสลิป</h1>
    <p>คลิ๊กที่รูปเพื่อดูภาพใหญ่</p>
		<hr>		
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
			</div>
		</div>
    <form action="search.php"  method="post">
      <label for="">ค้นหา
        <input type="text" placeholder="ป้อนชื่อลูกค้า" name="cusname" >
        <input type="submit" value="ค้นหา" class="btn btn-primary my-2">
      </label>
    </form>

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
                          if ($row["flag"] == "N"){
                            ?>                          
                            <td>
                            <form action="submit.php?id=<?php echo $row['id']?>" method="POST">
                              <select name="flag" id="flag" onchange="this.form.submit()" enctype="multipart/form-data">
                                  <option value="N">รอตรวจสอบ</option>
                                  <option value="C">ตรวจสอบแล้ว</option>
                                  <option value="R">ปฏิเสธรายการนี้</option>
                                </select>
                              </form>
                            </td>
                            <?php
                          } elseif ($row["flag"] == "C" ){
                            ?> 
                              <td>
                                <form action="submit.php?id=<?php echo $row['id']?>" method="POST">
                                  <select name="flag" id="flag" onchange="this.form.submit()" enctype="multipart/form-data">
                                      <option value="C">ตรวจสอบแล้ว</option>
                                      <option value="N">รอตรวจสอบ</option>
                                      <option value="R">ปฏิเสธรายการนี้</option>
                                    </select>
                                </form>
                              </td>
                            <?php 
                          } else {
                            ?> 
                            <td>
                              <form action="submit.php?id=<?php echo $row['id']?>" method="POST">
                                <select name="flag" id="flag" onchange="this.form.submit()" enctype="multipart/form-data">
                                    <option value="R">ปฏิเสธรายการนี้</option>
                                    <option value="C">ตรวจสอบแล้ว</option>
                                    <option value="N">รอตรวจสอบ</option>
                                  </select>
                              </form>
                            </td>
                          <?php 
                          }
                          echo "<td>" .$row["approvedt"] .  "</td> ";
                          echo "<td>" .$row["approveid"] .  "</td> ";
                           
                        ?>

                        <?php 
                          echo "</tr>";
                        }
                        ?>
				
            </tbody>
		</table>
	</div>


</div>	
<?php include('../include/footer.php');?>