<br><br><br><br><br>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Salary Update</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
<?php $this->updatesalary()?>
    <nav aria-label="breadcrumb" class="breadcrumb" style="height: 50px;">

        <li class="breadcrumb-item"><a href="<?php echo $mainurl ?>Salary">Back</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update Salary</li>

    </nav>
    <br><br>
    <?php 
if (isset($this->error)) {
?><span class="text-danger"><?php
 echo $this->error;?></span><?php
}
?>
    <div class="container">
       
            <?php foreach ($this->selsalid() as $sal) {
               
             ?>
              <form method="post">
            <div class="row">
                <div class="col-3">
                   
                    <input class="form-control" type="text"  value="<?php echo $sal['month']?>" readonly>
                    <input type="text" name="id" value="<?php echo $sal['salary_id']?>" style="display: none;">

                </div>
                <div class="col-4">
                    <input class="form-control" type="number" placeholder="Enter Salary" name="salary" value="<?php echo $sal['salary']?>" min="0">
                </div>
                <div class="col-4">
                    <input class="btn btn-primary" value="Update" type="submit" name="updsalary">

                </div>
            </div>
            </form>
            <?php
            }
            ?>
        
    </div>
   
</body>

</html>