<?php
$connection=new mysqli("localhost","root","","employee_management");

if(!empty($_GET['code']) && isset($_GET['code']))
{
$code=$_GET['code'];
$sql=mysqli_query($connection,"select * from employee_information where activatecode='$code'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$st=0;
$result=mysqli_query($connection,"select id from employee_information where activatecode='$code' and status='$st'");
$result4=mysqli_fetch_array($result);
if($result4>0)
 {
$st=1;
$result1=mysqli_query($connection,"update employee_information set status='$st' where activatecode='$code'");
$msg="<span style='color: red;'>Your account is activated</span>";
}
else
{
$msg ="<center><span style='color: red;'>Your account is already active, no need to activate again</span>";
}
}
else
{
$msg ="<span style='color: red;'>Wrong activation code.</span>";
}
}
?>
<?php echo $msg?>