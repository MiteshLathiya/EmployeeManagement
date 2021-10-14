<?php
	 
    // Include database connection

    include_once "model.php";

    // Check username is already exists in database

   
    $email = $_POST['email'];
    
    $query = "SELECT * FROM employee_information WHERE email = '$email'";
    
    $result = $con->query($query);
    
    if ($result->num_rows > 0) {
        echo 1;
    }else{
      $query = "INSERT INTO employee_information ('email') 
                VALUES('$email')";
      $result = $con->query($query);
      echo 0;
    }
  

?>