<br><br><br><br><br>
<?php
$mainurl = "http://localhost/EmployeeManagement/";
$baseurl = "http://localhost/EmployeeManagement/assets/";

if (isset($_SESSION["id"])) {
    header("Location: http://localhost/EmployeeManagement/");
  }
?>
<?php

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Employee</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl ?>css/stylefile.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl ?>css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl ?>css/font-awesome.min.css'>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script>
        $(document).ready(function() {

            $("#check_email").keyup(function() {

                var email = $(this).val().trim();

                if (email != '') {

                    $.ajax({
                        url: 'checkmail.php',
                        type: 'post',
                        data: {
                            email: email
                        },
                        success: function(response) {

                            $('#uname_response').html(response);

                        }
                    });
                } else {
                    $("#uname_response").html("");
                }

            });

        });
    </script>
    <script>
        function submit_data() {
            jQuery.ajax({
                url: 'controller.php',
                type: 'post',
                data: jQuery('#frmCaptcha').serialize(),

            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

    <script src="<?php echo $baseurl ?>assets/js/jquery.js"></script>
    <script src="<?php echo $baseurl ?>assets/js/jquery.validate.js"></script>

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <style>
        #form label.error {
            color: red;

        }
    </style>

    <script>
     $.validator.addMethod('filesize', function (value, element,param) {

var size=element.files[0].size;

size=size/1024;
size=Math.round(size);
return this.optional(element) || size <=param ;
});
        $().ready(function() {
            
            $("#form").validate({
                rules: {
                    fn: "required",
                    ln: "required",
                    em: {
                        required: true,
                        //email: true
                    },
                    pass: {
                        required: true,
                        minlength: 5
                    },
                    cpass: {
                        required: true,
                        minlength: 5,
                        equalTo: "#pass"
                    },
                    bdate: {
                        required: true
                    },
                    mcode: {
                        required: true,
                        minlength: 1,
                        maxlength: 4
                    },
                    mnumber: {
                        required: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    gender: {
                        required: true
                    },
                    org: {
                        required: true
                    },
                    web: {
                        required: true,
                        url: true
                    },
                    adr: {
                        required: true
                    },
                    ct: {
                        required: true
                    },
                    cn: {
                        required: true
                    },
                    pcode: {
                        required: true
                    },
                    torg: {
                        required: true
                    },
                    'lang[]': {
                        required: true

                    },
                    'img[]':{

                    required: true,
                    extension: "png",
                    filesize: 2048
                    },

                    captcha: {
                        required: true
                    }


                },
                messages: {
                    fn: "Firstname is required",
                    ln: "Lastname required",
                    //em: "Please enter a valid email address",
                    pass: {
                        required: "Please Enter a Password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    cpass: {
                        required: "Please Enter Confrim Password",
                        minlength: "Your Password must be at least 5 characters long",
                        equalTo: "Please enter the same Password as above"
                    },
                   
                    bdate: {
                        required: "Please Select Birthdate"
                    },
                    mcode: {
                        required: "Please Enter Mobile Code",
                        minlength: "Please Enter Valid Length 1 Digit",
                        maxlength: "Please Enter Valid Length 4 Digit"
                    },
                    mnumber: {
                        required: "Please Enter Mobile Number",
                        minlength: "Please Enter Valid Length 10 Digit",
                        maxlength: "Please Enter Valid Length 10 Digit"
                    },
                    gender: {
                        required: "Please Check Any Gender"
                    },
                    org: {
                        required: "Pelase Provide Name Of Organisations"
                    },
                    ct: {
                        required: "Please Select City"
                    },
                    cn: {
                        required: "Please Select Country"
                    },
                    web: {
                        required: "Please Enter Website",
                        url: "Please Enter Valid URL include https://"
                    },

                    adr: {
                        required: "Please Enter Address"
                    },

                    pcode: {
                        required: "Please Enter Postcode"
                    },
                    torg: {
                        required: "Please Enter Type Of Organisatoins"
                    },
                    'lang[]': {
                        required: "You must check at least 1 box",

                    },
                    'img[]':{

                    required: "Please Select Image File",
                    extension: "Please Select Only Png Formate",
                    filesize: "Please Select under 2 Mb Image File"
                    }
                }
            });

        });
 
    </script>
   
   <script>

      function getcity(val) {
          $.ajax({
              type: "POST",
              url: "ajaxgetdata.php",
              data: "cn=" + val,

              success: function(data) {

                  $("#ct").html(data);
              }
          });
      }

     
  </script>
</head>

<body>

    <br>
    <div class="card" style="width: 50rem; margin-left: 10%;">
        <center>
            <img class="card-img-top" src="assets/img/7fNODEdp_400x400.jpg" style="height: 150px; width: 150px;" alt="Card image cap">
        </center>
        <div class="card-body">
            <h3 class="card-title">Employee Register</h3>
            <hr style="border:solid 2px;">
        </div>

        <br>
        <?php
        if (isset($_SESSION['register'])) {
        ?>
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><?php echo $_SESSION['register']; ?></strong>
            </div>
        <?php
        }
        unset($_SESSION['register']);
        ?>

                        
<?php  $this->insertalldata()?>






<span class="text-danger"><?php echo $this->error; ?></span>

        <form method="POST" id="form"  enctype="multipart/form-data" class="form-control">
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Name</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <input class="form-control" value="<?php if (!empty($_SESSION['fn'])) {
                                                                echo $_SESSION['fn'];
                                                            } ?>" type="text" name="fn">
                        First Name
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" value="<?php if (!empty($_SESSION['ln'])) {
                                                                echo $_SESSION['ln'];
                                                            } ?>" type="text" name="ln">
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
                        <input class="form-control" id="check_email" value="<?php if (!empty($_SESSION['em'])) {
                                                                                echo $_SESSION['em'];
                                                                            } ?>" type="text" name="em">
                        <div id="uname_response"></div>
                    </div>
                </div><br><br>
                <div>

                    <!-- Response -->

                </div>


                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Password</b></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" id="pass" type="password" name="pass" style="width: 120%;">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Confirm Password</b></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" id="cpass" type="password" name="cpass" style="width: 120%;">
                    </div>
                </div><br><br>
                

                

          
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Birthdate</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" id="datepicker" value="<?php if (!empty($_SESSION['bdate'])) {
                                                                                echo $_SESSION['bdate'];
                                                                            } ?>" type="text" name="bdate">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Mobile Number</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <input class="form-control" value="<?php if (!empty($_SESSION['mcode'])) {
                                                                echo $_SESSION['mcode'];
                                                            } ?>" type="number" name="mcode" style="width: 65px;">
                        Code
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" value="<?php if (!empty($_SESSION['mnumber'])) {
                                                                echo $_SESSION['mnumber'];
                                                            } ?>" type="number" name="mnumber" style="margin-left: -20px;">
                        Number
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Gender</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="radio" value="male" name="gender" <?php if (!empty($_SESSION['gender'])) { echo ($this->gender=='male')? 'checked':''; }?> />Male<br>
                        <input type="radio" value="female" name="gender" <?php if (!empty($_SESSION['gender'])) { echo ($this->gender=='female')? 'checked':''; }?> />Female
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <h5><b>Full name of organization</b></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" value="<?php if (!empty($_SESSION['org'])) {
                                                                echo $_SESSION['org'];
                                                            } ?>" type="text" name="org" style="width: 180%;">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <h5><b>Website</b></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" value="<?php if (!empty($_SESSION['web'])) {
                                                                echo $_SESSION['web'];
                                                            } ?>" type="text" name="web" style="width: 120%;">
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <h5><b>Address</b></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" value="<?php if (!empty($_SESSION['adr'])) {
                                                                echo $_SESSION['adr'];
                                                            } ?>" type="text" name="adr" style="width: 160%;">
                        Address
                    </div>
                </div><br><br>
                <div class="row">
                   
                    <div class="col-sm-4" >
                        <select name="cn" id="cn" onchange="return getcity(this.value)">
                            <option value="">Please Select</option>
                            <?php
                                   foreach ($this->selcountry() as $cn) {
                                            

                                    ?>
                                        <option value="<?php echo $cn["c_name"]; ?>"><?php echo $cn["c_name"]; ?></option>

                                    <?php

                                    }
                                    ?>


                        </select>
                        <br>Country
                    </div>
                    <div class="col-sm-3" style="margin-left: -35px;">
                    <select name="ct" id="ct" onchange="return str1(this.value)">
                    <option value="">-Select City-</option>
                        
                    </select>
                    <br>City
                    </div>
                </div><br><br>

                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" value="<?php if (!empty($_SESSION['pcode'])) {
                                                                echo $_SESSION['pcode'];
                                                            } ?>" type="number" name="pcode">
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
                        <input class="form-control" value="<?php if (!empty($_SESSION['torg'])) {
                                                                echo $_SESSION['torg'];
                                                            } ?>" type="text" name="torg" style="width:120%;">
                        <br>E.g. PLC,Limited Company,LLP,other partnership,sole trader or other
                    </div>
                </div><br><br>



                <div class="row">
                    <div class="col-sm-4">
                        <h5><b>Language proficiency</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <input type="checkbox" name="lang[]" value="PHP" <?php if (!empty($_SESSION['lang'])) { echo (in_array('PHP',$this->language)) ?'checked':'';} ?>/>
                        PHP
                    </div>
                    <div class="col-sm-8">
                        <input type="checkbox" name="lang[]" value="JAVA" <?php if (!empty($_SESSION['lang'])) { echo (in_array('JAVA',$this->language)) ?'checked':'';} ?>>
                        JAVA
                    </div>
                    <div class="col-sm-8">
                        <input type="checkbox" name="lang[]" value=".NET" <?php if (!empty($_SESSION['lang'])) { echo (in_array('.NET',$this->language)) ?'checked':'';} ?>>
                        .NET
                    </div>
                    <div class="col-sm-8">
                        <input type="checkbox" name="lang[]" value="Python" <?php if (!empty($_SESSION['lang'])) { echo (in_array('Python',$this->language)) ?'checked':'';} ?>>
                        Python
                    </div>
                    <div class="col-sm-8">
                        <input type="checkbox" name="lang[]" value="Other" <?php if (!empty($_SESSION['lang'])) { echo (in_array('Other',$this->language)) ?'checked':'';} ?>>
                        Other
                    </div>
                </div><br><br>

                <div class="row">
                    <div class="col-sm-8">
                        <h5><b>Profile picture (.png only, 1 MB)(one or multiple):</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="file" name="img[]" multiple="multiple" accept="image/*">
                    </div>

                </div><br><br>

                <img src="captcha.php">




                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="password" name="captcha" placeholder="Enter Captcha">
                    </div>
                </div>
                <br><br>

                <center>
                    <input type="submit" id="submit" name="register" class="btn btn-success btn-lg" onclick="submit_data()">
                </center>
                <br><br>
            </div>
        </form>
    </div>

</body>

</html>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd',
        maxDate: '0'
    });

    $("#from").datepicker({
        dateFormat: 'yy-mm-dd'
    }).bind("change", function() {
        var minValue = $(this).val();
        minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
        minValue.setDate(minValue.getDate() + 1);
        $("#to").datepicker("option", "minDate", minValue);
    })
</script>
<br><br><br><br><br>