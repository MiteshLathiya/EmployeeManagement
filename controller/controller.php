<?php
error_reporting(0);

session_start();
require_once("services/services.php");
require_once("model/model.php");
$model = new model();

require_once("vendor/autoload.php");
require_once("vendor/dompdf/dompdf/autoload.inc.php");

use PHPMailer\PHPMailer\PHPMailer;

use PhpOffice\PhpSpreadsheet\Spreadsheet;

use Dompdf\Dompdf;






class controller
{


	public function __construct($model)
	{
		

		$this->model = $model;
	

		if ($_SERVER["PATH_INFO"]) {
			switch ($_SERVER["PATH_INFO"]) {
				case '/':
					require_once("index.php");
					require_once("topheader.php");
					require_once("header.php");
					require_once("slider.php");
					require_once("content.php");
					require_once("client.php");
					require_once("footer.php");

					break;

				case '/Login':

					require_once("header.php");
					require_once("login.php");
					require_once("footer.php");

					break;

				case '/Register':

					require_once("header.php");
					require_once("register.php");
					require_once("footer.php");

					break;

				case '/EmployeeList':

					require_once("header.php");
					require_once("employeelist.php");
					require_once("footer.php");

					break;

				case '/Edit':

					require_once("header.php");
					require_once("editemp.php");
					require_once("footer.php");

					break;

				case '/Email':

					require_once("email_varification.php");

					break;

				case '/Salary':
					
					require_once("header.php");
					require_once("salary.php");
					require_once("footer.php");
				
					break;

				case '/EditSalary':
				
					require_once("header.php");
					require_once("editsalary.php");
					require_once("footer.php");
				

					break;

				case '/DownloadSalary':
			
					
					require_once("downloadsalary.php");
					

					break;

					
					

				default:

				require_once("404.php");

					break;
			}
		}
	}

	public function insertalldata()
	{
		
		$services = new services();
		$this->services = $services;

		$this->error = '';
		
		if (isset($_POST["register"])) {


			$_SESSION['fn'] =  $fn  =  $_POST['fn'];
			$_SESSION['ln'] = $ln = $_POST['ln'];
			$_SESSION['em'] = $em = $_POST['em'];
		
			$_SESSION['bdate'] = $bdate = $_POST['bdate'];
			$_SESSION['mcode'] = $mcode = $_POST['mcode'];
			$_SESSION['mnumber'] = $mob = $_POST['mnumber'];
			$_SESSION['gender'] = $this->gender = $_POST['gender'];
			$_SESSION['org'] = $org = $_POST['org'];
			$_SESSION['web'] = $web = $_POST['web'];
			$_SESSION['adr'] = $add = $_POST['adr'];
			$_SESSION['ct'] = $city = $_POST['ct'];
			$_SESSION['cn'] = $country = $_POST['cn'];
			$_SESSION['pcode'] = $pcode = $_POST['pcode'];
			$_SESSION['torg'] = $typeorg = $_POST['torg'];
			$_SESSION['lang'] = $this->language = $_POST['lang'];
			//$_SESSION["name"]["img"] = $_FILES['img']['tmp_name'];
			//$_SESSION['img'] = $path = $_FILES['img']['name'];


			// $lang = "";
			// foreach ($language as $chk1) {
			// 	$lang .= $chk1 . ",";
			// }

			if (empty($_POST["fn"])) {
				$this->error .= '<a class="text-danger">Name is Required</a><br>';
			} else {
				if (!preg_match("/^[a-zA-Z ]*$/", $_POST["fn"])) {
					$this->error .= '<a class="text-danger">Only Alphabet allowed in Name</a><br>';
				} else {
					//$fn = $_POST["fn"];
				}
			}

			if (empty($_POST["ln"])) {
				$this->error .= '<a class="text-danger">Last Name  is required </a><br>';
			} else {
				if (!preg_match("/^[a-zA-Z ]*$/", $_POST["ln"])) {
					$this->error .= '<a class="text-danger">Only Alphabet allowed in Name</a><br>';
				} else {
					//$ln = $_POST["ln"];
				}
			}


			if (empty($_POST["em"])) {
				$this->error .= '<a class="text-danger">Email Address is Required</a><br>';
			} else {
				if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["em"])) {
					$this->error .= '<a class="text-danger">Invalid email format</a><br>';
				} else {
					//$em = $_POST["em"];
				}
			}



