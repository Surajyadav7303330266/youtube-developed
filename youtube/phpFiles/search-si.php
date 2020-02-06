<?php 
session_start();
include("connection.php");//to create connection
include("noOfVideos.php");//to get no. of videos
include("collectdata.php");
error_reporting(0);//to remove warnings
//for user
$userProfileInfo = $_SESSION['eMail'];
if($userProfileInfo)
{}
else
{
    header('location:youtube-unSignIn.php');
}
$query = "select * from users where email='$userProfileInfo'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../css/youtube-unsignIn.css"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo "YouTube (".$total.")"; ?></title>
    <link rel="icon" type="image/jpg" href="../images/youtubeLogo.png"/>
    <style>
    #body{z-index: 2;position: relative;}
    #menu{z-index: 1;opacity: 0;position: fixed;}
    #mainmenuholder{width:100%;height:100%;overflow:scroll;}
    #mainmenuitem{background-color: white;padding:10px 0px;height:50px;}
    #mainmenuitem #img{color: gray;font-size:30px;border-radius: 50%;
        margin:0 20px;height: 50px;width:50px;float: left;}
    #mainmenuitem #text{font-size: 20px;color: gray;float: left;}
    </style>
</head>
<body>
<table id="menu" width="100%" style="height:650px;">
        <tr>
            <td width="25%" valign="top" style="background-color:white;">
                <div style="padding:20px 20px;height: 80px;">
                    <i class="fa fa-bars" onclick="hideMenu()" style="float: left;font-size:30px;border-radius:50%;border:0px;color:black"></i>
                    <img src="../images/youtube.png" style="height: 45px;width:90px;margin-left:20px;float: left;"/>
                </div>
                <div id="mainmenuholder">
                    <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-home" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Home</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-fire" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Trending</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-file" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Subscription</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-indent" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Library</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-history" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">History</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-clock-o" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Watch Later</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-thumbs-up" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Like</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-align-justify" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Suraj Yadav</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-chevron-down" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Show More</div>
                </div>
                <br>
                <h5 style="margin-left:10px">Creators</h5><br>
                <!--------------------------------------------->
                <?php 
            do
{
    echo    "
    <a href='whenuserclickchannel.php?uid=$uresult[userid]'>
        <div id='mainmenuitem'>
            <div id='img'>
                <img src='".$uresult['photo']."' style='height:50px;width:50px;border-radius:50%'>
            </div>
        <div id='text'>".$uresult['firstname']."</div>
    </a><br><br>
            ";
        } while($uresult = mysqli_fetch_assoc($udata))
        
?>
                <!--------------------------------------------->
               <br>
                <h5 style="margin-left:10px">More From YouTube</h5><br>
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-youtube-play" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">YT Premium</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-film" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">YT Movies</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-gamepad" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">YT Games</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-wifi" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Live</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-gear" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Setting</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-flag" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Report History</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-question-circle" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Help</div>
                </div>
                <!--------------------------------------------->
                <div id="mainmenuitem">
                    <div id="img">
                    <i class="fa fa-twitch" style="float: left;font-size:30px;border-radius:50%;border:0px;color:gray"></i>
                    </div>
                    <div id="text">Send Feedback</div>
                </div>
                <!--------------------------------------------->
                </div>
            </td>
            <td width="75%" valign="top" style="background-color:rgba(0,0,0,0.5);"
            onclick="hideMenu()">
            </td>
        </tr>
    </table>
            <table id="body">
        <tr><!--topbar-->
            <td colspan="2">
<div class="row" id="topbar">
    <div class="col-sm-1">
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </div>
    <div class="col-sm-1" title="YouTube Home">
        <a href="youtube-signIn.php">
        <img id="mainLogo" src="../images/youtube.png"/>
        </a>
        <span id="in">IN</span>
    </div>
    <div class="col-sm-6">
    <form method="POST" action="search-si.php">
            <input type="text" name="searchText" 
            placeholder="SEARCH" style="height:30px;margin-left: 20px;width: 380px;padding:2px 5px;font-size:18px;"><input title="search" name="search" type="submit" value=">" style="width:60px;height:30px;border:1px solid grey;color:grey;cursor: pointer;margin-left:0px">
        </form>
    </div>
    <a href="videoUpload.php"><div class="col-sm-1" title="create a post">
        <i class="fa fa-video-camera" style="color:black"></i>
    </div></a>
    <div class="col-sm-1" title="YouTube Apps">
        <i class="fa fa-th"></i>
    </div>
    <div class="col-sm-1" title="notification">
        <i class="fa fa-bell"></i>
    </div>
    <div class="col-sm-1" title="<?php echo $result['email']; ?>" id="userStyle"
    onclick="showusermenu()">
        <img src="<?php echo $result['photo']; ?>" style="height:30px;width:30px;border-radius:50%;">
