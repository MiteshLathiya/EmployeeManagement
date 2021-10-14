<?php
 $this->spreadsheet();
 $this->salarypdf();
$mainurl = "http://localhost/EmployeeManagement/";
$baseurl = "http://localhost/EmployeeManagement/assets/"; 
if (!isset($_SESSION["id"])) {
  header("Location: http://localhost/EmployeeManagement/");
}
?>
<br><br><br><html>

<html>       
<header>   
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl ?>css/font-awesome.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl?>css/bootstrap.min.css'>     
<style>
table, th, td {
  border: 2px solid black;
}
th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
th
{
  background-color: whitesmoke;
}

 
</style>
</header>
<body>


&nbsp;&nbsp;
<nav aria-label="breadcrumb" class="breadcrumb" style="height: 50px;">

        <li class="breadcrumb-item"><a style="text-decoration: none; color: #e96b56;" href="<?php echo $mainurl ?>Salary">Back</a></li>
        <li class="breadcrumb-item active" aria-current="page">Download Salary</li>

    </nav><br><br>


<form method="POST">
<table style="width:90%; margin-left: 50px;">

        <thead>
        
        <tr style="background-color: whitesmoke;">
          <th>Salary ID</th>
          <th>Employee</th>
          <th>Month</th>
          <th>Salary</th>    
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->selectsalary() as $saldata) {
         ?>
        <tr>
            <td><input type="text" name="sid" value="<?php echo $saldata['salary_id'] ?>" style="border: none;"></td>
          
            <td><input type="text" name="fn" value="<?php echo $saldata['firstname'] ?>" style="border: none;"></td>
            <td><input type="text" name="month" value="<?php echo $saldata['month'] ?>" style="border: none;"></td>
            <td><input type="text" name="sal" value="<?php echo $saldata['salary'] ?>" style="border: none;"></td>
          </tr>
        <?php
        }
        ?>
        </tbody>
       
</table>

<br>


<div class="container">
  <div class="row">
    <div class="col-5">
 
    </div>
    <div class="col-3">
    <?php if (isset($this->error)) {
?><span class="text-danger"><?php
 echo $this->error;?></span><?php
}
?>
 </div>

    <div class="col-2">
   
    <select name="downloadtype">
    <option value="">Select Type</option>
        <option value="csv">CSV</option>
        <option value="xlsx">XLSX</option>
        </select>
    </div>
    <div class="col-2">
        <input class="btn btn-success" name="download" type="submit" value="Download">
    </div>
   
  </div>
  
</div><br>
<div class="container">
<div class="row">
  <div class="col-5">

  </div>
  <div class="col-6">

  </div>
  <div class="col-4">
  <a style="color: white; background-color: black;padding: 10px;">Download PDF &nbsp;&nbsp;&nbsp;</a>&nbsp;&nbsp;<span class="fa fa-arrow-circle-right"></span>&nbsp;&nbsp;<input class="btn btn-outline-dark" name="pdf" type="submit" value="PDF">
  </div>
  </div>
  </div>
</form>
</body>
</html><br><br><br><br>