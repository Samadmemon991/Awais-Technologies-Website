<!DOCTYPE html>
<?php

include 'dbcon.php';    


session_start();
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['signup'])){
       $username = $_POST["user"];
        $password = $_POST["pass"];
        $email = $_POST["email"];
        $credit = $_POST["credit"];
        $cvv = $_POST["cvv"];


        $query = "insert into users(username,password,email,credit,cvv) values('$username','$password','$email','$credit','$cvv')";
        // echo ("SELECT * FROM users where username='$username' and password='$password'");
        $result = mysqli_query($conn,$query);
        
        if($result){
            header("Location:http://localhost/17SW109%20lab%2010%20task%201/17SW109%20lab%2010%20task%201/login.php");
        }
        else{
            
        echo "<script>alert('Some problem occurred, please try again.');</script>";

    }
        


    
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/logInSignup.css">
</head>

<body>
    <header>
        <div id="logo">
        <img src="images/logoa.png" style="margin-left: -60px" alt="logo">
        </div>
        <h1>User Registration</h1>
    </header>
    <section>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            <br>
            <input type="text" placeholder="Username" name="user" id="top" required>

            <input type="email" placeholder="Email" name="email" required>

            <input type="password" placeholder="Password" name="pass" id="pass" required>

  
                    <input type="tel" placeholder="Phone no " name="phone"
                     style="border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;" required>
             

            <br>
            <br>

            <input type="submit" value="Sign up" name="signup">
        </form>
        <p>Already have an account?<a href="login.php" > Log in</a></p>
    </section>
</body>

</html>

