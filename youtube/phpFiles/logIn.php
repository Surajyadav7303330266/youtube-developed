 <?php  /* to login with email and password 
        (1.it is checking email and password) 
         2.sending user to youtube-signin with email*/
session_start();
include("connection.php");//to create connection
error_reporting(0);//to remove warnings
?>
<html>
    <head>
    <link rel="icon" type="images/png" href="../images/googleLogo.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../css/login.css"/>
    <title>Google</title>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <center>
                    <div id="formBase">
                        <img id="google" src="../images/google.png"/>
                        <form action="" method="POST">
                            <input type="text" name="email" id="text"    placeholder="E-mail" value=""><br><br>
                            <input type="password" name="password" id="text" placeholder="Password"      value=""><br><br>
                            <a id="nA" href="newAccount.php">Create Account Insted</a>
                            <input id="button" type="submit" name="submit" value="Sign In"><br>
                            <hr color="grey">
                            <img id="bi" src="../images/loginAccount.png"/>
                        </form>
                    </div>
                </center>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $em = $_POST['email'];
    $pw = $_POST['password'];
    $query = "select * from users where email='$em' && password='$pw'";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    //echo $total;
    if($total)
    {
        $_SESSION['eMail']=$em;
        header('location:youtube-signIn.php');
    }
    else
    {
        echo "wrong email or password";
    }
}
?>