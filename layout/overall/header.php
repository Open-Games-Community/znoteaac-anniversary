
	
<!DOCTYPE html>
<html dir="ltr" lang="en-gb">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" type="image/x-icon" href="images/269076.ico">


<title>Global Server</title>


<link href="css/jquery-ui.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" 
   href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
   integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" 
   crossorigin="anonymous">

<link href="layouts/main/css/imageupload.css" rel="stylesheet" type="text/css" media="screen" />
<link href="layouts/main/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="layouts/main/css/forumus-style.css" rel="stylesheet">
<link href="layouts/main/css/style-color.css" rel="stylesheet" id="mainColorScheme">
<link href="layouts/main/css/custom.css" rel="stylesheet">
<link href="layouts/main/css/style.css?v11" rel="stylesheet">
<link href="layouts/main/fancybox/jquery.fancybox.css" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.gstatic.com">


<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script language="javascript" type="text/javascript">
	$(document).ready(function()	{
	$('#bbcode').markItUp(myBbcodeSettings);

	$('#emoticons a').click(function() {
	emoticon = $(this).attr("title");
	$.markItUp( { replaceWith:emoticon } );
	});
	});
</script>

<script>
	$(document).ready(function(){
		$('.fancybox-media').fancybox({
			openEffect  : 'elastic',
			closeEffect : 'elastic',
			fancybox : {
				media : {}
			}
		});
	});

</script> 

</head>
<body>

<style>
.dropdown:hover>.dropdownLayout-menu {
	display: block;
}

.blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}
	
</style>


<div class="topnav">
	<div class="wrapper">
		
		<div class="container-nav-left">
			<ul style="margin-top: 40px;" >
				<li><a  href="index.php" class="letterMenu" style="font-family:Merriweather"><i class="fa fa-home"></i> HOME</a></li>
				<li><a href="buypoints.php" class="letterMenu"><i class="fas fa-donate"></i> DONATE </a></li>
				
				<li>
					<div class="dropdown">
						<a href="#" class="letterMenu"><i class="fa fa-user"></i> ACCOUNT<i class="fas fa-caret-down"></i></a>
						<div class="dropdownLayout-menu">
															<div class="SubmenuitemLabel"><a href="login_1.php">LOGIN</a></div>
								<div class="SubmenuitemLabel"><a href="register.php">REGISTER</a></div>
														<div class="SubmenuitemLabel"><a href="downloads.php">DOWNLOADS</a></div>
														<div class="SubmenuitemLabel"><a href="helpdesk.php">CREATE TICKET</a></div>
							
																				</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="container-nav-centre" style="padding-left:35px">
			<ul>
				<li><img src="images/open_games_circle.png" width="250px"></li>
			</ul>
		</div>
		<div class="container-nav-right">
			<ul style="margin-top: 40px;">
				<li>
					<div class="dropdown">
						<a href="#" class="letterMenu"><i class="fa fa-info-circle"></i> LIBRARY <i class="fas fa-caret-down"></i></a>
						<div class="dropdownLayout-menu"> 
						<div class="SubmenuitemLabel"><a href="changelog.php">CHANGELOG</a></div>
							<div class="SubmenuitemLabel"><a href="serverinfo.php">SERVER INFO</a></div>
							<div class="SubmenuitemLabel"><a href="guilds.php">GUILDS</a></div>
							<div class="SubmenuitemLabel"><a href="powergamers.php">POWERGAMERS</a></div>
							<div class="SubmenuitemLabel"><a href="highscores.php">HIGHSCORES</a></div>
							<div class="SubmenuitemLabel"><a href="market.php">MARKET</a></div>
							<div class="SubmenuitemLabel"><a href="killers.php">TOP KILLS</a></div>
							<div class="SubmenuitemLabel"><a href="deaths.php">LATEST DEATHS</a></div>
						</div>
					</div>
				</li>
				<li>
					<div class="dropdown">
						<a href="#" class="letterMenu"><i class="fas fa-users"></i> COMMUNITY <i class="fas fa-caret-down"></i></a>
						<div class="dropdownLayout-menu">
						<div class="SubmenuitemLabel"><a href="forum.php">FORUM</a></div>
							<div class="SubmenuitemLabel"><a href="onlinelist.php">WHO IS ONLINE</a></div>
							<div class="SubmenuitemLabel"><a href="houses.php">HOUSES</a></div>
							<div class="SubmenuitemLabel"><a href="auctionchar.php">AUCTION CHAR</a></div>
							<div class="SubmenuitemLabel"><a href="topguilds.php">TOP GUILDS</a></div>
							<div class="SubmenuitemLabel"><a href="toponline.php">TOP ONLINE</a></div>
							<div class="SubmenuitemLabel"><a href="gallery.php">GALLERY</a></div>
						</div>
					</div>
				</li>
				<li>
					<div class="dropdown">
						<a href="#" class="letterMenu"><i class="far fa-calendar-check"></i> EVENTS <i class="fas fa-caret-down"></i></a>
							<div class="dropdownLayout-menu">
								<div class="SubmenuitemLabel"><a href="#">YOUR CUSTOM PAGE</a></div>
								
							</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
		
<div class="wrapper">
	<div class="wrapper">
		<div class="banner-text"></div>
		<div class="text-center">
			<h4 style="color:#D3D3D3;">Play Now!</h4>
			<a href="register.php"><button type="button" class="create-button">Create Account</button></a>
		</div><br>
	<div class="header--nav bg-bluewood" style="background-color:#151515;opacity: 80%;">
		<div class="container">
			<div class="navbar-header center">
				
			</div>
			<div id="navbar" class="navbar-collapse">
				<a href="downloads.php">
					<div class="play-button"></div>
				</a>
		
				<ul class="nav navbar-nav header-nav--primary logged-out">
												
								
				<li><a href="https://www.facebook.com/tibia" target=_blank><b><i class="fab fa-facebook-square"></i> Facebook</a></b></li>
					<li><a href="https://t.me/" target=_blank><b><i class="fab fa-telegram"></i> Telegram</a></b></li>
					<li><a href="https://www.youtube.com/results?search_query=tibia&page=&utm_source=opensearch" target="_blank"><b><i class="fab fa-youtube"></i> Youtube</a></b></li>
					<li><a href="https://discordapp.com"><b><i class="fab fa-discord"></i> Discord</a></b></li>
					<li><a href="https://api.whatsapp.com/send?phone=_PHONE_&text=Hello,%20we%20need%20help.&source=&data=&app_absent=" target="_blank"><b><i class="fab fa-whatsapp"></i> Whatsapp</a></b></li>
					<li></font><a href="onlinelist.php"><b><i class="fas fa-users"></i> <?php echo user_count_online();?></b></a></li>
				</ul>

</div>
<div class="header-nav--tab">
<div class="container">
<div class="tab-content">


</div>
</div>
</div>
</div>
</div>
<div id="topic">
<div class="container">
		<div class="row">
			<div class="col-md-9 topic--body">
				<div class="topic-list--header clearfix">
					<div class="panel-body">
						
					</div>
				</div>
				<div class="bg-body" style="background-image: url(layouts/main/images/scroll.gif);">
					<div class="topic--list">	
					
					
					
					