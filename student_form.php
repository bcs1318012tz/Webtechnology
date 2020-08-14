<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
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
      <h4>ZAPS</h4>

      <ul class="nav nav-pills nav-stacked">
        <li><a href="home.php">Home</a></li>
        <li><a href="about us.php">About us</a></li>
        <li><a href="contact.php">Contact us</a></li>   

      </ul>
      <br>
    </div>

    <div class="col-sm-9">
      <h3 style="color: #6DD687">Register</h3>
      <hr>
      <form method="POST" onsubmit="return Validate()" action="student_handler.php" style="border:1px solid; width: 50%; margin-top: 10px;margin-bottom: 40px; margin-left: 100px; border-radius: 5px; padding:10px 24px 2px 50px;  border-color: #3CB371">


        <span  style="height: 30px; width: 93%; font-size: 16px;" required>
          <label>First Name
            <span class="required" style="color:red;">*</span>
          </label>
          <div class="input-group">
            <div class="input-group-addon">
            </div>
            <input id="value"type="text" name="fname"  class="form-control" id="fname"  placeholder="Enter your First name" required>

          </div>
          <span id="fname"></span>
        </span>
        <span id="lname" style="height: 30px; width: 93%; font-size: 16px;" required>
          <label>Last Name
            <span class="required" style="color:red;">*</span>
          </label>
          <div class="input-group">
            <div class="input-group-addon">
            </div>
            <input id="value"type="text" name="lname"  class="form-control" id="lname" placeholder="Enter your last name" required>
          </div>
        </span>
        <span id="address" style="height: 30px; width: 93%; font-size: 16px;" required>
          <label>Address
            <span class="required" style="color:red;">*</span>
          </label>
          <div class="input-group">
            <div class="input-group-addon">
            </div>
            <input id="value"type="text" name="address"  class="form-control" id="address" placeholder="Enter your address" required>
          </div>
        </span>
        <span id="phone" style="height: 30px; width: 93%; font-size: 16px;" required>
          <label>Phone number
            <span class="required" style="color:red;">*</span>
          </label>
          <div class="input-group">
            <div class="input-group-addon">
            </div>
            <input id="value"type="number" name="phone"  class="form-control" id="phone" placeholder="Enter your phone" required>
          </div>
        </span>
        <span style="height: 30px; width: 93%; font-size: 16px;" required>
          <label>Email
            <span class="required" style="color:red;">*</span>
          </label>
          <div class="input-group">
            <div class="input-group-addon">
            </div>
            <input id="value"type="email" name="email"  class="form-control" id="email" placeholder="Enter your email" required="">
          </div>
        </span>
        <!---------------------->
        <span id="gender" style="height: 30px; width: 93%; font-size: 16px;" required>
          <label>Gender
            <span class="required" style="color:red;">*</span>
          </label>
          <div class="input-group">
            <div class="input-group-addon">
            </div>
            <input id="value"type="text" name="gender"  class="form-control" id="gender" placeholder="Enter your gender" required>
          </div>
        </span>

        <span id="user" style="height: 30px; width: 93%; font-size: 16px;" required>
          <label>Username
            <span class="required" style="color:red;">*</span>
          </label>
          <div class="input-group">
            <div class="input-group-addon">
            </div>
            <input id="value"type="text" name="username"  class="form-control" id="phone" placeholder="Enter your Username" required>
          </div>
        </span>
        <!---------------------------------->
        <span id="pass" style="height: 30px; width: 93%; font-size: 16px;" required>
          <label>Password
            <span class="required" style="color:red;">*</span>
          </label>
          <div class="input-group">
            <div class="input-group-addon">
            </div>
            <input id="value"type="text" name="Password"  class="form-control" id="pass" placeholder="Enter your Password" required>
          </div>
        </span>



        <span style="color:red;">* &nbsp; Means mandatory field </span>        

        <div class="form-groups">
          <input type="submit" class="btn btn-success" name="register" value="Register" onclick="Validate()"> 
          <input  style="margin-left:50px;" type="reset" class="btn btn-info" value="Reset">
        </div>  

      </form>
      <script type="text/javascript">
        
        function Validate(){
         

      var fname=document.getElementById("fname").value;
      var lname=document.getElementById("lname").value;
      var address=document.getElementById("address").value;
      var gender=document.getElementById("gender");
      var phone=document.getElementById("phone");

        }
          if (fname=="") {
        document.getElementById("fname").value="Please Enter your name!";
      }else if (fname.length>5) {
        document.getElementById("fname").value="Name should not exceed 20 characters!";
      }else{
        document.getElementById("fname").value="";
      }
        
</script>
      
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
