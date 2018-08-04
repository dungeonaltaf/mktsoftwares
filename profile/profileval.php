<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "asd@123";
$dbname = "users";
 



$conn = new mysqli($servername, $username, $password, $dbname);
    
  if ($conn->connect_error) 
   {
     die("Connection failed: " . $conn->connect_error);
   }
   echo "Connected Successfully";
   echo"<br>";


$data = $_POST['data'];
//$about = "shakalakaboom";
$email = $_SESSION["email"];

$id = $_POST['id'];
//$email = "this is not love";
$sql1 = "SELECT email from sample where email = '$email'";
$insert1 = mysqli_query($conn,$sql1);
$data = mysqli_num_rows($insert1);
echo $data;
echo "<br>";
echo $id;
echo $email;
echo "sql1";
echo"<br>";

echo "insert1";
echo "<br>";

     
     echo $data;
     echo "<br>";

   

   if ($data >=1)
   {
     

     switch ($id)
   {

	  case 'about':
	 {
        
        $sql2 = "UPDATE sample set about = '$about' where email = '$email'";
        $insert2 = mysqli_query($conn,$sql2);

       // $data2 = mysqli_num_rows($insert2);
        //echo $data2;

        //if ($data2>=1)
        //{
         //  echo "This is update section";
          // echo "Success";

        // }
      }
      
        



         break;

	}
	

	//case 'about':
	//{

	//}
	//break;

	//case 'about':
	//{

	//}
	//break;

	//case 'about':
	//{

	//}
	//break;

	//case 'about':
	//{

	//}
	//break;
//}
       
}
 
       else
      {
          $sql4 = "INSERT INTO sample (email,about) select email , '$about' from Signup where email = '$email'";  
          echo"hello";
          if($conn->query($sql4) === TRUE)
        {
           echo " The user has been registered";  //these echoes are for testing purposes
           echo "<br>";

         }
         else
         {
              echo "unsuccessful";

         }
       }

?>

//insert into sample (email,about) select email , 'this is pochinki' from Signup //where email = '$email';
.