</div>
<div style="border:1px solid black;position:fixed;margin-left:850px;
margin-top:40px;z-index:-1;opacity:0" id="usermenu">
        <button style="padding:10px 15px;background:white;border:0px;width:100px"
        onclick="usermenuhide()">
            <span style="color:grey">Close</span>
        </button><br>
        <button style="padding:10px 15px;background:white;border:0px;width:100px"
        onclick="gotochannel()">
            <span style="color:grey">Channel</span>
        </button><br>
        <a href="logout.php">
        <button style="padding:10px 15px;background:white;border:0px;width:100px">
            <span style="color:grey">Sign Out</span>
        </button></a>
    </div>
            </td>
        </tr><!--endtopbar-->
        <tr><!--leftIcon-->
            <td width="7%" valign="top"><!--leftIcon-->
<div class="menuIcon" title="Home">
    <i class="fa fa-home"></i><br>
        <span>Home</span>
</div>
<div class="menuIcon" title="Trending">
    <i class="fa fa-fire"></i><br>
        <span>Trending</span>
</div>
<div class="menuIcon" title="Subscription">
    <i class="fa fa-address-book"></i><br>
        <span>Subscription</span>
</div>
<div class="menuIcon" title="Library">
    <i class="fa fa-folder-open"></i><br>
        <span>Library</span>
</div>
<div class="menuIcon" title="History">
    <i class="fa fa-history"></i><br>
        <span>History</span>
</div>
            </td><!--endleftIcon-->
            <td width="93%" valign="top"><!--bannerAd-->
    <div class="row">
        <br>
        <?php
$conn = mysqli_connect("localhost", "root", "","youtube");
//mysql_select_db("shikin", $conn);
//search code
//error_reporting(0);
if($_REQUEST['search']){
$name = $_POST['searchText'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM videos WHERE videoname LIKE '%$name%'";
	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
    echo 
    "
    <a href='videoOnClickPage_si.php?videoid=$row[videoid]'>
    <div class='col-sm-12'>
    <table style='width:100%;'>
    <tr>
        <td width='30%' valign='top'>
            <video controls preload style='height: 170px;width:100%;object-fit: cover;'>
                <source src='".$row['video']."'>
            </video>
        </td>
        <td style='width:40px;padding:0px 10px 0px 15px' valign='top'>
            <img src='".$row['photo']."'
                style='height:40px;width:40px;border-radius:50%;margin-top:10px'>
        </td>
        <td valign='top' style='padding:10px 0px'>
            <p style='font-weight: bold;text-decoration:none;color:black;'>".$row['videoname']."</p>
            <p style='text-decoration:none;color:black;'>".$row['username']."</p>
            <p style='font-size:15px;color:grey'>Likes ".$row['vlike']." . Subscribe ".$row['subscribe']."
            <br>Date : ".$row['vudate']."</p>
        </td>
    </tr>
</table>
</div>
</a>
    ";
	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}
?>
    </div>
    </td>
        </tr>
    </table>
    <script>
    function showMenu()
    {
        document.getElementById('body').style.zIndex="1";
        document.getElementById('menu').style.zIndex="2";
        document.getElementById('menu').style.opacity="1";
    }
    function hideMenu()
    {
        document.getElementById('body').style.zIndex="2";
        document.getElementById('menu').style.zIndex="1";
        document.getElementById('menu').style.opacity="0";
    }
    function showusermenu()
    {
        document.getElementById('usermenu').style.zIndex="3";
        document.getElementById('usermenu').style.opacity="1";
    }
    function usermenuhide()
    {
        document.getElementById('usermenu').style.zIndex="-1";
        document.getElementById('usermenu').style.opacity="0";
    }
    function gotochannel()
    {
        location.replace("http://localhost/youtube/phpfiles/channel-si.php");
    }
    </script>
</body>
</html>