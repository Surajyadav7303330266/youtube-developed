<?php /*it is
         1. taking values from user
         2. storing it in database
         3. also saving user img in userImage folder
         4. sending user on login page after create account btn click*/
include("connection.php");
error_reporting(0);
?>
<html>
<head>
    <link rel="icon" type="images/png" href="../images/googleLogo.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../css/newAccount.css"/>
    <title>Google</title>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img id="google" src="../images/google.png"><br>
                <span id="h1">Create your Google Account</span><br>
                <span id="h2">Continue to YouTube</span>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input id="text" type="text" name="firstname" placeholder="First Name"><br><br>
                    <input id="text" type="text" name="lastname" placeholder="Last Name"><br><br>
                    <span id="pi">Choose Profile Image : </span><input id="file" type="file" name="userimg"><br><br>
                    <input id="text" type="text" name="email" placeholder="Your Email Address"><br><br>
                    <input id="text" type="text" name="password" placeholder="New Password"><br><br>
                    <a href="../phpFiles/logIn.php">sign in instead</a>
                    <input id="button" type="submit" name="submit" value="Create Account">
                </form>
                
            </div>
            <div class="col-sm-6">
                <img id="ca" src="../images/createaccount.png">
            </div>
        </div>
    </div>
<?php
if($_POST['submit'])
{
    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $em = $_POST['email'];  //e-mail
    $pw = $_POST['password'];  //password
    $nadate = date("l jS \of F Y h:i:s A");

    $filename = $_FILES["userimg"]["name"];
    $temperaryname = $_FILES["userimg"]["tmp_name"];
    $folder = "../userImages/".$filename;
    move_uploaded_file($temperaryname,$folder);

    if($fn!="" && $ln!="" && $em!="" && $pw!="" && $filename!="")
    {
        $query = "insert into users values (NULL,'$fn','$ln','$em','$pw','$folder','$nadate');";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            header('location:login.php');
        }
        else
        {
            echo "try again with new email or phone number";
        }
    }
    else
    {
        echo "all fields are required";
    }
}
?>
    </body>
</html>
