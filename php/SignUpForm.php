<?php 
    if(isset($_POST['SignUp'])){
        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $username1 = $_POST['Username1'];
        $email = $_POST['Email1'];
        $password1 = $_POST['Password1'];

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
        $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
        $username1 = filter_var($username1, FILTER_SANITIZE_STRING);

        if($firstname === "" || $lastname === "" || $username1 === "" || $email === "" || $password1 === ""){
          
            echo '<script type="text/javascript">
                        alert("Hey one of your input fields was blank, could you please refill out the form so you can be apart of our community?"); 
                        window.location.href = window.history.go(-1);</script>';
        }elseif($firstname === " " || $lastname === " " || $username1 === " " || $email === " " || $password1 === " "){
            
            echo '<script type="text/javascript">
                        alert("Hey one of your input fields was blank, could you please refill out the form so you can be apart of our community?"); 
                        window.location.href = window.history.go(-1);</script>';
        }else{
             
        $servername = "mysql5.000webhost.com";
        $username = "a8454464_test";
        
        $dbname = "a8454464_test";

           

            // Create connection
              $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
                $PossibleUserName = mysqli_query($conn, "SELECT * FROM SignUp WHERE User_Name ='$username1'");
                $items_found = mysqli_num_rows($PossibleUserName); 
            
                if($items_found>0){
                    echo '<script type="text/javascript">
                            alert("Hey could you select another username please?"); 
                            window.location.href = window.history.go(-1);</script>'; 
                }else{
                    $password1 = md5($password1);
                    $sql = "INSERT INTO SignUp (First_Name, Last_Name, User_Name, Email, Password) VALUES ('$firstname', '$lastname', '$username1', '$email', '$password1');";

                if ($conn->query($sql) === TRUE) {

                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                echo '<script type="text/javascript">
                            alert("Thank You for your time and enjoy the delicous recipies!"); 
                            window.location.href = window.history.go(-1);</script>';

                mysqli_close($conn);
            }

            
        }
        
    }
    
?>	