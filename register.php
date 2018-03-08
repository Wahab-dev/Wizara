<!-- 
	Author  : Ashika Jahir
	Project :School Students Meet 2018

	Module / Page  : Regsiter Page
	Description	   : This Page gets the details from the user enter into db.
-->




<?php


/*
*
*  Class    		: Register (Base Class)
*  Description 		: It creates an object every time a user register and do the page functionality
*  
*/
echo "HAi";

if (!empty($_POST['submit']))
			 {
				$name = $_POST['name'];
				$gender = $_POST['gender'];
				$age = $_POST['age'];
				$email = $_POST['email'];
				$place = $_POST['place'];
				$contact = $_POST['conatct'];
				$college = $_POST['college'];

			 }
echo $name;

class Register
	{
		public $db = '';

		//Constructor that performs db connectivity 

		public function __construct() 
		{	
			//connecting to db - sms_wizara
			$this->db = new PDO("mysql:host=localhost;dbname=sms_wizara","ashi", "ashikajahir");
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
		}

		public function register_user() 
		{

			if (!empty($_POST['submit']))
			 {
				$name = $_POST['name'];
				$gender = $_POST['gender'];
				$age = $_POST['age'];
				$email = $_POST['email'];
				$place = $_POST['place'];
				$contact = $_POST['conatct'];
				$college = $_POST['college'];

			 }

			 try 
			{
				//creates the PDO statement
				$queryStr = $this->db->prepare("INSERT INTO register_details (name,gender,age,email,place,contact,college)VALUES (:name,:gender,:age,:email,:place,:contact,:college)"); 

				//executes the insert query
				$queryStr->execute(array('name' => $name,'gender' => $gender,'age' => $age, 'email' => $email,'place' => $place, 'contact' => $contact, 'college'=>$college));

				
				echo "New User.....Successfully Registered";
				

				
			} 
			catch (PDOException $e) 
			{
				echo $e->getMessage();
			}



		}
	}

	//$new_user = new Register();//Creates an object of class Register everytime a new user register.*/
	//$new_user->register_user();

			








	
	

 ?>