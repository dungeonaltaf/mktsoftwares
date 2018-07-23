<?php
$servername = "localhost";
$username = "root";
$password = "asd@123";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
    
      // Check connection
       if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
         } 
            echo "Connected successfully";
            echo "<br>";

  //Checks for the values in url by get method
    if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
   { 
  // Prevent mysql injection    
      	$email = mysqli_real_escape_string($conn, $_GET['email']);
      	$hash = mysqli_real_escape_string($conn, $_GET['hash']);
      	echo "$email";
      	echo "<br>";
        echo "$hash";
        echo "<br>";
  //Select email and its corresponding correct hash      
      	$sql="SELECT email, hash  FROM Signup Where email = '$email' AND hash = '$hash'";
         

           if ($result=mysqli_query($conn,$sql))
          {
               // Return the number of rows in result set
               $rowcount=mysqli_num_rows($result);
               echo "$rowcount";
               echo "<br>";
          }
    

          if ($rowcount>0)
          {    


          	   // checks for unconfirmed email and set active status to 1
               $sqlquery="UPDATE Signup SET active='1' Where email='$email' AND hash = '$hash' AND active='0'";

              
           
               if ($chkactive=mysqli_query($conn,$sqlquery))
                {
                  
  	              echo "Verification Successful";

                 }

           
          }

            else 
       	    echo "Something wrong"; 
 
    }


?>
