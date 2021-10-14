<br><br><br><br><br>
<?php
$mainurl = "http://localhost/EmployeeManagement/";
$baseurl = "http://localhost/EmployeeManagement/assets/"; 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Employee</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl?>css/stylefile.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl?>css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl?>css/font-awesome.min.css'>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<link  href="<?php echo $baseurl?>css/jquery.fancybox.min.css" rel="stylesheet">
<script src="<?php echo $baseurl?>js/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
</head>

<body>

    <br>
    <div class="card" style="width: 50rem; margin-left: 10%;">
        <center>
            <img class="card-img-top" src="assets/img/7fNODEdp_400x400.jpg" style="height: 150px; width: 150px;"
                alt="Card image cap">
        </center>
        <div class="card-body">
            <h3 class="card-title">Employee Update</h3>
            <hr style="border:solid 2px">
        </div>

        <br>
	 
        <form method="POST" enctype="multipart/form-data"  class="form-control">
        <br><br>
        <?php
        foreach ($employeedata as $employeedata1) {
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Name</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <input class="form-control" value="<?php echo $employeedata1['firstname']?>" type="text" name="fn">
                        First Name
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" value="<?php echo $employeedata1['lastname']?>" type="text" name="ln">
                        Last Name
                    </div><br>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Email</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" value="<?php echo $employeedata1['email']?>" type="email" name="em">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Password</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="password"  name="pass" style="width: 120%;" >
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Confirm Password</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="password" name="cpass"  style="width: 120%;">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Birthdate</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" value="<?php echo $employeedata1['birthdate']?>" type="date"  name="bdate" >
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Mobile Number</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <input class="form-control" type="number" value="<?php echo $employeedata1['mobilecode']?>"  name="mcode" style="width: 65px;" >
                        Code
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" type="number" value="<?php echo $employeedata1['mobilenumber']?>"  name="mnumber" style="margin-left: -20px;">
                        Number
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Gender</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" >
                        <input  type="radio" value="male" <?php if($employeedata1['gender'] =="Male" ){ echo "checked";}?> name="gender" >Male<br>
                        <input type="radio" value="female" <?php if($employeedata1['gender'] =="Female" ){ echo "checked";}?> name="gender">Female
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <h5><b>Full name of organization</b></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="text" value="<?php echo $employeedata1['organisation']?>" name="org" style="width: 180%;">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <h5><b>Website</b></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="text" value="<?php echo $employeedata1['website']?>"  name="web" style="width: 120%;" >
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <h5><b>Address</b></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="text"  value="<?php echo $employeedata1['address']?>" name="adr" style="width: 160%;" >
                        Address
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        
                    <select name="ct">
                        <option value="<?php echo $employeedata1['city']?>"><?php echo $employeedata1['city']?></option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Surat">Surat</option>
                        <option value="Jamnagar">Jamnagar</option>
                        <option value="Baroda">Baroda</option>   
                    </select>
                    <br>City
                    </div>
                    <div class="col-sm-3" style="margin-left: -35px;">
                        <select name="cn">
                            <option value="<?php echo $employeedata1['country']?>"><?php echo $employeedata1['country']?></option>
                            <option value="India">India</option>
                           
                        </select>
                        <br>Country
                        </div>
                </div><br><br>
               
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" value="<?php echo $employeedata1['postcode']?>" type="number" name="pcode" >
                        <br>Post code
                    </div>
                </div><br><br>

                <div class="row">
                    <div class="col-sm-15" style="margin-left: 15px;">
                        <h6><b>Type of organisation ? Please also provide companies House reg number if applicable</b></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" value="<?php echo $employeedata1['organisationtype']?>" type="text" name="torg" style="width:120%;" >
                        <br>E.g. PLC,Limited Company,LLP,other partnership,sole trader or other
                    </div>
                </div><br><br>

                <?php 

$lang=explode(",", $employeedata1['language']);

?>    

                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Language proficiency</b></h5>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-sm-8" >
                        <input type="checkbox"  name="lang[]" <?php foreach ($lang as $value){ if($value == "PHP"){ echo "checked"; }} ?> value="PHP" >
                        PHP
                    </div>
                    <div class="col-sm-8">
                        <input type="checkbox" name="lang[]" <?php foreach ($lang as $value){ if($value == "JAVA"){ echo "checked"; }} ?> value="JAVA">
                        JAVA
                    </div>
                    <div class="col-sm-8">
                        <input type="checkbox" name="lang[]" <?php foreach ($lang as $value){ if($value == ".NET"){ echo "checked"; }} ?> value=".NET">
                        .NET
                    </div>
                    <div class="col-sm-8">
                        <input type="checkbox" name="lang[]" <?php foreach ($lang as $value){ if($value == "Python"){ echo "checked"; }} ?> value="Python">
                        Python
                    </div>
                    <div class="col-sm-8">
                        <input type="checkbox" name="lang[]" <?php foreach ($lang as $value){ if($value == "Other"){ echo "checked"; }} ?> value="Other">
                        Other
                    </div>
                </div><br><br>

                <div class="row">
                    <div class="col-sm-8">
                        <h5><b>Profile picture (.png only, upto 1 MB)</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                   
                    </div>

                    <a class="fancybox" rel="group" href="<?php echo $employeedata1['image']?>"><img src="<?php echo $employeedata1['image']?>" style="width:300px;height:150px" alt="" /></a>
                    
                   
                </div><br><br><br>

                <center>
                <input type="submit" value="Update" name="update" class="btn btn-success btn-lg">
           		</center>
<br><br>
            </div>
            <?php
        }
        ?>
        </form>
    </div>
  
</body>

</html>
<br><br><br><br><br>
