<!DOCTYPE html>
<html>
<head>
	<title>Application</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container-fluid">
   <div class="row content">
    <?php
    include("header.php");?>
    <div class="col-sm-3 sidenav" style="background-color: #F0F0F0; min-height: 650px">

        <ul class="nav nav-pills nav-stacked">
          <li><a href="home.php">Home</a></li>
          <li><a href="about us.php">About us</a></li>
          <li><a href="contact.php">Contact us</a></li>   
          <li><a href="logout.php">Logout</a></li>
        </ul>
        <br>
      </div>

   
    <div class="col-sm-9">
      <h3 style="color: #6DD687">Application</h3>
      <hr>
      <form method="POST" action ="application_handler.php" style="border:1px solid; width: 50%; margin-top: 10px;margin-bottom: 40px; margin-left: 100px; border-radius: 5px; padding:10px 24px 2px 50px;  border-color: #3CB371" >
        <input type="text" name="appId" hidden="">
        <span style="height: 30px; width: 93%; font-size: 16px;" required>
          <label>Previous school
          </label>
          <div class="input-group">
            <div class="input-group-addon">
            </div>
            <input id="value"type="text" name="last_school" value=""  class="form-control" id="fname" placeholder="Enter your Last school" required>
          </div>
        </span>
        <div class="input-group">
         <label>Select Previous Class</label>
         <select style="width:100%; height: 40px" class="form-control" name="last_class" required="">
          <option>-- Previous Class--</option>
          <option value="Form_1">Form_1</option>
          <option value="Form_2">Form_2</option>
          <option value="Form_3">Form_3</option>
          <option value="Form_4">Form_4</option>
        </select>
      </div>
        <!------------------------------------------------------------------------->
        <div class="input-group">
         <label>Select school</label>
         <select style="width:150%; height: 40px" class="form-control" name="school_name" required="">
           <?php 
           include("connection.php");
        $sql ="Select * from school"; 
          $stmt=$conn->query($sql);
          while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
          <option value="<?php echo $row['SCHOOL_NAME']; ?>"><?php echo $row['SCHOOL_NAME']; ?></option><?php } ?>
        </select>
      </div>
      <!-------------------------------------------------------------->
      <div class="input-group">
         <label>Select Current Class</label>
         <select style="width:100%; height: 40px"  class="form-control" name="current_class" required="">
          <option>-- Current Class--</option>
          <option value="Form_1">Form_1</option>
          <option value="Form_2">Form_2</option>
          <option value="Form_3">Form_3</option>
          <option value="Form_4">Form_4</option>
        </select>
      </div>

      <div class="form-groups">
        <button style="margin-top: 20px"  type="submit" class="btn btn-success" name="apply">Apply</button>
        <button type="reset" name="reset" class="btn btn-primary" style="margin-left: 90px; margin-top: 20px">Reset</button>
      </div>  
    </form>
  </div>
</div>
</div>
</div>
</div>
<?php
include("footer.php")
?>
</body>
</html>
