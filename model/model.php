<?php


class model
{
	
    public $connection="";
	
	
    public function __construct()
    {
		
      
		try {

			$this->connection=new mysqli("localhost","root","","employee_management");
			

			if($this->connection->connect_error){
				throw new Exception("Failed to connect to MySQL".$this->connection->connect_error);
			}
		}
		catch(Exception $e){
			echo 'Message: ' .$e->getMessage();
		}
	
    }
	
	

		
	//insert data
	public function insertalldata($table,$data) 
	 {
		
		 $k=array_keys($data);
		 $kk=implode(",",$k);

		 $v=array_values($data);
		 $vv=implode("','",$v);
		try {
			
			$insert="insert into $table($kk) values('$vv')";

				
			$query=mysqli_query($this->connection,$insert); 
			
			$this->inserted_id = $this->connection->insert_id;

				if(!$query){
					// $_SESSION['inserterror'] = "<center>This Month Salary Already Exist !</center>";
					throw new Exception("fail to Insert data");
				}
				return $query;
				

		} catch (Exception $e) {

			echo ("Error File name :- ".$e->getFile()).'<br>';
			echo ("Error Code Line :- ".$e->getLine()).'<br>';
			echo ("Error is :- ".$e->getMessage()).'<br>';
			
		}	
 
	 }


	 //Employee login
	 public function employeelogin($table, $em, $EncryptPassword)
	
	 {
		try {
	   
		  $select="select * from $table where status='1' and email='$em' and password='$EncryptPassword'"; 
	
		  $query=mysqli_query($this->connection,$select); 
		  
		 $result=mysqli_fetch_array($query); 
		$no=mysqli_num_rows($query);
		if($no==1)
		{
		   
			$_SESSION["id"]=$result["id"];
			$_SESSION["em"]=$result["email"];
			
	
			if(!$query){
				throw new Exception("fail to select data");
			}
			
			return true;
		}
	
		else
		{
			return false;
		}
	
	   } catch (Exception $e) {
		echo ("Error File name :- ".$e->getFile()).'<br>';
		echo ("Error Code Line :- ".$e->getLine()).'<br>';
		echo ("Error is :- ".$e->getMessage()).'<br>';
		
	}   
		
	}


	 //Select Employee Data
	 public function selalldata($table)
	  {

		try {
			$select="select * from $table";
		$query=mysqli_query($this->connection,$select);
		while($result=mysqli_fetch_array($query))
		{
		  $arr[]=$result;
		}

		if(!$query){
			throw new Exception("fail to select data");
		}
		return $arr;
		}catch (Exception $e) {
			echo ("Error File name :- ".$e->getFile()).'<br>';
			echo ("Error Code Line :- ".$e->getLine()).'<br>';
			echo ("Error is :- ".$e->getMessage()).'<br>';
		}
	  }
	
	

	  //select employee id
	  public function selemployeeid($table,$id)
	  {
		try {
		  $select="select * from $table where id = '".$id."' ";
		  $query=mysqli_query($this->connection,$select);
		  while($result=mysqli_fetch_array($query))
		  {
			  $arr[]=$result;
		  }
		  if(!$query){
			throw new Exception("fail to select data");
		}
		return $arr;
		}catch (Exception $e) {
			echo ("Error File name :- ".$e->getFile()).'<br>';
			echo ("Error Code Line :- ".$e->getLine()).'<br>';
			echo ("Error is :- ".$e->getMessage()).'<br>';
		}
	  }

	  
	  //update employee data
	  public function upddata($table,$fn,$ln,$em,$EncryptPassword,$bdate,$mcode,$mnumber,$gender,$org,$web,$add,$city,$country,$pcode,$torg,$lang,$data,$id)
	  {
		
		try {
		 $upd="update $table set firstname='$fn',lastname='$ln',email='$em',password='$EncryptPassword',birthdate='$bdate',mobilecode='$mcode',mobilenumber='$mnumber',
		gender='$gender',organisation='$org',website='$web',address='$add',city='$city',country='$country',postcode='$pcode',organisationtype='$torg'
		,language='$lang'  where id='$id'"; 

		  $query=mysqli_query($this->connection,$upd);

		if(!$query){
			throw new Exception("fail to update data");
		}
		return $query;
		}catch (Exception $e) {
			echo ("Error File name :- ".$e->getFile()).'<br>';
			echo ("Error Code Line :- ".$e->getLine()).'<br>';
			echo ("Error is :- ".$e->getMessage()).'<br>';
		}
	  }

	  
	  public function upddata1($table,$fn,$ln,$em,$bdate,$mcode,$mnumber,$gender,$org,$web,$add,$city,$country,$pcode,$torg,$lang,$data,$id)
	  {
			try {
		$upd="update $table set  firstname='$fn',lastname='$ln',email='$em',birthdate='$bdate',mobilecode='$mcode',mobilenumber='$mnumber',
		gender='$gender',organisation='$org',website='$web',address='$add',city='$city',country='$country',postcode='$pcode',organisationtype='$torg'
		,language='$lang'  where id='$id'"; 
		  $query=mysqli_query($this->connection,$upd);

		 if(!$query){
			throw new Exception("fail to update data");
		}
		return $query;
		}catch (Exception $e) {
			echo ("Error File name :- ".$e->getFile()).'<br>';
			echo ("Error Code Line :- ".$e->getLine()).'<br>';
			echo ("Error is :- ".$e->getMessage()).'<br>';
		}
	  }
	  

