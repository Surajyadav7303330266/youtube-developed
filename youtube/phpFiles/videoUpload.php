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
<html>
<head>
    <link rel="icon" type="images/png" href="../images/youtubeLogo.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../css/videoUpload.css"/>
    <link rel="stylesheet" type="text/css" href="../css/youtube-unsignIn.css"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo "YouTube (".$total.")"; ?></title>
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
    <a href='channel-si.php?uid=$uresult[uderid]'>
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
            <td width="75%" valign="top" style="background-color:rgba(0,0,0,0.5);
            "onclick="hideMenu()">
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
        <a href="youtube-SignIn.php">
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
    <div class="col-sm-1" title="create a post">
    <i class="fa fa-video-camera"></i>
    </div>
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
            <td width="93%"><!--bannerAd-->
<div class="row">
    <div class="col-sm-12">
<!--video display-->
<!---------------------video1------------------>
 <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <center>
                    <div id="base">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <img id="yt" src="../images/youtube.png"><br>
                            <span id="pi">Choose Video To Upload : </span>
                            <input id="file" type="file" name="video"><br><br>
                            <video preload controls>
                                <source src="<?php echo $folder ?>">
                            </video><br><br>
                            <input id="vn" name="videoname" type="text" placeholder="Video Name"><br><br>
                            
                    </div>
                </center>
            </div>
            <div class="col-sm-6">
                <h3 style="margin-top:100px;">Give Your Video A Beautiful Discription Here : </h3><br><br>
                <textarea id="ta" name="videodiscription" placeholder="Video Discription"></textarea><br><br>
                <input id="button" type="submit" name="submit" value="Upload Video">
        </form>
            </div>
        </div>
        </div>
    </div>  
<!---------------------video1 end------------------>
    </div>
</div>
            </td>
        </tr>
     </table>
    <!------------------------------------------------------------->
    
<?php
if($_POST['submit'])
{
    //$uquery = "select * from users";
  //  $udata = mysqli_query($conn,$uquery);
  //  $uresult = mysqli_fetch_assoc($udata);

    $uid = $result['userid'];
    $filename = $_FILES["video"]["name"];
    $temperaryname = $_FILES["video"]["tmp_name"];
    $folder = "../uploadedVideos/".$filename;
    move_uploaded_file($temperaryname,$folder);
    $vn = $_POST['videoname']; //video name
    $vd = $_POST['videodiscription'];  //video discription
    $vudate = date("l jS \of F Y h:i:s A");
    $like = 0;
    $dislike = 0;
    $subscribe = 0;
    $un = $result['firstname'];
    $up = $result['photo'];
    $em = $result['email'];
    $nadate = $result['nadate'];
    if($vn!="" && $vd!="" && $filename!="")
    {
        $query = "insert into videos values (NULL,'$uid','$folder','$vn','$vd','$vudate','$like','$dislike','$subscribe','$un','$up','$em','$nadate');";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            echo "Video Uploaded Successfully";
        }
        else
        {
            echo "Try Again : something went wrong";
        }
    }
    else
    {
        echo "all fields are required";
    }
}
?>
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
        location.replace("http://localhost/youtube/phpfiles/channel-si.php")
    }
    </script>
    </body>
</html>
