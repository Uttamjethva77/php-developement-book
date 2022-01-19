<?php
session_start();

include_once('process/config.php');
if (!isset($_GET['id'])) {
	header('location: index.php');
	exit;
}
$get_blog_q = "SELECT * FROM blogs WHERE id = " . $_GET['id'];
$blog_res = mysqli_query($conn, $get_blog_q) or die(mysqli_error($conn));
$blog = mysqli_fetch_assoc($blog_res);

?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8"/>
        <link rel="apple-touch-icon" href="img/logo.jpg">
        <title>Latest Cricket News India - prediction for today's match </title>
        <link rel="apple-touch-icon" href="img/logo.jpg">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="fantasy cricket tips for today match, fantasy cricket tips and tricks, fantasy cricket team for today match, best team for dream11 today match, fantasy cricket tips in hindi, fantasy cricket tips and tricks in hindi " name="keywords">
        <meta content="Fantasy Cricket Tips. Here you will get the best Dream11 Prediction, Fantasy Cricket Tips, Dream11 Team, and Injury Update of all the fantasy cricket leagues." name="description">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="img/logo.jpg">
        <link rel="shortcut icon" href="img/logo.jpg">
        

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">


        <!-- CSS Libraries -->
        <link rel="stylesheet" href="assets/css/main.css" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="1b-comments.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}
</style>
    </head>
    
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="OOv8NQMi"></script>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        
                    </div>
                    <div class="col-md-6">
                        <div class="tb-menu">
                            <a href="http://www.wincrics.com/index.html">Home</a>
                            <a href="http://www.wincrics.com/CRICKET.html">Cricket</a>
                            <a href="http://www.wincrics.com/IPL.html">IPL</a>
                            <a href="http://www.wincrics.com/Videos.html">Videos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-6">
                        <div class="b-logo">
                            <a href="index.html">
                                <img src="img/logo.jpg" alt="LATEST CRICKET NEWS" width="287" height="220">
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Brand End -->
        
        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="index.html" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <div class="nav-item dropdown">
                                <a href="http://www.wincrics.com/CRICKET.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Cricket</a>
                                <div class="dropdown-menu">
                                    <a href="http://www.wincrics.com/CricketBettingtips/CRICKET%20BETTING%20TIPS.html" class="dropdown-item">Cricket News</a>
                                    <a href="http://www.wincrics.com/FantasySport/FantasySports.html" class="dropdown-item">Fantasy Cricket</a>
                                </div>
                            </div>
                            <a href="http://www.wincrics.com/IPL.html" class="nav-item nav-link">IPL</a>
                            <a href="http://www.wincrics.com/Videos.html" class="nav-item nav-link">Videos</a>
                        </div>
                        <div class="social ml-auto">
                            <a href="https://twitter.com/wincricks?s=09"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/wincricks.wincricks"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://linkedin.com/in/wincricks-wincricks-2aa7bb211"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/invites/contact/?i=syh842a0heyh&utm_content=lwcvsfo"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCZZlgvYbDSUbqSJyk0MQFAQ"><i class="fab fa-youtube"></i></a>
                            <a href="https://wincricks.tumblr.com"><i class="fab fa-tumblr"></i></a>
                            <a href="https://t.me/s/dream11alwayswinning"><i class="fab fa-telegram"></i></a>
                            <a href="https://www.reddit.com/u/wincrick04321?utm_medium=android_app&utm_source=share"><i class="fab fa-reddit"></i></a>
                            <a href="https://wincricks04321.blogspot.com"><i class="fab fa-blogger"></i></a>
                            <a href="https://www.pinterest.com/Wincricks/?invite_code=1e6d706eed144db59187dfcb5db79800&sender=872643002705661531"><i class="fab fa-pinterest"></i></a>
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        
        	<!-- Main -->
	<section id="main">
		<div class="inner">
			<header class="major special">
			    <h1>prediction for today's match</h1><br>
				<h2><?= $blog['title'] ?></h2>
				<hr />
			</header>
			
			<h3>Latest Cricket News India - match details</h3><?= $blog['matchdetails'] ?><br><br>
			<h5>time and date</h5><?= $blog['time'] ?><br><br>
			<div class="w3-container w3-padding-32 w3-center"> 
        <script>
(function(__htas){
var d = document,
    s = d.createElement('script'),
    l = d.scripts[d.scripts.length - 1];
s.settings = __htas || {};
s.src = "\/\/apprefaculty.pro\/aUWKZ.yDQR2\/9fk_ZYT\/9A6Ub\/2\/5FlySCWqQ\/9oNHDrICzLNnjgkz0tO\/SI0u0pM\/jdMc2NOhT-UqwpJonQBQ1ucv2Yh\/a\/bO2t5glXSvWaQG9NNXDXIFzoN\/jeko0\/O\/SN0n0jMhjuM\/2rOETfUtwm";
l.parentNode.insertBefore(s, l);
})({})
</script>
       </div>
			<h3>preview</h3><?= $blog['Preview1'] ?><br>
			<?= $blog['Preview2'] ?><br>
			<?= $blog['Preview3'] ?><br>
			<?= $blog['Preview4'] ?><br>
			<?= $blog['Preview5'] ?><br><br>
			<div class="w3-container w3-padding-32 w3-center"> 
        <script>
