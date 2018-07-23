<?php
  
$servername = "localhost";
$username = "root";
$password = "asd@123";
$dbname = "users";
$staticsalt = " Altaf@*(##240"; // Use your own static salt
$dynamicsalt = "";  //dynamic salt for making rainbow table decryption impossible
$hash = "";


       // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
      // Check connection
   if ($conn->connect_error) 
   {
        die("Connection failed: " . $conn->connect_error);
   } 
      echo "Connected successfully";
      echo "<br>";


        
          // mysqli_real_escape_string for mysql injection prevention
          //this function need the charset of database to prevent bug thats why uses $conn value
        // future release of this product may cause bug in this area 

      $fname = mysqli_real_escape_string($conn, $_POST['fname']);
      $lname = mysqli_real_escape_string($conn, $_POST['lname']);
      $newuser = mysqli_real_escape_string($conn, $_POST['username']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $psw = mysqli_real_escape_string($conn, $_POST['psw']);
      


  

        $sqlquerynew = "SELECT email, username  FROM Signup Where email = '$email'"; 
        
// checking number of similar rows for the stated query
         if ($chkexist=mysqli_query($conn,$sqlquerynew))
        {
             $rowcount=mysqli_num_rows($chkexist);

        }
         

// if there is a value gretaer than 0 then the account exist and message is displayed there should be a redireaction to login page
         if ($rowcount>0)
          {

            echo "You are already registered with this email.We have sent you a confirmation link at your email.";
          }

          else 
        {   


      //This function creates a random string of length characters 
      function randomString($length) {
      $str = "";
      $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
      $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
        }
      return $str;
      }

      // this generates a dynamic salt for each user so rthat hacking of database doesnt yield problem

        $dynamicsalt = randomString(6);
        $hash = randomString(32);

        echo "$hash";
        echo "$dynamicsalt"; 
        echo "<br>";
        $supersalt = $staticsalt.$dynamicsalt;
        echo "$supersalt"; 
        // static salt + dynamic salt
        echo "<br>";

        $psw=md5($psw.$supersalt); // For encryption.
      

       // this creates entry for new user
      $sql = "INSERT INTO Signup (fname,lname,username,email,psw,dynamicsalt,hash) VALUES ('$fname','$lname','$newuser','$email','$psw', '$dynamicsalt','$hash')";

        if($conn->query($sql) === TRUE)
        {
           echo " The user has been registered";
           echo "<br>";

         }
         else 
        {
          echo "Error:". $sql . "<br>" . $conn->error;
         }
             echo "<a href=$url>$site_title</a>";

          // This part of code verify the email of the user
          $to = $email; // Send email to our user
          $subject = 'Signup | Verification';
          $message = ' Hey '.'$fname'.'$lname'.
            ' Thanks for signing up!
             Nurture Skills is one of the best Tutorial Service in India.We are looking forward to have a great time helping you with our services.
             PLease click this link to activate your account:
             http://localhost/verify.php?email='.$email.'&hash='.$hash.'';


                $header = 'From:nonreply@websiteyouwilluse.com'."\r\n";
                mail($to,$subject,$message,$header);
                //for testing purpose of email verification
                $url = "http://localhost/verify/verify.php?email=".$email."&hash=".$hash."";
                $site_title = "Redirects you for email Verification";        
                echo "<a href=$url>$site_title</a>";


               }



$conn->close();





?>
