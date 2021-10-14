
<br><br><br><br>
<?php


$mainurl = "http://localhost/EmployeeManagement/";
$baseurl = "http://localhost/EmployeeManagement/assets/"; 

if (isset($_SESSION["id"])) {

    header("Location: http://localhost/EmployeeManagement/");
  
  }

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
    <script src="<?php echo $baseurl?>js/jquery-3.5.1.js"></script>
    <script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
 
    <script src="<?php echo $baseurl?>assets/js/jquery.js"></script>
<script src="<?php echo $baseurl?>assets/js/jquery.validate.js"></script>
<style>

	
	#form label.error {
        color: red;
	
	}

	</style>
    
<script>
    
          $().ready(function() {
            $("#fom").validate({ 
                rules:{
                   
                em: {
					required: true,
					//email: true
				},
                pass: {
					required: true,
					minlength: 5
				}
				
                    
              
              },
                messages:{
                  em: "Please enter a valid email address",
            pass: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				}
				
                    
                    
                }
            });

        });
        $(function(){
       
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
            <h3 class="card-title">Employee Login</h3>
            <hr style="border:solid 2px">
        </div>

        <br>
<?php

    if (isset($_SESSION['success'])) {
    ?>
    <div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><?php echo $_SESSION['success']; ?></strong> 
    </div>
<?php   
    }
    unset($_SESSION['success']);
?>
        <?php
    // if(isset($_GET['msg']))
    // {
    //     $Message = '<div class="alert alert-success" role="alert">
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    //     <strong>Login Here !</strong> You have been signed in successfully!
    //   </div>';
    //     echo $Message;
    // }
    if (isset($_SESSION['loger'])) {
        ?>
        
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <strong><?php echo $_SESSION['loger']; ?></strong> 
      </div>
    <?php   
      }
      unset($_SESSION['loger']);
?>  

<?php

         if (isset($_SESSION['logt'])) {
            ?>
           <div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><?php echo $_SESSION['logt']; ?></strong> 
    </div>
        <?php   
          }
          unset($_SESSION['logt']);
?>

     <?php   

   $this->employeelogin();

?>
<?php if (isset($this->error)) {
?><span class="text-danger"><?php
 echo $this->error;?></span><?php
}
?>

     
        <form method="POST" id="form" enctype="multipart/form-data"  class="form-control">
        <br><br>
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Email</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="email" name="em" value="<?php if(isset($_COOKIE["em"])) { echo $_COOKIE["em"]; } ?>">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Password</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="password"  name="pass" style="width: 80%;" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>">
                    </div>
                </div><br><br>
                <div><input type="checkbox" name="remember_me" <?php if(isset($_COOKIE["em"])) { ?> checked <?php } ?>>
		<label for="remember-me">Remember me</label>
                </div>
                <center>
                <input type="submit" value="Login" name="login" class="btn btn-success btn-lg" onclick="submit_data()"><br><br>
           		</center>

            </div>
        </form>
    </div>

</body>

</html>
<br><br><br><br>
