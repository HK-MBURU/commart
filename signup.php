<?php
require('connecting.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    $sql="INSERT INTO user_details(email,pwd) VALUES('$email','$pwd')";
    $query=mysqli_query($con,$sql);
    if($query){
        echo"Sign Up succesful";
    }
    else{
        echo "Error in signup".mysqli_error($con);
    }
}

mysqli_close($con);

?>