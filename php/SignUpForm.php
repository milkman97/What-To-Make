<?php 
    if(isset($_POST['SignUp'])){
        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $username = $_POST['Username1'];
        $email = $_POST['Email1'];
        $password1 = $_POST['Password1'];
        
        echo $password1;
        
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
            
        }
        $sql = "INSERT INTO SignUp (First_Name, Last_Name, User_Name, Email, Password) VALUES ('$firstname', '$lastname', '$username', '$email', '$password1');";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }



        mysqli_close($conn);
    }
    
?>