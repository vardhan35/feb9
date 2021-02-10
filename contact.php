<?php
    if(isset($_POST['name'])){
    
        $server = "localhost";
        $username = "root";
        $password = "";
    
    
        $conn = mysqli_connect($server,$username,$password);
        if(!$conn){
            die("connection failed" .mysqli_connect_error());
        }
        
        //echo "succeed";
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $textarea = $_POST['textarea'];
    
    
        $sql ="INSERT INTO `feb9`.`nes` (`name`, `email`, `textarea`, `date`) 
        VALUES ('$name', '$email', '$textarea', current_timestamp());";
     
    
        if($conn->query($sql) == true){
            echo "successfully inserted";
        }
        else{
            echo "ERROR: $sql <br> $conn->error";
        }
    
        $conn ->close();
    }
    ?>