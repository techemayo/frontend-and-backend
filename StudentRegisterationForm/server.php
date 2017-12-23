<?php
        $connect = mysqli_connect("localhost","root","","nextech");
        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        } 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $s_email=$_POST['email'];
        $c_number=$_POST['contactnumber'];
        $r_number=$_POST['rollnumber'];
        $dep=$_POST['department'];
        $sem=$_POST['semester'];
        $s_psd=md5($_POST['password']);
        $sql = "INSERT INTO studentregistrationdetails(firstname, lastname, email, contactnumber, rollnumber, department, semester, password)
        VALUES('$fname','$lname','$s_email','$c_number','$r_number','$dep','$sem','$s_psd')";
    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }       
    }
    $connect->close(); 


?>
