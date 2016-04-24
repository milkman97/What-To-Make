<?php 
    if(isset($_POST['SignUp'])){
        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $username = $_POST['Username1'];
        $email = $_POST['Email1'];
        $password = $_POST['Password1'];
        echo $firstname;
        
        
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
        }else{
            echo "stuff";
            echo $firstname;
        }



        mysqli_close($conn);
    }
    
?>