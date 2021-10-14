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
    <title>Employee Update</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl ?>css/stylefile.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl ?>css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl ?>css/font-awesome.min.css'>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->



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
        $.validator.addMethod('filesize', function(value, element, param) {

            var size = element.files[0].size;

            size = size / 1024;
            size = Math.round(size);
            return this.optional(element) || size <= param;
        });

        $().ready(function() {
            $("#form").validate({
                rules: {
                    fn: "required",
                    ln: "required",
                    em: {
                        required: true,
                        email: true,
                    },
                    salary:{
                        required: true
                    },
                    // pass: {
                    // 	required: true,
                    // 	minlength: 5
                    // },
                    // cpass: {
                    // 	required: true,
                    // 	minlength: 5,
                    // 	equalTo: "#pass"
                    // },

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
                   
                    // img:{

                    // required: true,
                    // extension: "png",
                    // filesize: 1024
                    // }



                },
                messages: {
                    fn: "Firstname is required",
                    ln: "Lastname required",
                    em: "Please enter valid email address",
                    //   pass: {
                    // 		required: "Please Enter  Password",
                    // 		minlength: "Your Password must be at least 5 characters long"
                    // 	},
                    // 	cpass: {
                    // 		required: "Please Enter Confrim Password",
                    // 		minlength: "Your Password must be at least 5 characters long",
                    // 		equalTo: "Please enter the same Password as above"
                    // 	},
                    bdate: {
                        required: "Please Select Birthdate"
                    },
                    salary:{
                        required: "Please Enter Salary",
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
                        required: "Pelase Enter Name Of Organisations"
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
                   
                    
                    // img:{
                    //     required: "Please Provide Image File",
                    //     extension: "Please Enter Only Png Formate",
                    //     filesize: "Please Enter under 1 Mb File"
                    //     }
                }
            });
        });
    </script>


    <link href="<?php echo $baseurl ?>css/jquery.fancybox.min.css" rel="stylesheet">
    <script src="<?php echo $baseurl ?>js/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script>
     <script>

function str(val) {
    $.ajax({
        type: "POST",
        url: "<?php echo $mainurl?>ajaxgetdata.php",
        data: "cn=" + val,

        success: function(data) {

            $("#ct").html(data);
        }
    });
}


</script>


</head>

<body>
    <!-- <form>
    <fieldset>
        <legend>Image upload</legend>
        <input type="file" onchange="getImg(this,500,'jpeg|png')" />
    </fieldset>
</form> -->

    <br>
    <div class="card" style="width: 50rem; margin-left: 10%;">
        <center>
            <img class="card-img-top" src="assets/img/7fNODEdp_400x400.jpg" style="height: 150px; width: 150px;" alt="Card image cap">
        </center>
        <div class="card-body">
            <h3 class="card-title">Employee </h3>
            <hr style="border:solid 2px">
        </div>
   
       

      
        <br>
        <?php $this->updemp() ?>
        <span class="text-danger"><?php echo $this->error; ?></span>
        <?php $this->delempimg() ?>


        <?php
        foreach ($this->selemployeeid() as $employeedata1) {
        ?>

            <form method="POST" id="form" enctype="multipart/form-data" class="form-control">
                <br><br>

                <input class="form-control" value="<?php echo $employeedata1['id'] ?>" type="text" name="id" style="display: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h5><b>Name</b></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <input class="form-control" value="<?php echo $employeedata1['firstname'] ?>" type="text" name="fn">
                            First Name
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" value="<?php echo $employeedata1['lastname'] ?>" type="text" name="ln">
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
                            <input class="form-control" value="<?php echo $employeedata1['email'] ?>" type="email" name="em">
                        </div>
                    </div><br><br>
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
                            <input class="form-control" id="datepicker" value="<?php echo $employeedata1['birthdate'] ?>" type="text" name="bdate">
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <h5><b>Mobile Number</b></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <input class="form-control" type="number" value="<?php echo $employeedata1['mobilecode'] ?>" name="mcode" style="width: 65px;">
                            Code
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control" type="number" value="<?php echo $employeedata1['mobilenumber'] ?>" name="mnumber" style="margin-left: -20px;">
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
                            <input type="radio" value="male" <?php if ($employeedata1['gender'] == "Male") {
                                                                    echo "checked";
                                                                } ?> name="gender">Male<br>
                            <input type="radio" value="female" <?php if ($employeedata1['gender'] == "Female") {
                                                                    echo "checked";
                                                                } ?> name="gender">Female
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5><b>Full name of organization</b></h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" type="text" value="<?php echo $employeedata1['organisation'] ?>" name="org" style="width: 180%;">
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5><b>Website</b></h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" type="text" value="<?php echo $employeedata1['website'] ?>" name="web" style="width: 120%;">
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5><b>Address</b></h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" type="text" value="<?php echo $employeedata1['address'] ?>" name="adr" style="width: 160%;">
                            Address
                        </div>
                    </div><br><br>
                   
                    <div class="row">
                   
                   <div class="col-sm-4" >
                       <select name="cn" id="cn" onchange="return str(this.value)">
                           <option value="<?php echo $employeedata1['country'] ?>"><?php echo $employeedata1['country'] ?></option>
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
                   <option value="<?php echo $employeedata1['city'] ?>"><?php echo $employeedata1['city'] ?></option>
                       
                   </select>
                   <br>City
                   </div>
               </div><br><br>

                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" value="<?php echo $employeedata1['postcode'] ?>" type="number" name="pcode">
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
                            <input class="form-control" value="<?php echo $employeedata1['organisationtype'] ?>" type="text" name="torg" style="width:120%;">
                            <br>E.g. PLC,Limited Company,LLP,other partnership,sole trader or other
                        </div>
                    </div><br><br>

                    <?php

                    $lang = explode(",", $employeedata1['language']);

                    ?>

                    <div class="row">
                        <div class="col-sm-4">
                            <h5><b>Language proficiency</b></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="checkbox" name="lang[]" <?php foreach ($lang as $value) {
                                                                        if ($value == "PHP") {
                                                                            echo "checked";
                                                                        }
                                                                    } ?> value="PHP">
                            PHP
                        </div>
                        <div class="col-sm-8">
                            <input type="checkbox" name="lang[]" <?php foreach ($lang as $value) {
                                                                        if ($value == "JAVA") {
                                                                            echo "checked";
                                                                        }
                                                                    } ?> value="JAVA">
                            JAVA
                        </div>
                        <div class="col-sm-8">
                            <input type="checkbox" name="lang[]" <?php foreach ($lang as $value) {
                                                                        if ($value == ".NET") {
                                                                            echo "checked";
                                                                        }
                                                                    } ?> value=".NET">
                            .NET
                        </div>
                        <div class="col-sm-8">
                            <input type="checkbox" name="lang[]" <?php foreach ($lang as $value) {
                                                                        if ($value == "Python") {
                                                                            echo "checked";
                                                                        }
                                                                    } ?> value="Python">
                            Python
                        </div>
                        <div class="col-sm-8">
                            <input type="checkbox" name="lang[]" <?php foreach ($lang as $value) {
                                                                        if ($value == "Other") {
                                                                            echo "checked";
                                                                        }
                                                                    } ?> value="Other">
                            Other
                        </div>
                    </div><br><br>


                    <div class="row">
                        <?php
                        foreach ($this->selimg() as $img) {

                        ?>
                            <div class="card" style="width: 30rem;">
                                <a class="fancybox" rel="group" href="employee_image/<?php echo $img['name'] ?>"><img src="employee_image/<?php echo $img['name'] ?>" style="width:300px;height:150px" alt="" /></a>
                                <div class="card-body">
                                <?php $this->delempimg() ?>
                                    <a href="<?php echo $mainurl ?>Edit?img_id=<?php echo $img['imageid'] ?>&empid=<?php echo $img['id'] ?>" class="btn btn-danger"> Delete</a>

                                </div>
                            </div>
                        <?php
                        }
                        ?>

<div class="row">
                    <div class="col-sm-8">
                        <h5><b><br>Profile picture (.png only, 1 MB)(one or multiple):</b></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                    <br><input class="form-control" type="file" name="img[]" multiple="multiple" accept="image/*">
                    </div>

                </div><br><br>


                    </div><br><br><br>

                    <center>
                        <input type="submit" value="Update" name="update" class="btn btn-success btn-lg">
                    </center>
                    <br><br>
                </div>

            </form>
        <?php
        }
        ?>
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