<?php
include 'config.php';
if(isset($_POST['submit']))
{    
    $name= $_POST['cname']; 
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message=$_POST['message'];
    $sql = "INSERT INTO contact (name,email,subject,message)
    VALUES ('$name','$email','$subject','$message')";
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Message send successfully');
         window.location='./index.php';
        </script>";    
} else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
     mysqli_close($conn);
}
?>