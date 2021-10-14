
<br><br><br><br><br>

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


<div class="card" style="margin-left: 150px;width:70%;">
<table style="width:100%;">

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
            <td><?php echo $saldata['salary_id'] ?></td>
            <td><?php echo $saldata['firstname'] ?></td>
            <td><?php echo $saldata['month'] ?></td>
            <td><?php echo $saldata['salary'] ?></td>
          </tr>
        <?php
        }
        ?>
        </tbody>
       
</table>
</div>
<br>
</body>
</html><br><br><br><br>