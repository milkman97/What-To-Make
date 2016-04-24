<?php 
    if(isset($_POST['SignUp'])){
        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $username = $_POST['Username1'];
        $email = $_POST['Email1'];
        $password1 = $_POST['Password1'];
        
        if($firstname === "" || $lastname === "" || username === "" || email === "" || $password1 === ""){
            echo '<script type="text/javascript">
                        alert("Hey one of your input fields was blank, could you please refill out the form so you can be apart of our community?"); 
                        window.location.href = "http://localhost:8888/FoodProject/index.php";</script>';
        }elseif($firstname === " " || $lastname === " " || username === " " || email === " " || $password1 === " "){
            echo '<script type="text/javascript">
                        alert("Hey one of your input fields was blank, could you please refill out the form so you can be apart of our community?"); 
                        window.location.href = "http://localhost:8888/FoodProject/index.php";</script>';
        }else{
            $user = 'root';
            $password = 'root';
            $db = 'Users';
            $host = 'localhost';
            $port = 8889;

            // Create connection
            $conn = new mysqli("$host:$port", $user, $password, $db);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO SignUp (First_Name, Last_Name, User_Name, Email, Password) VALUES ('$firstname', '$lastname', '$username', '$email', '$password1');";

            if ($conn->query($sql) === TRUE) {

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            echo '<script type="text/javascript">
                        alert("Thank You for your time and enjoy the delicous recipies!"); 
                        window.location.href = "http://localhost:8888/FoodProject/index.php";</script>';

            mysqli_close($conn);
        
        }
        
    }
    
?>