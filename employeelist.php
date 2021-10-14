<br><br><br><br><br>
<?php


$mainurl = "http://localhost/EmployeeManagement/";
$baseurl = "http://localhost/EmployeeManagement/assets/"; 
if (!isset($_SESSION["id"])) {

  header("Location: http://localhost/EmployeeManagement/");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Employee List</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl ?>css/font-awesome.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl?>css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl?>css/jquery.dataTables.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src='<?php echo $baseurl?>js/jquery-3.5.1.js'></script>
    <script src='<?php echo $baseurl?>js/jquery.dataTables.min.js'></script>

<!--     
    <script>
   $(document).ready(function() {
    $('#empTable').DataTable();
} ); 
    
</script> -->

<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
<script>
      

      function str(val) {
          $.ajax({
              type: "POST",
              url: "<?php echo $mainurl?>ajaxgetdata.php",
              data: "cn=" + val,

              success: function(data) {

                  $("#st").html(data);
              }
          });
      }

     
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
        <style>
.pagination a {
  background-color: whitesmoke;
  color: blue;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}



</style>
</head>
<body>
    
<?php

    if (isset($_SESSION['loginsuccess'])) {
        ?>
        <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <strong><?php echo $_SESSION['loginsuccess']; ?></strong> 
      </div>
    <?php   
      }
      unset($_SESSION['loginsuccess']);
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

  $this->sortorder()
?>
         
<form method="get">
<table class="css-serial" style="width:100%;">

        <thead>
        
            <tr>
                <th><a href="EmployeeList?num_rows=<?php echo $this->limit;?>&search=<?php echo $this->search;?>&ct=<?php echo $this->ct;?>&cn=<?php echo $this->cn;?>&pageno=<?php echo $this->page;?>&column=id&order=<?php echo $this->asc_or_desc; ?>">ID&nbsp;<i class="fas fa-sort<?php echo $column == 'id' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                
                <th><a href="EmployeeList?num_rows=<?php echo $this->limit;?>&search=<?php echo $this->search;?>&ct=<?php echo $this->ct;?>&cn=<?php echo $this->cn;?>&pageno=<?php echo $this->page;?>&column=firstname&order=<?php echo $this->asc_or_desc; ?>">Firstname&nbsp;<i class="fas fa-sort<?php echo $column == 'firstname' ? '-' . $up_or_down : ''; ?>"></i></a></th>
            
                <th><a href="EmployeeList?num_rows=<?php echo $this->limit;?>&search=<?php echo $this->search;?>&ct=<?php echo $this->ct;?>&cn=<?php echo $this->cn;?>&pageno=<?php echo $this->page;?>&column=email&order=<?php echo $this->asc_or_desc; ?>">Email<i class="fas fa-sort<?php echo $column == 'email' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th><a href="EmployeeList?num_rows=<?php echo $this->limit;?>&search=<?php echo $this->search;?>&ct=<?php echo $this->ct;?>&cn=<?php echo $this->cn;?>&pageno=<?php echo $this->page;?>&column=country&order=<?php echo $this->asc_or_desc; ?>">Country&nbsp;<i class="fas fa-sort<?php echo $column == 'country' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th><a href="EmployeeList?num_rows=<?php echo $this->limit;?>&search=<?php echo $this->search;?>&ct=<?php echo $this->ct;?>&cn=<?php echo $this->cn;?>&pageno=<?php echo $this->page;?>&column=city&order=<?php echo $this->asc_or_desc; ?>">City&nbsp;<i class="fas fa-sort<?php echo $column == 'city' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th><a href="EmployeeList?num_rows=<?php echo $this->limit;?>&search=<?php echo $this->search;?>&ct=<?php echo $this->ct;?>&cn=<?php echo $this->cn;?>&pageno=<?php echo $this->page;?>&column=birthdate&order=<?php echo $this->asc_or_desc; ?>">DOB&nbsp;<i class="fas fa-sort<?php echo $column == 'birthdate' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th><a href="EmployeeList?num_rows=<?php echo $this->limit;?>&search=<?php echo $this->search;?>&ct=<?php echo $this->ct;?>&cn=<?php echo $this->cn;?>&pageno=<?php echo $this->page;?>&column=organisation&order=<?php echo $this->asc_or_desc; ?>">Organisation&nbsp;<i class="fas fa-sort<?php echo $column == 'organisation' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th><a href="EmployeeList?num_rows=<?php echo $this->limit;?>&search=<?php echo $this->search;?>&ct=<?php echo $this->ct;?>&cn=<?php echo $this->cn;?>&pageno=<?php echo $this->page;?>&column=language&order=<?php echo $this->asc_or_desc; ?>">Language&nbsp;<i class="fas fa-sort<?php echo $column == 'language' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th>Action</th>
            </tr>
        </thead>
       
        <tbody>
        <div class="container">
  <div class="row">
    <div class="col-2">
    <div class="divnum_rows">
                <span>Show</span>&nbsp;
                <select name="num_rows">
              
                <option value="5" selected <?php if (!empty($_GET['num_rows'])) { echo $this->limit=='5'?'selected':'';} ?>>5</option>
                <option value="10" <?php if (!empty($_GET['num_rows'])) { echo $this->limit=='10'?'selected':'';} ?>>10</option>
                <option value="20" <?php if (!empty($_GET['num_rows'])) { echo $this->limit=='20'?'selected':'';} ?>>20</option>
                </select>
               
                </div>
             
    </div>
    
    <div class="col-1">
    </div>
    <div class="col-2">
                        <select name="cn" id="cn" onchange="return str(this.value)">
                            <option value="">Please Select</option>
                            <option value="India"  <?php if (!empty($_GET['cn'])) { echo  $_GET['cn']=='India'?'selected':''; }?>>India</option>
                            <option value="USA"  <?php if (!empty($_GET['cn'])) { echo  $_GET['cn']=='USA'?'selected':''; }?>>USA</option>
                        </select>
    </div>
    <div class="col-3">
     
     <select name="ct">
        <option value="">Please Select</option>
        <option value="Rajkot" <?php if  (!empty($_GET['ct'])) { echo $_GET['ct']=='Rajkot'?'selected':'';} ?>>Rajkot</option>
        <option value="Ahmedabad" <?php if (!empty($_GET['ct'])) { echo $_GET['ct']=='Ahmedabad'?'selected':''; }?>>Ahmedabad</option>
        <option value="Surat" <?php if (!empty($_GET['ct'])) { echo $_GET['ct']=='Surat'?'selected':''; }?>>Surat</option>
        <option value="Jamnagar" <?php if (!empty($_GET['ct'])) { echo $_GET['ct']=='Jamnagar'?'selected':''; }?>>Jamnagar</option>
        <option value="New York" <?php if (!empty($_GET['ct'])) { echo $_GET['ct']=='New York'?'selected':''; }?>>New York</option>
        <option value="California" <?php if (!empty($_GET['ct'])) { echo $_GET['ct']=='California'?'selected':''; }?>>California</option>
    </select>
    
</div>
    <div class="col-4">
    <a >Search : &nbsp;<input type="text" name="search" value="<?php if (!empty($_GET['search'])) {
                                                                echo $_GET['search'];
                                                            } ?>"><br><br></a> 
                  
                  <input class="btn btn-primary" type="submit" name="submit">
    </div>
  </div>
