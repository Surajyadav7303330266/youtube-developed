<?php 
session_start();
include("connection.php");//to create connection
include("noOfVideos.php");//to get no. of videos
error_reporting(0);//to remove warnings
include("collectdata.php");
//for user
$userProfileInfo = $_SESSION['eMail'];
$query = "select * from users where email='$userProfileInfo'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
//for video
$userid=$result['userid'];
$ucquery = "select * from videos where userid='$userid'";
$ucdata = mysqli_query($conn,$ucquery);
$ucresult = mysqli_fetch_assoc($ucdata);
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
    <div class="col-sm-12">
<!---------------------bannerAd------------------>
<div class="bannerAd">
    <img src="../images/channel.jpg" style="height: 250px;width:100%;">
</div>
<br>
<table style="width:100%;height:100px">
            <tr>
                <td valign="top" width="100px">
                    <img src="<?php echo $result["photo"]; ?>" style="height:80px;
                    width:80px;border-radius:50%">
                </td>
                <td valign="top">
                    <h1><?php echo $result["firstname"]; ?></h1>
                </td>
                <td>
                    <button style="height:50px;padding:10px 15px;border:0px;
                    border-radius:5px;background:red;float:right">
                        <h3 style="color:white">SUBSCRIBE</h3>
                    </button>
                </td>
            </tr>
            </table>
<!---------------------bannerAd end------------------>
    </div>
</div><!--endbannerAd-->
<!-----------------------------------video display-->
                <div class="row">
                <?php 
            do
{
    echo   "
    <a href='videoOnClickPage_si.php?videoid=$ucresult[videoid]'>
    <div class='col-sm-4'>
        <table style='width:280px;'>
            <tr>
                <td colspan='2'>
                    <video controls preload style='height: 170px;width:100%;object-fit: cover;'>
                        <source src='".$ucresult['video']."'>
                    </video>
                </td>
            </tr>
            <tr>
                <td valign='top' style='height: 40px;width:40px;'>   
                <img src='".$ucresult['photo']."' title='".$ucresult['email']."'
                    style='height:40px;width:40px;border-radius:50%;'>
                </td>
                <td style='width:180px;'>
                    <p style='font-weight: bold;text-decoration:none;color:black;'>".$ucresult['videoname']."</p>
                    <p style='text-decoration:none;color:black;'>".$ucresult['username']."</p>
                    <p style='font-size:12px;color:grey'>Likes ".$ucresult['vlike']." . Subscribe ".$ucresult['subscribe']."
                    <br>Date : ".$ucresult['vudate']."
                    </p>
                </td>
            </tr>
        </table>
    </div>
    </a>
            ";
        } while($ucresult = mysqli_fetch_assoc($ucdata))
        
?>

                </div>
<!-----------------------------------video display-->
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