	  //sorting employee data table
	  public  function sortorder($table,$search,$ct,$cn,$column,$sort_order,$offset,$limit){
	
		try {
			
		  $select="SELECT * FROM $table where concat(firstname,email,organisation,language) LIKE '%$search%' AND city LIKE '%$ct%' AND country LIKE '%$cn%' ORDER BY  $column $sort_order LIMIT $offset ,$limit;";
		
		$selectcount="SELECT *,COUNT(*) over ()  FROM $table where concat(firstname,email,organisation,language) LIKE '%$search%' AND city LIKE '%$ct%' AND country LIKE '%$cn%' ORDER BY  $column $sort_order ";
	
		$this->result=mysqli_query($this->connection,$selectcount);
		$this->row = mysqli_num_rows($this->result);
		$this->total_pages = ceil($this->row/ $limit);

		$query=mysqli_query($this->connection,$select);


		
		if ($query->num_rows > 0) {
		
		while($result=mysqli_fetch_array($query))
		{
		
		$arr[]=$result;
	
		}
	}
	else {
		$this->message = "No Data Found";
	}
		if(!$query){
			throw new Exception("fail to select data");
		}
		return $arr;
	
	
		}catch (Exception $e) {
			echo ("Error File name :- ".$e->getFile()).'<br>';
			echo ("Error Code Line :- ".$e->getLine()).'<br>';
			echo ("Error is :- ".$e->getMessage()).'<br>';
		}
	  }


	  

	     //insert multiple image 
		 public function insertimage($table,$path,$size,$file_type,$eid)
		 {
			 
		 try {
  
			 $insert="insert into $table  SET name='$path', size='$size', type='$file_type', id='$eid'";
			 $query=mysqli_query($this->connection,$insert); 
			 
  
				 $result=$this->connection->query($query);
  
				 if(!$query){
					 throw new Exception("fail to Insert data");
				 }
				 return $query;			
				 
  
		 } catch (Exception $e) {
			 echo ("Error File name :- ".$e->getFile()).'<br>';
			 echo ("Error Code Line :- ".$e->getLine()).'<br>';
			 echo ("Error is :- ".$e->getMessage()).'<br>';
			
		 }		
  
		 }

		 //insert multiple updimage 
		 public function insertimg($table,$path,$size,$file_type,$id)
		 {
			 
		 try {
  
			echo $insert="insert into $table  SET name='$path', size='$size', type='$file_type', id='$id'";
			 $query=mysqli_query($this->connection,$insert); 
			 
  
				 $result=$this->connection->query($query);
  
				 if(!$query){
					 throw new Exception("fail to Insert data");
				 }
				 return $query;			
				 
  
		 } catch (Exception $e) {
			 echo ("Error File name :- ".$e->getFile()).'<br>';
			 echo ("Error Code Line :- ".$e->getLine()).'<br>';
			 echo ("Error is :- ".$e->getMessage()).'<br>';
			
		 }		
  
		 }


