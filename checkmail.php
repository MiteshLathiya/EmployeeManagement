<?php

$connection=new mysqli("localhost","root","","employee_management");
$error="";
if (isset($_POST['email'])) {
    $em= $_POST['email'];


$query = "select count(*) as checkemail from employee_information where email='" . $em . "'";

$result = mysqli_query($connection, $query);

if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $em)) {
    $error .= "<span style='color: red;'>Invalid Email Format</span>";
} else {
    $error = "<span style='color: green;'>Available.</span>";
}

if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_array($result);

    $count = $row['checkemail'];

    if ($count > 0) {
        $error = "<span style='color: red;'>Not Available.</span>";
    }
}
echo $error;


}