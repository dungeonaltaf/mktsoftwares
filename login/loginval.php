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
   

    
$email= mysqli_real_escape_string($conn,$_POST['email1']); 
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)// Fetching Values from URL.

$password1 = mysqli_real_escape_string($conn, $_POST['password1']);


 
    
	    $sqlone = "SELECT dynamicsalt FROM Signup where ( email = '$email' or username = '$email' ) AND active = '1'";
	   
        if ($resultone = mysqli_query($conn,$sqlone))
        {
       
      
           $dataone = mysqli_num_rows($resultone);
          
         }



         if ($dataone > 0) 
         {  
             // output data of each row
              while($rowone = $resultone->fetch_assoc()) 
             {
    	         $staticsalt = " Altaf@*(##240";
                 $dynamicsalt = $rowone["dynamicsalt"];
                 $supersalt = $staticsalt.$dynamicsalt;
                 $password1=md5($password1.$supersalt);
             }
          } 

         else 
         {

	     
         }

         
        // Matching user input email and password with stored email and password in database.
        $sql = "SELECT * FROM Signup WHERE ( email='$email' or username='$email') AND psw='$password1'";
       
        if ($result= mysqli_query($conn,$sql))
        {

            $data = mysqli_num_rows($result);
         
            if($data==1)
           {   
               function randomString($length) 
               {
                 $str = "";
                 $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
                 $max = count($characters) - 1;
                 for ($i = 0; $i < $length; $i++) 
                 {
                   $rand = mt_rand(0, $max);
                   $str .= $characters[$rand];
                 }
                return $str;
            }

             $id = randomString(32);  
             $_SESSION["id"]=$id;  
             $_SESSION["email"] = $email;
             $_SESSION["loggedIn"] = 1;
            // header("Location:../profile/profile.php?id=".$id."");

             echo "Successfully Logged in...";

            // header("Location:../profile/profile.php?id=".$id."");

              exit(success);
           }
            else
           {
            echo "Email or Password is wrong...!!!!";
            exit(failure);
           }

        }
    

mysql_close ($conn); // Connection Closed.
?>
