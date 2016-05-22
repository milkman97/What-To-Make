<?php 
session_start();
        if(isset($_POST['Login'])){
        session_start(); 
        $username2 = $_POST['Username'];
        $password2 = $_POST['Password'];
        $password2 = md5($password2);
        
            
        $servername = "mysql5.000webhost.com";
        $username = "a8454464_test";
        $password = "dogdog97";
        $dbname = "a8454464_test";

           

            // Create connection
              $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
                $PossibleUser = mysqli_query($conn, "SELECT * FROM SignUp WHERE User_Name ='$username2' AND Password ='$password2'");
                
                $items_found = mysqli_num_rows($PossibleUser); 
                
               if($items_found>0){
                    
                    $_SESSION['user_name'] = $username2;
                   $ingridentslist = $_COOKIE['ingredients'];
                  
                   
                   $sql1 = "UPDATE SignUp SET Ingredients='$ingridentslist' WHERE User_Name='$username2'";
                   
                   $retval = mysqli_query($conn, $sql1);
                   
                   if(! $retval )
                   {
                        die('Could not update data: ' . mysql_error());
                   }
                    
                    header ("Location: /index.php");
                }else{
                    echo '<script type="text/javascript">
                        alert("Hey we couldn\'t find any users with that Username and Password combination, please check your inputs and try again. If still no luck, contact us :) "); 
                        window.location.href = window.history.go(-1);</script>';
               }

      }
?>