			if (empty($_POST["pass"])) {
				$this->error .= '<a class="text-danger">Password  is required </a><br>';
			} else {
				if (empty($_POST["pass"] > 6)) {
					$this->error .= '<a class="text-danger">Password must be 6 characters long !</a><br>';
				} else {
					$password = $_POST["pass"];
				}
				//$pass = $_POST["pass"];
			}

			if (empty($_POST["cpass"])) {
				$this->error .= '<a class="text-danger">Enter Confirm Password</a><br>';
			} else {
				if (empty($_POST["cpass"] > 6)) {
					$this->error .= '<a class="text-danger">Confirm Password must be 6 characters long !</a><br>';
				} else {
					$cpassword = $_POST["cpass"];
					if ($cpassword != $password) {
						$this->error = '<a class="text-danger">Password & Confirm Password does not match </a><br>';
					}
				}
				//$pass = $_POST["pass"];
			}

		
			if (empty($_POST["bdate"])) {
				$this->error .= '<a class="text-danger">DOB  is required </a><br>';
			} else {
				if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", ($_POST["bdate"]))) {
					$this->error = '<a class="text-danger">Enter Valid Date in formate YY-MM-DD</a><br>';
				} else {
					//$bdate = $_POST["bdate"];
				}
			}


			if (empty($_POST["mcode"])) {
				$this->error .= '<a class="text-danger"> Mobile code  is required</a><br>';
			}



			if (empty($_POST["mnumber"])) {
				$this->error .= '<a class="text-danger">Mobile Number is required</a><br>';
			} else {
				if (!preg_match("/^[0-9][0-9]{9}$/", $_POST["mnumber"])) {
					$this->error .= '<a class="text-danger">Please Enter only 10 digit number !</a><br>';
				} else {
					//$mob = $_POST["mob"];
				}
			}

			if (empty($_POST["gender"])) {
				$this->error .= '<a class="text-danger">Gender  is required </a><br>';
			} else {
				//$gender = $_POST["gender"];
			}

			if (empty($_POST["org"])) {
				$this->error .= '<a class="text-danger">organisation is required</a><br>';
			} else {
				//$org = $_POST["org"];
			}

			if (!filter_var($_POST["web"], FILTER_VALIDATE_URL)) {
				$this->error .= '<a class="text-danger">Website  is required please enter valid url with https://</a><br>';
			} else {
				//$web = test_input($_POST["web"]);
				//$web = $_POST["web"];
			}

			if (empty($_POST["adr"])) {
				$this->error .= '<a class="text-danger">Address  is required </a><br>';
			} else {
				//$add = $_POST["add"];
			}

			if (empty($_POST["ct"])) {
				$this->error .= '<a class="text-danger">Please Select City</a><br>';
			} else {
				$city = $_POST["ct"];
			}

			if (empty($_POST["cn"])) {
				$this->error .= '<a class="text-danger">Please Select City</a><br>';
			} else {
				$country = $_POST["cn"];
			}

			if (empty($_POST["pcode"])) {
				$this->error .= '<a class="text-danger">Post Code is required </a><br>';
			}

			if (empty($_POST["torg"])) {
				$this->error .= '<a class="text-danger">Type of Organisation  is required </a><br>';
			} else {
				//$typeorg = $_POST["typeorg"];
			}

			if (empty($_POST["lang"])) {
				$this->error .= '<a class="text-danger">Language  is required </a><br>';
			} else {
				// $lang = $_POST["lang"];
				// $lang = implode(', ', $lang);
			}

			

			$fn = $_POST["fn"];
			$ln = $_POST["ln"];
			$em = $_POST["em"];

			$pass = $_POST["pass"];

			$EncryptPassword = md5($pass);

			$cpass = $_POST["cpass"];
		
			$bdate = $_POST["bdate"];
			$mcode = $_POST["mcode"];
			$mob = $_POST["mnumber"];
			$gender = $_POST["gender"];
			$org = $_POST["org"];
			$web = $_POST["web"];
			$add = $_POST["adr"];
			$city = $_POST["ct"];
			$country = $_POST["cn"];
			$pcode = $_POST["pcode"];
			$typeorg = $_POST["torg"];
			$language = $_POST["lang"];
			$activationcode = md5($em . time());

			$lang = "";
			foreach ($language as $chk1) {
				$lang .= $chk1 . ",";
			}

			
				if ($pass == $cpass && $this->error == NULL){
					
					$mail = new PHPMailer(); 
					$mail->isSMTP();                     
					$mail->Host = 'smtp.gmail.com';       
					$mail->SMTPAuth = true;              
					$mail->Username = 'miteshlathiya77@gmail.com';   
					$mail->Password = ''; 
					$mail->SMTPSecure = 'tls';           
					$mail->Port = 587;                  


					$mail->setFrom('miteshlathiya77@gmail.com', 'EmployeeManagement'); 
					$mail->addReplyTo('miteshlathiya77@gmail.com', 'EmployeeManagement'); 


					$mail->addAddress($em); 

					

					$mail->isHTML(true); 
					$mainurl = "http://localhost/EmployeeManagement/";

					$mail->Subject = 'Verify Your Email Address'; 


					$bodyContent = '<a style="color:red"><h1>Verify Your Email Address</h1></a>'; 
					$bodyContent .= '<p>Thanks for creating an account. Please follow the link below to verify your email address</p>'; 
					$bodyContent .= "http://localhost/EmployeeManagement/Email?code=$activationcode";
					$mail->Body    = $bodyContent; 


					$mail->send();
					
					if(!$mail->send()) {
						$this->error .= '<a class="text-danger">Message could not be sent<br></a><br>';
						echo 'Mailer Error: ' . $mail->ErrorInfo;
					} else {
						echo 'Message has been sent';
					}
			}

		

			foreach ($_FILES['img']['tmp_name'] as $key => $value) {

				$file_tmpname = $_FILES['img']['tmp_name'][$key];
				$file_name = $_FILES['img']['name'][$key];
				$file_size = $_FILES['img']['size'][$key];
				$file_type = $_FILES['img']['type'][$key];

				$mimetype = mime_content_type($file_tmpname);
				$countimg = count($_FILES['img']['name']);

				$this->services->check_mime($mimetype, $file_size, $countimg);

				if (in_array(strtolower($mimetype),  $this->services->allowedfileExtensions)) {

					
					if ($countimg > $this->services->limit_img) {
						$this->error .= '<a class="text-danger">Select maximum 3 images<br / ></a><br>';
					}
					
					if ($file_size > $this->services->maxsize) {
						$this->error .= '<a class="text-danger"> File size is larger than the allowed limit.<br / ></a><br>';
					}
						//  echo "Error: File size is larger than the allowed limit."; 		
				} else {
		 
					$this->error .= '<a class="text-danger"> File type is not allowed please select valid image<br / ></a><br>';
				}
			}


			if ($pass == $cpass && $this->error == NULL) {

				$data = array(
					"firstname" => $fn, "lastname" => $ln, "email" => $em, "password" => $EncryptPassword,
					"birthdate" => $bdate, "mobilecode" => $mcode, "mobilenumber" => $mob,
					"gender" => $gender, "organisation" => $org, "website" => $web,
					"address" => $add, "city" => $city, "country" => $country, "postcode" => $pcode,
					"organisationtype" => $typeorg, "language" => $lang, "activatecode" => $activationcode
				);

				$chk = $this->model->insertalldata('employee_information', $data);
		
			}


				$directory = 'employee_image/';

				if (!is_dir($directory)) {
					mkdir($directory);
				}


				foreach ($_FILES['img']['tmp_name'] as $key => $value) {

					$file_tmpname = $_FILES['img']['tmp_name'][$key];
					$file_name = $_FILES['img']['name'][$key];
					$file_size = $_FILES['img']['size'][$key];

					$file_type = $_FILES['img']['type'][$key];

			
					$filepath = $directory.time().$file_name;
					move_uploaded_file($file_tmpname, $filepath);

					$path = time().$file_name;
				
					if ($pass == $cpass && $this->error == NULL) {
					$eid = $this->model->inserted_id;
					$img = $this->model->insertimage('employee_image', $path, $file_size, $file_type, $eid);

					}
				}
			
			
			



			if ($this->error == NULL) {
				unset($_SESSION["fn"]);
				unset($_SESSION["ln"]);
				unset($_SESSION["em"]);
				unset($_SESSION["salary"]);
				unset($_SESSION["bdate"]);
				unset($_SESSION["mcode"]);
				unset($_SESSION["mnumber"]);
				unset($_SESSION["gender"]);
				unset($_SESSION["org"]);
				unset($_SESSION["web"]);
				unset($_SESSION["adr"]);
				unset($_SESSION["ct"]);
				unset($_SESSION["cn"]);
				unset($_SESSION["pcode"]);
				unset($_SESSION["torg"]);

		
			}

			if ($chk && $this->error == NULL) {
				
				echo "<script> window.location='http://localhost/EmployeeManagement/Login';</script>";

				echo '<meta http-equiv="refresh" content="0;URL=http://localhost/EmployeeManagement/Login">';
				$_SESSION['success'] = "<center>Register Successfully !</center>";
			}

		}
	}
 
	public function setunsetcookie()
	{
		$services = new services();
		$this->services = $services;


		if(isset($_POST["login"])) {

			$em= $_POST["em"];
			$pass= $_POST["pass"];
			$this->services->setunsetcookie($em,$pass);
			
		}
	
	}

	public function employeelogin()
	{
	
		
		if (isset($_POST["login"])) {

			$this->error = '';
			
			$em = $_POST["em"];
			$pass = $_POST["pass"];
			$EncryptPassword = md5($pass);
			$rememberme = $_POST["remember_me"];

	

			if (empty($_POST["em"])) {
				$this->error .= '<a class="text-danger">Email Address is Required</a><br>';
			} else {
				if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["em"])) {
					$this->error .= '<a class="text-danger">Invalid email format</a><br>';
				} 
			}
			if (empty($_POST["pass"])) {
				$this->error .= '<a class="text-danger">Password  is required </a><br>';
			} else {
				if (empty($_POST["pass"] > 6)) {
					$this->error .= '<a class="text-danger">Password must be 6 characters long !</a><br>';
				} 
			}
	
			
			$chk = $this->model->employeelogin('employee_information', $em, $EncryptPassword);

			
			if ($chk && $this->error == NULL) {
		
			
				echo "<script> window.location='http://localhost/EmployeeManagement/EmployeeList';</script>";
				echo '<meta http-equiv="refresh" content="0;URL=http://localhost/EmployeeManagement/EmployeeList">';
					$_SESSION['loginsuccess'] = "<center>Login Successfully !</center>";
				
			} 
			else {
				
					$_SESSION['loger'] = "<center>Login Failed! Please make sure that you enter the correct details and that you have activated your account.</center>";
			}
		
		}
	}

	public function sortorder()
	{


		if (isset($_GET['num_row']) || isset($_GET["submit"]) || $sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC') {


			$columns = array('id', 'firstname', 'email', 'city', 'country', 'birthdate', 'organisation', 'language');
			$column = isset($_GET['column']) && in_array($_GET['column'], $columns) ? $_GET['column'] : $columns[0];


			$this->asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
			$this->search = trim($_GET["search"]);
			$this->email = $_GET["search"];
			$this->ct = $_GET["ct"];
			$this->cn = $_GET["cn"];

			$_SESSION['num_rows'] = $this->limit = $_GET['num_rows'];
			$this->limit = $_GET['num_rows'];

			if (!isset($_GET['num_rows'])) {
				$this->limit = 5;
			}

			if (isset($_GET['pageno'])) {
				$this->page = $_GET['pageno'];
				$this->limit = $_GET['num_rows'];
			} else {
				$this->page = 1;
			}
			$offset = ($this->page - 1) * $this->limit;

			$this->previous_page = $this->page - 1;

			$this->next_page = $this->page + 1;

			
			$this->empdata = $this->model->sortorder('employee_information', $this->search, $this->ct, $this->cn, $column, $sort_order, $offset, $this->limit);

			return $this->empdata;

		
		}
	}

	public function selemployeeid()
	{
		if (isset($_GET["e_id"])) {
			$id = $_GET["e_id"];

			$employeedata = $this->model->selemployeeid('employee_information', $id);

			return $employeedata;
		}
	}

	public function updemp()
	{

		
		if (isset($_POST["update"])) {



			if (empty($_POST["fn"])) {
				$this->error .= '<a class="text-danger">Name is Required</a><br>';
			} else {
				if (!preg_match("/^[a-zA-Z ]*$/", $_POST["fn"])) {
					$this->error .= '<a class="text-danger">Only Alphabet allowed in Name</a><br>';
				} else {
					//$fn = $_POST["fn"];
				}
			}

			if (empty($_POST["ln"])) {
				$this->error .= '<a class="text-danger">Last Name  is required </a><br>';
			} else {
				if (!preg_match("/^[a-zA-Z ]*$/", $_POST["ln"])) {
					$this->error .= '<a class="text-danger">Only Alphabet allowed in Name</a><br>';
				} else {
					//$ln = $_POST["ln"];
				}
			}


			if (empty($_POST["em"])) {
				$this->error .= '<a class="text-danger">Email Address is Required</a><br>';
			} else {
				if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["em"])) {
					$this->error .= '<a class="text-danger">Invalid email format</a><br>';
				} else {
					//$em = $_POST["em"];
				}
			}

			

			if (empty($_POST["bdate"])) {
				$this->error .= '<a class="text-danger">DOB  is required </a><br>';
			} else {
				if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", ($_POST["bdate"]))) {
					$this->error = '<a class="text-danger">Enter Valid Date in formate YY-MM-DD</a><br>';
				} else {
					//$bdate = $_POST["bdate"];
				}
			}


			if (empty($_POST["mcode"])) {
				$this->error .= '<a class="text-danger"> Mobile code  is required</a><br>';
			}


			if (empty($_POST["gender"])) {
				$this->error .= '<a class="text-danger">Gender  is required </a><br>';
			} else {
				//$gender = $_POST["gen"];
			}

			if (empty($_POST["org"])) {
				$this->error .= '<a class="text-danger">organisation is required</a><br>';
			} else {
				//$org = $_POST["org"];
			}

			if (!filter_var($_POST["web"], FILTER_VALIDATE_URL)) {
				$this->error .= '<a class="text-danger">Website  is required please enter valid url with https://</a><br>';
			} else {
				//$web = test_input($_POST["web"]);
				//$web = $_POST["web"];
			}

			if (empty($_POST["adr"])) {
				$this->error .= '<a class="text-danger">Address  is required </a><br>';
			} else {
				//$add = $_POST["add"];
			}

			if (empty($_POST["pcode"])) {
				$this->error .= '<a class="text-danger">Post Code is required </a><br>';
			} else {
				if (!preg_match("/^[1-9][0-9]*$/", $_POST["pcode"])) {
					$this->error .= '<a class="text-danger">Enter Only Digit Number</a><br>';
				} else {
					//$mcode = $_POST["code"];
				}
				//$pcode = $_POST["pcode"];
			}

			if (empty($_POST["torg"])) {
				$this->error .= '<a class="text-danger">Type of Organisation  is required </a><br>';
			} else {
				//$typeorg = $_POST["typeorg"];
			}

			if (empty($_POST["lang"])) {

				$this->error .= '<a class="text-danger">Language  is required </a><br>';
			}


			$id = $_POST["id"];
			$fn = $_POST["fn"];
			$ln = $_POST["ln"];
			$em = $_POST["em"];

			$pass = $_POST["pass"];

			$EncryptPassword = md5($pass);

			$cpass = $_POST["cpass"];
		
			$bdate = $_POST["bdate"];
			$mcode = $_POST["mcode"];
			$mnumber = $_POST["mnumber"];
			$gender = $_POST["gender"];
			$org = $_POST["org"];
			$web = $_POST["web"];
			$add = $_POST["adr"];
			$city = $_POST["ct"];
			$country = $_POST["cn"];
			$pcode = $_POST["pcode"];
			$torg = $_POST["torg"];
			$language = $_POST["lang"];

			$lang = "";
			foreach ($language as $chk1) {
				$lang .= $chk1 . ",";
			}

			
			
					foreach ($_FILES['img']['tmp_name'] as $key => $value) {

						$file_tmpname = $_FILES['img']['tmp_name'][$key];
						$file_name = $_FILES['img']['name'][$key];
						$file_size = $_FILES['img']['size'][$key];
						$file_type = $_FILES['img']['type'][$key];
		
						$mimetype = mime_content_type($file_tmpname);
						$countimg = count($_FILES['img']['name']);
		
						$this->services->check_mime($mimetype, $file_size, $countimg);
	
						if ($file_name != NULL) {
							if (in_array(strtolower($mimetype),  $this->services->allowedfileExtensions)) {
						
											
								if ($countimg > $this->services->limit_img) {
									$this->error .= '<a class="text-danger">Select maximum 3 images<br / ></a><br>';
								}
								
								if ($file_size > $this->services->maxsize)
									$this->error .= '<a class="text-danger">Error: File size is larger than the allowed limit.<br / ></a><br>';
							
							} else {
								
						
								$this->error .= '<a class="text-danger">  File type is not allowed please select valid image<br / ></a><br>';
						
							}
						}
							
				}
							
			
		
			if ($this->error == NULL) {

				if (!$_FILES["img"]["error"] == 4) {
					if ($pass == $cpass) {
						$data = array(
							"firstname" => $fn, "lastname" => $ln, "email" => $em, "password" => $EncryptPassword,
							"birthdate" => $bdate, "mobilecode" => $mcode, "mobilenumber" => $mnumber,
							"gender" => $gender, "organisation" => $org, "website" => $web,
							"address" => $add, "city" => $city, "country" => $country, "postcode" => $pcode,
							"organisationtype" => $torg, "language" => $lang
						);

						$chk = $this->model->upddata('employee_information', $fn, $ln, $em, $EncryptPassword,  $bdate, $mcode, $mnumber, $gender, $org, $web, $add, $city, $country, $pcode, $torg, $lang, $data, $id);


					} 
				
				}
			}

			if (!empty($_POST["pass"])) {
				if (!$_FILES["img"]["error"] == 4) {
					if ($pass == $cpass) {
						$data = array(
							"firstname" => $fn, "lastname" => $ln, "email" => $em, "password" => $EncryptPassword,
							"birthdate" => $bdate, "mobilecode" => $mcode, "mobilenumber" => $mnumber,
							"gender" => $gender, "organisation" => $org, "website" => $web,
							"address" => $add, "city" => $city, "country" => $country, "postcode" => $pcode,
							"organisationtype" => $torg, "language" => $lang
						);

						$chk = $this->model->upddata('employee_information', $fn, $ln, $em, $EncryptPassword, $bdate, $mcode, $mnumber, $gender, $org, $web, $add, $city, $country, $pcode, $torg, $lang, $data, $id);


			
					} 
				
				}
			} else {
				$data = array(
					"firstname" => $fn, "lastname" => $ln, "email" => $em,
					"birthdate" => $bdate, "mobilecode" => $mcode, "mobilenumber" => $mnumber,
					"gender" => $gender, "organisation" => $org, "website" => $web,
					"address" => $add, "city" => $city, "country" => $country, "postcode" => $pcode,
					"organisationtype" => $torg, "language" => $lang
				);

				$chk = $this->model->upddata1('employee_information', $fn, $ln, $em, $bdate, $mcode, $mnumber, $gender, $org, $web, $add, $city, $country, $pcode, $torg, $lang, $data, $id);
				
			}


			$directory = 'employee_image/';

				if (!is_dir($directory)) {
					mkdir($directory);
				}


				foreach ($_FILES['img']['tmp_name'] as $key => $value) {

					$file_tmpname = $_FILES['img']['tmp_name'][$key];
					$file_name = $_FILES['img']['name'][$key];
					$file_size = $_FILES['img']['size'][$key];

					$file_type = $_FILES['img']['type'][$key];

			
					$filepath = $directory . time() . $file_name;
					move_uploaded_file($file_tmpname, $filepath);

					$path = time() . $file_name;
				
					if ($file_name != NULL && $this->error == NULL) {
				
					$img = $this->model->insertimg('employee_image', $path, $file_size, $file_type, $id);

					}
				}
			
			
			
			
			
			if ($chk && $this->error == NULL) {
					
		
			echo "<script> window.location='http://localhost/EmployeeManagement/EmployeeList';</script>";
			echo '<meta http-equiv="refresh" content="0;URL=http://localhost/EmployeeManagement/EmployeeList">';
			$_SESSION['update'] = "<center>Employee Data Updated Successfully !</center>";
				
			} 
			else {

				$_SESSION['upderror'] = "<center>Please Enter Valid Information !</center>";
				
			}
		}
			
	}

	public function selimg()
	{
		if (isset($_GET["e_id"])) {
			$empid = $_GET["e_id"];


			$selectimg = $this->model->selectimage('employee_image', $empid);

			return $selectimg;
		}
	}



	public function delemp()
	{
		//delete employee data
		if (isset($_GET["del_emp"]) && isset($_GET["em"])) {
			$empid = $_GET["del_emp"];
			$id = array("id" => $empid);
			$em = $_GET["em"];

			$selectimg = $this->model->selectimage('employee_image', 'employee_information', 'employee_image.email=employee_information.email', 'id', $empid);
			foreach ($selectimg as $key) {
				$image = $key['name'];
				$file = 'employee_image/' . $image;
				unlink($file);
			}



			if ($em) {

				$this->model->delimg('employee_image', $em);


			
				echo "<script> window.location='http://localhost/EmployeeManagement/EmployeeList';</script>";
				echo '<meta http-equiv="refresh" content="0;URL=http://localhost/EmployeeManagement/EmployeeList">';
				$_SESSION['delete'] = "<center>Employee Deleted Successfully !</center>";

				
			}

			if ($id) {
				$this->model->deldata('employee_information', $id);

			
				echo "<script> window.location='http://localhost/EmployeeManagement/EmployeeList';</script>";
				echo '<meta http-equiv="refresh" content="0;URL=http://localhost/EmployeeManagement/EmployeeList">';
				$_SESSION['delete'] = "<center>Employee Deleted Successfully !</center>";

			}
		}
	}

	public function delempimg()
	{
		//delete employee image
		if (isset($_GET['img_id'])) {
			$imageid = $_GET["img_id"];
			$id = array("imageid" => $imageid);



			$selectimge = $this->model->selimageid('employee_image', $imageid);
			foreach ($selectimge as $key) {
				$image = $key['name'];
				$file = 'employee_image/' . $image;
				unlink($file);
			}


			if ($id) {
				$this->model->deldata('employee_image', $id);

	
			
				echo "<script> window.location='http://localhost/EmployeeManagement/EmployeeList';</script>";
				echo '<meta http-equiv="refresh" content="0;URL=http://localhost/EmployeeManagement/EmployeeList">';

				$_SESSION['delete'] = "<center>Image Deleted <b>Successfully !</b></center>";

			}
		}
	}


	public function selcountry()
	{
		$country = $this->model->selalldata('employee_country');

		return $country;
	}

	public function selsalarydata()
	{
		$allsalary = $this->model->joinsalary('employee_salary','employee_information');

		return $allsalary;
	}


