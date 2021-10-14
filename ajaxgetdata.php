<?php

$connection=new mysqli("localhost","root","","employee_management");
//load state while select country

if (isset($_POST["cn"])) {
    $cn = $_POST["cn"];
    $sel = "select * from employee_city join employee_country on employee_city.c_id = employee_country.c_id where c_name='$cn'";
    $query = mysqli_query($connection, $sel);
    while ($result = mysqli_fetch_array($query)) {

?>

        <option value="<?php echo $result["ct_name"]; ?>"><?php echo $result["ct_name"]; ?></option>

    <?php
    }
}






?>