</div>
				</div>
			</div>
			<div class="col-md-3 topic--sidebar">
				<div class="topic-sidebar--widget">
					<div class="topic-list--header clearfix">
					<span class="topic-list-header--title"><i class="fas fa-search"></i> Search Character</span>
					</div>
					<div class="topic-list--content">
						<div class="topic-sidebar-widget--ad">
							<form action="characterprofile.php" method="get">
								<div class="form-group">
									<input type="search" autocomplete="off" type="text" name="name" id="src_name" class="form-control" placeholder="Search Character">
									<input type="submit" name="submitName" class="btn btn-warning btn-block" value="Search">
								</div>
							</form>
						</div>
					</div>
				</div>	
				<?php if (user_logged_in() === true): ?>
				<div class="topic-sidebar--widget">
					<div class="topic-list--header clearfix">
								<span class="topic-list-header--title"><i class="fa fa-info"></i>Account</span>
					</div>
					<div class="topic-list--content">
						<div class="panel-body">
						<form class="form" role="form" action="myaccount.php" method="get">
							
							<div class="form-group">
				
								<button type="submit" class="submitButton btn btn-primary btn-block">My Account</button>
							</div>
						</form>
									<form class="form" role="form" action="createcharacter.php" method="get">
							
							<div class="form-group">
				
								<button type="submit" class="submitButton btn btn-primary btn-block">Create character</button>
							</div>
						</form>
						<form class="form" role="form" action="changepassword.php" method="get">
							
							<div class="form-group">
				
								<button type="submit" class="submitButton btn btn-primary btn-block">Change Password</button>
							</div>
						</form>
						<form class="form" role="form" action="settings.php" method="get">
							
							<div class="form-group">
				
								<button type="submit" class="submitButton btn btn-primary btn-block">Settings</button>
							</div>
						</form>
						<form class="form" role="form" action="buypoints.php" method="get">
							
							<div class="form-group">
				
								<button type="submit" class="submitButton btn btn-success btn-block">Donate</button>
							</div>
						</form>
						<form class="form" role="form" action="shop.php" method="get">
							
							<div class="form-group">
				
								<button type="submit" class="submitButton btn btn-warning btn-block">Store</button>
							</div>
						</form>
						<form class="form" role="form" action="logout.php" method="get">
							
							<div class="form-group">
				
								<button type="submit" class="submitButton btn btn-primary btn-block">Logout</button>
							</div>
						</form>
					</div>		
					
				</div>
				</div>
				
				<?php else: ?>
				<div class="topic-sidebar--widget">
					<div class="topic-list--header clearfix">
								<span class="topic-list-header--title"><i class="fa fa-info"></i>Account</span>
					</div>
					<div class="topic-list--content">
						<div class="panel-body">
									<form class="form" role="form" action="login.php" method="post">
							<div class="form-group">
							<input type="text" name="username" id="login_username" class="form-control">
								
							</div>
							<div class="form-group">
							<input type="password" name="password" id="login_password" class="form-control">
							
							</div>
							
							<div class="form-group">
				
								<button type="submit" class="submitButton btn btn-primary btn-block">Login</button>
							</div>
						</form>
						<a href="register.php" class="btn btn-success btn-block"><font color="white">Register New Account</font></a>
					</div>		
					
				</div>
				</div>
<?php endif; ?>
<div class="topic-sidebar--widget">
	<div class="topic-list--header clearfix" style="background-color:#151515;">
		<span class="topic-list-header--title"><i class="fa fa-bar-chart"></i>Highscores</span>
	</div>
	<div class="topic-list--content">
		<div class="topic-sidebar-widget--ad" style="text-align:center">
			<?php
            $cache = new Cache('engine/cache/topPlayer');
            if ($cache->hasExpired()) {
                $players = mysql_select_multi('SELECT `name`, `level`, `experience`, `looktype`, `lookaddons`, `lookhead`, `lookbody`, `looklegs`, `lookfeet` FROM `players` WHERE `group_id` < ' . $config['highscore']['ignoreGroupId'] . ' ORDER BY `experience` DESC LIMIT 5;');
                $cache->setContent($players);
                $cache->save();
            } else {
                $players = $cache->load();
            }
            if ($players) {
            $count = 1;
            foreach($players as $player) {
            echo '<img style="margin-top: -35px; margin-left: -35px;" src="https://outfit-images-oracle.ots.me/1285_walk_animation/animoutfit.php?id='.$player['looktype'].'&addons='.$player['lookaddons'].'&head='.$player['lookhead'].'&body='.$player['lookbody'].'&legs='.$player['looklegs'].'&feet='.$player['lookfeet'].'&g=0&h=3&i=1"></img> <a href="characterprofile.php?name='.$player['name'].'" style="color:white;font-size:10px">'.$player['name'].'</a>&ensp;<strong>'. $player['level'].'</strong><br>';
           $count++;
            }
            }
            ?>
		</div>
	</div>
</div>
</div>

</div>
</div>
</div>
<br /><br />

<div id="footer">
<div class="container">
<div class="row">

<div class="col-md-5 footer-widget">

<div class="footer-about">
<h4>Support</h4>
<div class="footer-useful-links">
<ul>
<li><a href="https://discordapp.com/" target="_blank">Discord <img src="layouts\main\images\discordapp.png"></a></li>
<li><a href="https://api.whatsapp.com/send?phone=_PHONE_&text=Hello,%20we%20need%20help.&source=&data=&app_absent=" target="_blank"><b><i class="fab fa-whatsapp"></i> Whatsapp</a></b></li>
</ul>
</div>
<div class="social">
<ul>
<li><a class="wbtn" href="https://www.facebook.com/tibia/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<li><a class="wbtn" href="#"><i class="fab fa-twitter"></i></a></li>
<li><a class="wbtn" href="#"><i class="fab fa-google-plus"></i></a></li>
</ul>
</div>
</div>
</div>


<div class="col-md-5 col-sm-6 footer-widget">
<div class="footer-useful-links">
<h4>About</h4>
<ul>
<li><a href="index.php">Latest News <i class="fas fa-sync-alt"></i></a></li>
<li><a href="forum.php">Forum <i class="fa fa-forumbee" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>


<div class="col-md-2 col-sm-6 footer-widget">
<div class="footer-useful-links">
<h4>Info</h4>
<ul>
<li><a href="serverinfo.php">Server Info <i class="fa fa-file-text" aria-hidden="true"></i></a></li>
<li><a href="support.php">Support <i class="fa fa-file-text" aria-hidden="true"></i></a></li>
<li><a href="helpdesk.php" >Create Ticket <i class="fa fa-commenting" aria-hidden="true"></a></i>
</li>
</ul>
</div>
</div>

</div>
</div>
</div>


<div id="copyright">
<div class="container">
<p>Website converted by <a href="https://opengamescommunity.com"> Alex </a></p>
<br>
<p> Copyright 2022. Pictures from the web are trademarks from their respective owner.</p>
</div>
</div>


<div class="back-to-top">
<button><i class="fa fa-angle-up"></i></button>
</div>

</div>


</html>

