<!DOCTYPE php>
<html>
    <head>
        <title>Sign Up Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <div class="sign-up-form">
            <h1>Sign Up <br> COMMART WEB</h1>
            <img src="images/profile.png" alt="">
            <form method="POST" action="">
                <input type="email" class="input-box" placeholder="Your Email" name="email"><br>
                <input type="password" class="input-box" placeholder="Your Password" name="password"> <br>
                <a href="termsAndConditions.php"><p><span><input type="checkbox" name="agree"></span>I agree to the terms of services</p></a>
                <button name="submit" type="submit" class="signup-btn"> Sign Up</button>
                <hr>
                <a href="login.php"><p>Do you have an account? Sign in</p></a>
                
            </form>
           <div style="color: red;">
           <?php
require('connecting.php');
if(isset($_POST['agree'])){
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $pwd=$_POST['password'];
        $sql="INSERT INTO user_details(email,pwd) VALUES('$email','$pwd')";
        $query=mysqli_query($con,$sql);
        if($query){
           // echo'Sign Up succesful <button class="signup-btn"><a href="homepage.php" style="color:red;" >Proceed </a></button>';
           header("location: homepage.php");
            
        }
        else{
            echo "Error in signup".mysqli_error($con);
        }
    }
    
    mysqli_close($con);
    
}
else{
    echo'agree with terms and conditions first';
}

?>
           </div>
        </div>
       
    </body>
</html>