		//select employee image 
		public function selectimage($table,$empid)
		{

			try {
				$select="select * from $table  where id='$empid'";
			$query=mysqli_query($this->connection,$select);
			while($result=mysqli_fetch_array($query))
			{
			$arr[]=$result;
			}

			if(!$query){
				throw new Exception("fail to select data");
			}
			return $arr;
			}catch (Exception $e) {
				echo ("Error File name :- ".$e->getFile()).'<br>';
				echo ("Error Code Line :- ".$e->getLine()).'<br>';
				echo ("Error is :- ".$e->getMessage()).'<br>';
			}

		}


	   //select image id
	   public function selimageid($table,$imageid)
	   {
		 try {
		   $select="select * from $table where imageid = '".$imageid."' ";
		   $query=mysqli_query($this->connection,$select);
		   while($result=mysqli_fetch_array($query))
		   {
			   $arr[]=$result;
		   }
		   if(!$query){
			 throw new Exception("fail to select data");
		 }
		 return $arr;
		 }catch (Exception $e) {
			 echo ("Error File name :- ".$e->getFile()).'<br>';
			 echo ("Error Code Line :- ".$e->getLine()).'<br>';
			 echo ("Error is :- ".$e->getMessage()).'<br>';
		 }
	   }

	   //delete employee image
	   public function delimg($table,$em)
	   {
 
		 try {
		   
		echo   $delete="delete from $table where email='$em'";
		   $query=mysqli_query($this->connection,$delete);
 
		   if(!$query){
			 throw new Exception("fail to delete data");
		 }
		 return $query;
		 }catch (Exception $e) {
			 echo ("Error File name :- ".$e->getFile()).'<br>';
			 echo ("Error Code Line :- ".$e->getLine()).'<br>';
			 echo ("Error is :- ".$e->getMessage()).'<br>';
		 }  
	   }

	   //delete employee data
	  public function deldata($table,$id)
	  {

		try {
		  $k=array_keys($id);
		  $fielid=implode(",",$k);
		  $v=array_values($id);
		  $id=implode("','",$v);
		 echo $delete="delete from $table where $fielid='$id'";
		  $query=mysqli_query($this->connection,$delete);

		  if(!$query){
			throw new Exception("fail to delete data");
		}
		return $query;
		}catch (Exception $e) {
			echo ("Error File name :- ".$e->getFile()).'<br>';
			echo ("Error Code Line :- ".$e->getLine()).'<br>';
			echo ("Error is :- ".$e->getMessage()).'<br>';
		}  
	  }
 

		//select employee salary
		public function selectsalary($table,$id)
		{

			try {
				$select="select * from $table where salary_id='$id'";
			$query=mysqli_query($this->connection,$select);
		
			while($result=mysqli_fetch_array($query))
			{
			  $arr[]=$result;
			}
	
			if(!$query){
				throw new Exception("fail to select data");
			}
			return $arr;
			}catch (Exception $e) {
				echo ("Error File name :- ".$e->getFile()).'<br>';
				echo ("Error Code Line :- ".$e->getLine()).'<br>';
				echo ("Error is :- ".$e->getMessage()).'<br>';
			}

		}


		//update employee salary
		public function updsalary($table,$salary,$id)
		{
			  try {
		  $upd="update $table set salary='$salary' where salary_id='$id'"; 
			$query=mysqli_query($this->connection,$upd);
  
		   if(!$query){
			  throw new Exception("fail to update data");
		  }
		  return $query;
		  }catch (Exception $e) {
			  echo ("Error File name :- ".$e->getFile()).'<br>';
			  echo ("Error Code Line :- ".$e->getLine()).'<br>';
			  echo ("Error is :- ".$e->getMessage()).'<br>';
		  }
		}


	//select salary data with join main table
	public function joinsalary($table,$table1,$id)
	{

	try {
		 $salary = "select * FROM $table JOIN $table1 ON $table.id = $table1.id where $table1.id='$id'";
		$query=mysqli_query($this->connection,$salary);

		if (!$query) {
			throw new Exception("failed to select data");
		}
		return $query;
	} catch (Exception $e) {
		echo ("Error File name :- ".$e->getFile()).'<br>';
			  echo ("Error Code Line :- ".$e->getLine()).'<br>';
			  echo ("Error is :- ".$e->getMessage()).'<br>';
	}	

	}	


	  //logout employee
	  public function logout()
	  {
	
		  unset($_SESSION["id"]);
		  unset($_SESSION["em"]);
		
		  session_destroy();
		  return true;
	  }
	

}
