<!DOCTYPE html>
<html>
<head>
	<title>School</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row content">
				<?php
				include("header.php");
				include("nav.php");
				?>
				<div class="col-sm-9">
				<h3 style="color: #6DD687">Edit school</h3>
				<hr>
				<form method="POST" action="editschool.php" style="border:1px solid; width: 50%; margin-top: 10px;margin-bottom: 40px; margin-left: 100px; border-radius: 5px; padding:10px 24px 2px 50px;  border-color: #3CB371" >
				   <?php
          include("connection.php");
          if (isset($_GET['ID'])) {
            $id = $_GET['ID'];
          $sql ="Select * from school where SCHOOL_ID='$id'"; 
          $stmt=$conn->query($sql);
          $row=$stmt->fetch(PDO::FETCH_ASSOC);
            ?>  
                      <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>School name
                          
                        </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="text" name="school_name" value="<?php echo $row['SCHOOL_NAME'] ?>"  class="form-control" id="sname" placeholder="Enter name of school" required>
                        </div>
                    </span>
                    <!--------------------->
                     <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>School_id
                          
                        </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="text" name="school_id" value="<?php echo $row['SCHOOL_ID'] ?>"  class="form-control" id="sname" placeholder="Enter name of school" required>
                        </div>
                    </span>
                    <!---------------------->
                    <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>Address
                         </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="text" name="address"  value="<?php echo $row['ADDRESS'] ?>" class="form-control" id="saddress" placeholder="Enter address of school" required>
                        </div>
                    </span>
                    
                    <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>Email
                            </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="email" name="email"  value="<?php echo $row['EMAIL'] ?>"  class="form-control" id="email" placeholder="Enter email" required>
                        </div>
                    </span>
                    <!------------------------------------->
                     <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>Phone number
                            </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="number" name="phone_no"  value="<?php echo $row['PHONE_NO'] ?>"  class="form-control" id="phone" placeholder="Enter phone number" required>
                        </div>
                    </span>
                    <!-------------------------------------->
    

                    <div class="form-groups">
                        <button style="margin-top: 20px"  type="submit" name="edit" class="btn btn-success">Update</button>
                        <button type="reset" name="reset" class="btn btn-primary" style="margin-left: 90px; margin-top: 20px">Reset</button>
                      </div>  
                    <?php } ?>
                </form>
                            </div>
					</div>
				</div>
			</div>
		</div>
		<?php
		include("footer.php");
		?>
	</body>
	</html>
