<?php
?>
<br><br><br><br><br>
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Employee Salary</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
  <style>
    th,
    td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
 
  </style>
</head>

<?php
$this->insertsalary()
?>

<body>
  <?php
  if (isset($_SESSION['delete'])) {
  ?>
    <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong><?php echo $_SESSION['delete']; ?></strong>
    </div>
  <?php
  }
  unset($_SESSION['delete']);
  ?>
  <?php
  if (isset($_SESSION['update'])) {
  ?>
    <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong><?php echo $_SESSION['update']; ?></strong>
    </div>
  <?php
  }
  unset($_SESSION['update']);
  ?>
  
  <?php
  if (isset($_SESSION["insertsuccess"])) {
  ?>
    <div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong><?php echo ucfirst($_SESSION["insertsuccess"]); ?></strong>
    </div>
  <?php
  }
  unset($_SESSION['insertsuccess']);
  ?>
  
  <?php
  if (isset($this->error)) {
  ?><span class="text-danger"><?php
                              echo $this->error; ?></span><?php
                                                      }
                                                        ?>

  <br>
  <form method="post" >
    <div class="container">
      <div class="row">
        <div class="col-2">

          <select name="month" class="form-control">
            <option value="">Month</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
          </select>
        </div>
        <div class="col-4">
          <input  class="form-control" type="number" placeholder="Enter Salary" name="salary" min="0">

          <input class="form-control" value=" <?php echo ucfirst($_SESSION["id"]); ?>" type="text" name="id" style="display: none;">
        </div>
        <div class="col-4">
          <input class="btn btn-primary" value="Add" type="submit" name="submitsalary">

        </div>
      </div>
    </div>
  </form><br><br>
  <div class="card" style="margin-left: 150px;width:70%;">
    <table>
      <thead>
        <tr style="background-color: whitesmoke;">
          <th>Salary ID</th>
          <th>Employee</th>
          <th>Month</th>
          <th>Salary</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->selectsalary() as $saldata) {

        ?>
          <tr style="font-size: 17px;">
            <td><a><?php echo $saldata['salary_id'] ?></a></td>
            <td><a><?php echo $saldata['firstname'] ?></a></td>
            <td><a><?php echo $saldata['month'] ?></a></td>
            <td><a><?php echo $saldata['salary'] ?></a></td>
            <td><a class="btn btn-success" style="color: white;" href="<?php echo $mainurl ?>EditSalary?edtsal=<?php echo $saldata['salary_id'] ?> ">Edit</a>&nbsp&nbsp&nbsp<?php $this->deletesalary() ?><a class="btn btn-danger" style="color: white;" href="<?php echo $mainurl ?>Salary?delsal=<?php echo $saldata['salary_id'] ?>">Delete</a></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div><br>
  <div class="container">
      <div class="row">
        <div class="col-4">
           
        </div>
        <div class="col-4">
           
        </div>
        <div class="col-4">
            <a class="btn btn-info btn-sm" href="<?php echo $mainurl ?>DownloadSalary">Download Salary</a>
        </div>
        </div>
        </div>
</body>

</html>