public function spreadsheet()
{

	$spreadsheet = new Spreadsheet();
	$sheet = $spreadsheet->getActiveSheet();


	if (isset($_POST['download'])) {

		if (empty($_POST['downloadtype'])) {
		$this->error .= '<a class="text-danger">Please Select Download Type</a><br>';
		}

	
		$empsalary = $this->selectsalary();
	

		$type=$_POST['downloadtype'];


		$sheet->setCellValue('A1', 'Salary ID');
        $sheet->setCellValue('B1', 'Employee');
        $sheet->setCellValue('C1', 'Month');
		$sheet->setCellValue('D1', 'Salary');

        $row = 2;

		foreach ($empsalary as $salarydata) {
            $sheet->setCellValue('A' . $row, $salarydata['salary_id']);
            $sheet->setCellValue('B' . $row, $salarydata['firstname']);
            $sheet->setCellValue('C' . $row, $salarydata['month']);
			$sheet->setCellValue('D' . $row, $salarydata['salary']);
            $row++;
        }


		$path = 'spreadsheet/';

		if (!is_dir($path)) {
			mkdir($path);
		}
	
		$filename = time();
		if($type == 'csv'){    

			$writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);    
			$fileFormat = '.csv'; 
			
		  } 
		  elseif($type == 'xlsx') {

			$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
			$fileFormat = '.xlsx';
		  }
		
		  if ($this->error == NUll && isset($_POST['download'])) {

			$mime= 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';

			header('Content-Type: ' . $mime);
			header("Content-disposition: attachment; filename=$filename$fileFormat");
			header("Cache-Control: max-age=0");
		
			$writer->save($path.$filename.$fileFormat);
			$writer->save('php://output');
		
			exit();
			
		  }
		 	
	
	}
	
}