(function(__htas){
var d = document,
    s = d.createElement('script'),
    l = d.scripts[d.scripts.length - 1];
s.settings = __htas || {};
s.src = "\/\/apprefaculty.pro\/aUWKZ.yDQR2\/9fk_ZYT\/9A6Ub\/2\/5FlySCWqQ\/9oNHDrICzLNnjgkz0tO\/SI0u0pM\/jdMc2NOhT-UqwpJonQBQ1ucv2Yh\/a\/bO2t5glXSvWaQG9NNXDXIFzoN\/jeko0\/O\/SN0n0jMhjuM\/2rOETfUtwm";
l.parentNode.insertBefore(s, l);
})({})
</script>
       </div>
			<h3>toss prediction</h3><?= $blog['tossprediction'] ?><br><br>
			<h3>ground report</h3><?= $blog['groundreport'] ?><br><br>
			<h3>Weather report</h3><?= $blog['weatcherreport'] ?><br><br>
			<h3>Team1 :=</h3><?= $blog['team1'] ?>
			<ol><li><?= $blog['player1'] ?><br></li>
			<li><?= $blog['player2'] ?><br></li>
			<li><?= $blog['player3'] ?><br></li>
			<li><?= $blog['player4'] ?><br></li>
			<li><?= $blog['player5'] ?><br></li>
			<li><?= $blog['player6'] ?><br></li>
			<li><?= $blog['player7'] ?><br></li>
			<li><?= $blog['player8'] ?><br></li>
			<li><?= $blog['player9'] ?><br></li>
			<li><?= $blog['player10'] ?><br></li>
			<li><?= $blog['player11'] ?><br></li></ol><br>
			<div class="w3-container w3-padding-32 w3-center"> 
        <script>
(function(__htas){
var d = document,
    s = d.createElement('script'),
    l = d.scripts[d.scripts.length - 1];
s.settings = __htas || {};
s.src = "\/\/apprefaculty.pro\/aUWKZ.yDQR2\/9fk_ZYT\/9A6Ub\/2\/5FlySCWqQ\/9oNHDrICzLNnjgkz0tO\/SI0u0pM\/jdMc2NOhT-UqwpJonQBQ1ucv2Yh\/a\/bO2t5glXSvWaQG9NNXDXIFzoN\/jeko0\/O\/SN0n0jMhjuM\/2rOETfUtwm";
l.parentNode.insertBefore(s, l);
})({})
</script>
       </div>
			<h3>Team2 :=</h3><?= $blog['team2'] ?>
			<ol><li><?= $blog['player11'] ?><br></li>
			<li><?= $blog['player22'] ?><br></li>
			<li><?= $blog['player33'] ?><br></li>
			<li><?= $blog['player44'] ?><br></li>
			<li><?= $blog['player55'] ?><br></li>
			<li><?= $blog['player66'] ?><br></li>
			<li><?= $blog['player77'] ?><br></li>
			<li><?= $blog['player88'] ?><br></li>
			<li><?= $blog['player99'] ?><br></li>
			<li><?= $blog['player100'] ?><br></li>
			<li><?= $blog['player1111'] ?><br></li></ol>
			<div class="w3-container w3-padding-32 w3-center"> 
        <script>
(function(__htas){
var d = document,
    s = d.createElement('script'),
    l = d.scripts[d.scripts.length - 1];
s.settings = __htas || {};
s.src = "\/\/apprefaculty.pro\/aUWKZ.yDQR2\/9fk_ZYT\/9A6Ub\/2\/5FlySCWqQ\/9oNHDrICzLNnjgkz0tO\/SI0u0pM\/jdMc2NOhT-UqwpJonQBQ1ucv2Yh\/a\/bO2t5glXSvWaQG9NNXDXIFzoN\/jeko0\/O\/SN0n0jMhjuM\/2rOETfUtwm";
l.parentNode.insertBefore(s, l);
})({})
</script>
       </div>
			<h3>Team1 squad :=</h3><h4><?= $blog['team1 name'] ?></h4><br><br>
			<?= $blog['squad1'] ?><br><br>
			<h3>Team2 squad :=</h3><h4><?= $blog['team2 name'] ?></h4><br><br>
			<?= $blog['squad'] ?><br><br>
			<h3>captain choice :=</h3><?= $blog['captain choice'] ?><br><br>
			<h3>vice captain choice :=</h3><?= $blog['vicecaptain choice'] ?><br><br>
			<div class="w3-container w3-padding-32 w3-center"> 
        <script>