</div>
                  
       <br>
      
     <?php
     if (isset($this->model->message)) {
       ?>
         <tr>
         <td></td>
                <td></td>
                <td></td>  
                <td></td> 
                <td></td>
                <td style="color: black;"><?php  echo $this->model->message;?></td>
                <td></td> 
                <td></td>
                <td></td>
                <td></td>
        </tr>
     <?php
     }
     ?>
  
              <?php foreach ($this->sortorder() as $em1) {  
            ?>
        
            <tr>
                <td><?php echo $em1['id']?></td>
                <td><?php echo $em1['firstname']?></td>
                <td><?php echo $em1['email']?></td>  
                <td><?php echo $em1['country']?></td>
                <td><?php echo $em1['city']?></td> 
                <td><?php echo $em1['birthdate']?></td> 
                <td><?php echo $em1['organisation']?></td>
                <td><?php echo $em1['language']?></td>
                <td> <a href="<?php echo $mainurl?>Edit?e_id=<?php echo $em1['id']?>" class="btn btn-info">Edit</a>&nbsp;&nbsp;<?php $this->delemp()?><a href="<?php echo $mainurl?>EmployeeList?del_emp=<?php echo $em1['id']?>&em=<?php echo $em1['email']?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
            }
            ?>
      

        </tbody>
       
    </table><br><br>
    
  <center>
<?php




$pagLink = "<div class='pagination' style='margin-left: 200px;'>";  
for ($i=1; $i<=$this->model->total_pages; $i++) {
  if (!isset($_GET['num_rows'])) {
    $pagLink .= "<a  href='EmployeeList?num_rows=5&search=".$this->search."&ct=".$this->ct."&cn=".$this->cn."&pageno=".$i."'>".$i."</a>";	
  }
  else {
    $pagLink .= "<a  href='EmployeeList?num_rows=".$this->limit."&column=".($_GET['column'])."&order=".($_GET['order'])."&search=".$this->search."&ct=".$this->ct."&cn=".$this->cn."&pageno=".$i."'>".$i."</a>";	
  }
              
}
echo $pagLink . "</div>";  




?>
<a <?php if($this->page > 1){

echo "href='EmployeeList?pageno=".$this->previous_page."&num_rows=".$this->limit."&column=".($_GET['column'])."&order=".($_GET['order'])."&search=".$this->search."&ct=".$this->ct."&cn=".$this->cn."'";

} ?>>Previous</a>

</li>  

<li <?php if($this->page >=$this->model->total_pages){

echo "class='disabled'";

} ?>>

<a <?php if($this->page < $this->model->total_pages) {

echo "href='EmployeeList?pageno=".$this->next_page."&num_rows=".$this->limit."&column=".($_GET['column'])."&order=".($_GET['order'])."&search=".$this->search."&ct=".$this->ct."&cn=".$this->cn."'";

} ?>>Next</a>

</li>
</center>
    </form>
    
</body>

</html>