public function insertsalary()
{
	if (isset($_POST['submitsalary'])) {

		if (empty($_POST["month"])) {
			$this->error .= '<a class="text-danger">Please Select Month</a><br>';
		}
		if (empty($_POST["salary"])) {
			$this->error .= '<a class="text-danger">Please Enter Salary</a><br>';
		}

		$id = $_POST['id'];
		$month = $_POST['month'];
		$salary = $_POST['salary'];

		$data = array(
			"id"=>$id,"month"=>$month,"salary"=>$salary
		);

		if ($this->error == NULL) {

			$chk= $this->model->insertalldata('employee_salary',$data); 
			
		}
		if ($chk && $this->error == NULL) {
			$_SESSION['insertsuccess'] = "<center>Salary Inserted <b>Successfully !</b></center>";
		}
		
	}
}

public function selectsalary()
{

	$id = ucfirst($_SESSION["id"]);
	$empdata = $this->model->joinsalary('employee_salary','employee_information',$id);

	return $empdata;
}

public function selsalid()
{

	if (isset($_GET['edtsal'])) {
		
		$id = $_GET['edtsal'];

		$salid=$this->model->selectsalary('employee_salary',$id);

		return $salid;
	}
	
}
 public function deletesalary()
 {
	 if (isset($_GET['delsal'])) {
		$id1 = $_GET['delsal']; 
		$id = array( "salary_id" => $id1);
		
		if ($id) {
			
			$this->model->deldata('employee_salary', $id);

			echo "<script> window.location='http://localhost/EmployeeManagement/Salary';</script>";
			echo '<meta http-equiv="refresh" content="0;URL=http://localhost/EmployeeManagement/Salary">';

			$_SESSION['delete'] = "<center>Salary Deleted <b>Successfully !</b></center>";

		}
		
	 }
  }