(function(__htas){
var d = document,
    s = d.createElement('script'),
    l = d.scripts[d.scripts.length - 1];
s.settings = __htas || {};
s.src = "\/\/apprefaculty.pro\/aUWKZ.yDQR2\/9fk_ZYT\/9A6Ub\/2\/5FlySCWqQ\/9oNHDrICzLNnjgkz0tO\/SI0u0pM\/jdMc2NOhT-UqwpJonQBQ1ucv2Yh\/a\/bO2t5glXSvWaQG9NNXDXIFzoN\/jeko0\/O\/SN0n0jMhjuM\/2rOETfUtwm";
l.parentNode.insertBefore(s, l);
})({})
</script>
       </div>
			<h3>Dream11 1st team Use in Head 2 Head</h3><br>
			<h5>Wicket keeper</h5><?= $blog['wk'] ?><br>
			<h5>Batsman</h5><?= $blog['bat'] ?><br>
			<h5>All rounder</h5><?= $blog['all'] ?><br>
			<h5>Bowler</h5><?= $blog['bowl'] ?><br><br>
			<div class="w3-container w3-padding-32 w3-center"> 
        <script>
(function(__htas){
var d = document,
    s = d.createElement('script'),
    l = d.scripts[d.scripts.length - 1];
s.settings = __htas || {};
s.src = "\/\/apprefaculty.pro\/aUWKZ.yDQR2\/9fk_ZYT\/9A6Ub\/2\/5FlySCWqQ\/9oNHDrICzLNnjgkz0tO\/SI0u0pM\/jdMc2NOhT-UqwpJonQBQ1ucv2Yh\/a\/bO2t5glXSvWaQG9NNXDXIFzoN\/jeko0\/O\/SN0n0jMhjuM\/2rOETfUtwm";
l.parentNode.insertBefore(s, l);
})({})
</script>
       </div>
			<h3>Dream11 team Use in small league</h3><br>
			<h5>Wicket keeper</h5><?= $blog['wk2'] ?><br>
			<h5>Batsman</h5><?= $blog['bat2'] ?><br>
			<h5>All rounder</h5><?= $blog['all2'] ?><br>
			<h5>Bowler</h5><?= $blog['bowl2'] ?><br>
			
			
			
		</div>
	</section>
	
	<div class="w3-container w3-padding-32 w3-center">
	<form action="" method="post">
	    <label><b>Name </b><br>
	    <input type="text" name="text"><br>
	    </label><br>
	    <label> <b>Give Me your Best player of this match <br>Message and get advice from experts </b><br> <textarea cols="45" rows="5" name="mes"></textarea> </label><br>
	    <input type="submit" name="post" value="post">
	</form>
	</div>
	
	
	 <!-- Main News Start-->
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        
                        <h2> Social Media Sharing </h2>

                        <div class="fb-share-button" data-href="http://www.wincrics.com/index.html" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.wincrics.com%2Findex.html&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                        <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
                        <script type="IN/Share" data-url="http://www.wincrics.com/index.html"></script>
                        <script src="https://apis.google.com/js/platform.js"></script>
                        <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="default"></div>
      
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Get in Touch</h3>
                            <div class="contact-info">
                                 <ul>
                                <li><a href="http://www.wincrics.com/contactus.html">Contact us</a></li>
                                <li><a href="http://www.wincrics.com/aboutus.html">About us</a></li
                            </ul>
                                <div class="social">
                                    <a href="https://twitter.com/wincricks?s=09"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/wincricks.wincricks"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://linkedin.com/in/wincricks-wincricks-2aa7bb211"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/invites/contact/?i=syh842a0heyh&utm_content=lwcvsfo"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UCZZlgvYbDSUbqSJyk0MQFAQ"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">CATEGORIES</h3>
                            <ul>
                                <li><a href="http://www.wincrics.com/CRICKET.html">Cricket</a></li>
                                <li><a href="http://www.wincrics.com/CricketBettingtips/CRICKET%20BETTING%20TIPS.html">Cricket News</a></li>
                                <li><a href="http://www.wincrics.com/IPL.html">IPL</a></li>
                                <li><a href="http://www.wincrics.com/Videos.html">Videos</a></li>
                                <li><a href="http://www.wincrics.com/FantasySport/FantasySports.html">Fantasy Prediction</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Current League</h3>
                            <ul>
                                <li><a href="http://www.wincrics.com/IPL.html">IPL 2021</a></li>
                                <li><a href="http://www.wincrics.com/Bigbash.html">Big Bash League</a></li>
                                <li><a href="http://www.wincrics.com/cpl.html">Carabean Premier League</a></li>
                                <li><a href="http://www.wincrics.com/ecst10.html">Ecs T10</a></li>
                            </ul>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Menu Start -->
        <div class="footer-menu">
            <div class="container">
                <div class="f-menu">
                    <a href="http://www.wincrics.com/termsofuse.html">Terms of use</a>
                    <a href="http://www.wincrics.com/privacypolicy.html">Privacy policy</a>
                    <a href="http://www.wincrics.com/contactus.html">About Us</a>
                    <a href="http://www.wincrics.com/aboutus.html">Contact Us</a>
                </div>
            </div>
        </div>
        <!-- Footer Menu End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="http://www.wincrics.com/index.html">2021</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="http://www.wincrics.com/index.html">Wincrics.com Team</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

