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
        include("header.php");
        include("nav.php");
        ?>
        <div class="col-sm-9">
        <h3 style="color: #6DD687">Admin</h3>
        <hr>
        <form style="border:1px solid; width: 50%; margin-top: 10px;margin-bottom: 40px; margin-left: 100px; border-radius: 5px; padding:10px 24px 2px 50px;  border-color: #3CB371" >
        
                       
                      <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>First Name
                            <span class="required" style="color:red;">*</span>
                        </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="text" name="" value=""  class="form-control" id="fname" placeholder="Enter your First name" required>
                        </div>
                    </span>
                    <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>Last Name
                            <span class="required" style="color:red;">*</span>
                        </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="text" name="" value=""  class="form-control" id="lname" placeholder="Enter your last name" required>
                        </div>
                    </span>
                    <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>Address
                            <span class="required" style="color:red;">*</span>
                        </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="text" name="" value=""  class="form-control" id="address" placeholder="Enter your address" required>
                        </div>
                    </span>
                    <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>Phone number
                            <span class="required" style="color:red;">*</span>
                        </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="number" name="" value=""  class="form-control" id="phone" placeholder="Enter your phone" required>
                        </div>
                    </span>
                    <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>Email
                            <span class="required" style="color:red;">*</span>
                        </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="email" name="" value=""  class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                    </span>
                    <!---------------------->
                    <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>Gender
                            <span class="required" style="color:red;">*</span>
                        </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="text" name="" value=""  class="form-control" id="gender" placeholder="Enter your gender" required>
                        </div>
                    </span>
                
                    <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>Username
                            <span class="required" style="color:red;">*</span>
                        </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="text" name="" value=""  class="form-control" id="phone" placeholder="Enter your Username" required>
                        </div>
                    </span>
                    <!---------------------------------->
                    <span style="height: 30px; width: 93%; font-size: 16px;" required>
                        <label>Password
                            <span class="required" style="color:red;">*</span>
                        </label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          </div>
                          <input id="value"type="text" name="" value=""  class="form-control" id="phone" placeholder="Enter your Password" required>
                        </div>
                    </span>
                    
                     
                    
                   <span style="color:red;">* &nbsp; Means mandatory field </span>        

                    <div class="form-groups">
                        <button type="submit" name="register" class="btn btn-success">Save change</button>
                        <button type="reset" name="reset" class="btn btn-primary" style="margin-left: 90px;">Reset</button>
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