public function updatesalary()
{
	
if (isset($_POST['updsalary'])) {

	
	if (empty($_POST["salary"])) {
		$this->error .= '<a class="text-danger">Please Enter Salary</a><br>';
	}

	$salary = $_POST['salary'];
	$id = $_POST['id'];

	
	if ($this->error == NULL) {
		
		$this->model->updsalary('employee_salary',$salary,$id);

			echo "<script> window.location='http://localhost/EmployeeManagement/Salary';</script>";
				echo '<meta http-equiv="refresh" content="0;URL=http://localhost/EmployeeManagement/Salary">';
				$_SESSION['update'] = "<center>Employee Salary Updated Successfully !</center>";
	}
		

}

}
public function checkmail()
{



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







}
public function salarypdf()
{


	$dompdf = new Dompdf();


	if (isset($_POST['pdf'])) {


		ob_start();
		include 'salaryview.php';
		$content = ob_get_clean();

		$dompdf->loadHtml($content);
		
		$dompdf->setPaper('A4', 'portrait'); 
		 
		$dompdf->render(); 
		
		$dompdf->stream();


	}

	
}
  

	public function logout()
	{

		if (isset($_GET["logout"])) {

			$lg = $this->model->logout();
			if ($lg) {
				session_start();
			
				echo "<script> window.location='http://localhost/EmployeeManagement/Login';</script>";
				echo '<meta http-equiv="refresh" content="0;URL=http://localhost/EmployeeManagement/Login">';

				$_SESSION['logt'] = "<center>Logout Successfully !</center>";

			}
		}
	}
}
$obj = new controller($model);

