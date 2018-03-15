<?php
	session_start();
	$_SESSION['user_ID'] = 1;
	$_SESSION['username'] = "millergrnt";
	$_SESSION['email'] = "millergrnt@gmail.com";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Skitter</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
		<link rel="manifest" href="img/site.webmanifest">
		<link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body>
		<div class="container-fluid" id="mainContainer">
			<div class="container-fluid">
				<div id="blur">
					<div class="container-fluid" id="inputArea">
						<h2 id="settingsHeader">Settings</h2>
						<div id="field">
							<form action="php/settings.php" method="post" enctype="multipart/form-data">
								<p>Display Name:</p>
								<input type="text" id="displayName" placeholder="Enter Display Name" name="displayName">
								<p>Email:</p>
								<input type="text" id="email" placeholder="Enter Email Address" name="email">
								<p>Profile Pic:</p>
								<input type="file" name="fileToUpload" id="fileToUpload">
								<button type="submit" id="submitButton"><span>Submit</span></button>
								<button type="button" id="exitButton"><span>Close</span></button>
							</form>
					</div>
				</div>
			</div>
			<div class="container-fluid" id="userBanner">
				<div id="skitterData">
					<button id="getSettings" type="button">Settings</button>
				</div>
				<div id="userData">
					<div id="usernamediv">
						<h2 id="username">
							<?php
								print $_SESSION['username'];
							?>
						</h2>
						<br/>
						<h5 id="email">
							<?php
								print $_SESSION['email'];
							?>
						</h5>
					</div>
					<div id="bannerProfPic">
						<img id="userProfilePic" src="img/youre-going-to-have-a-bad-time.png" />
					</div>
				</div>
			</div>

			<div class="container-fluid" id="friendsPosts">
				<div id="about">
					<img id="skitterLogo" src="img/bird.svg" />
					<h4 id="title">Friends' Posts</h4>
				</div>
				<div id="friendPost" class="container">
					<div id="banner">
						<img id="friendProfilePic" src="img/youre-going-to-have-a-bad-time.png" />
						<h5>Steve Cook</h5>
					</div>
					<div id="content">
						<p id="postContent">
							I found this amazing chest routine. Seriously no pump ever like this before
						</p>
						<div id="postData">
							<div id="likes">
								<p id="count">5</p>
								<button type="button" id="likeButton"><img id="dataImg" src="img/like.svg" /></button>
							</div>
							<div id="comments">
								<p id="count">1</p>
								<button type="button" id="commentButton"><img id="dataImg" src="img/chat.svg" /></button>
							</div>
						</div>
					</div>
				</div>
				<div id="friendPost" class="container">
					<div id="banner">
						<img id="friendProfilePic" src="img/youre-going-to-have-a-bad-time.png" />
						<h5>Katie Nolan</h5>
					</div>
					<div id="content">
						<p id="postContent">
							Just found out that someone at 115 chicken nuggets to out score the actual Nuggets, ouch...
						</p>
						<div id="postData">
							<div id="likes">
								<p id="count">5</p>
								<button type="button" id="likeButton"><img id="dataImg" src="img/like.svg" /></button>
							</div>
							<div id="comments">
								<p id="count">1</p>
								<button type="button" id="commentButton"><img id="dataImg" src="img/chat.svg" /></button>
							</div>
						</div>
					</div>
				</div>
				<div id="friendPost" class="container">
					<div id="banner">
						<img id="friendProfilePic" src="img/youre-going-to-have-a-bad-time.png" />
						<h5>Jeff Skinner</h5>
					</div>
					<div id="content">
						<p id="postContent">
							My man Eric had a nasty one tonight, bar down baby!!!
						</p>
						<div id="postData">
							<div id="likes">
								<p id="count">5</p>
								<button type="button" id="likeButton"><img id="dataImg" src="img/like.svg" /></button>
							</div>
							<div id="comments">
								<p id="count">1</p>
								<button type="button" id="commentButton"><img id="dataImg" src="img/chat.svg" /></button>
							</div>
						</div>
					</div>
				</div>
				<div id="friendPost" class="container">
					<div id="banner">
						<img id="friendProfilePic" src="img/youre-going-to-have-a-bad-time.png" />
						<h5>Lauren Hart</h5>
					</div>
					<div id="content">
						<p id="postContent">
							Rocking crowd tn at the WFC!! Let's go Flyers!
						</p>
						<div id="postData">
							<div id="likes">
								<p id="count">5</p>
								<button type="button" id="likeButton"><img id="dataImg" src="img/like.svg" /></button>
							</div>
							<div id="comments">
								<p id="count">1</p>
								<button type="button" id="commentButton"><img id="dataImg" src="img/chat.svg" /></button>
							</div>
						</div>
					</div>
				</div>
				<div id="seeMoreButton">
					<a href="friendPosts.html"><button type="button" id="viewMoreButton">View More</button></a>
				</div>
			</div>

			<div class="container-fluid" id="userPosts">
				<div id="post" class="container-fluid">
					<div id="personalBanner">
						<div id="bannerData">
							<img id="postPic" src="img/youre-going-to-have-a-bad-time.png" />
							<p id="postusername"><strong>Grant Miller</strong></p>
						</div>
					</div>
					<div id="data">
						<p id="postContent">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consequat malesuada massa, in mattis mauris viverra a. Vestibulum vel nullam.
						</p>
						<div id="personalPostData">
							<div id="personalPostlikes">
								<p id="likeCount">5</p>
								<button type="button" id="likeButton"><img id="personalDataImg" src="img/like.svg" /></button>
							</div>
							<div id="personalPostComment">
								<p id="commentCount">1</p>
								<button type="button" id="commentButton"><img id="personalDataImg" src="img/chat.svg" /></button>
							</div>
						</div>
					</div>
				</div>

				<div id="post" class="container-fluid">
					<div id="personalBanner">
						<div id="bannerData">
							<img id="postPic" src="img/youre-going-to-have-a-bad-time.png" />
							<p id="postusername"><strong>Grant Miller</strong></p>
						</div>
					</div>
					<div id="data">
						<p id="postContent">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consequat malesuada massa, in mattis mauris viverra a. Vestibulum vel nullam.
						</p>
						<div id="personalPostData">
							<div id="personalPostlikes">
								<p id="likeCount">5</p>
								<button type="button" id="likeButton"><img id="personalDataImg" src="img/like.svg" /></button>
							</div>
							<div id="personalPostComment">
								<p id="commentCount">1</p>
								<button type="button" id="commentButton"><img id="personalDataImg" src="img/chat.svg" /></button>
							</div>
						</div>
					</div>
				</div>

				<div id="post" class="container-fluid">
					<div id="personalBanner">
						<div id="bannerData">
							<img id="postPic" src="img/youre-going-to-have-a-bad-time.png" />
							<p id="postusername"><strong>Grant Miller</strong></p>
						</div>
					</div>
					<div id="data">
						<p id="postContent">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consequat malesuada massa, in mattis mauris viverra a. Vestibulum vel nullam.
						</p>
						<div id="personalPostData">
							<div id="personalPostlikes">
								<p id="likeCount">5</p>
								<button type="button" id="likeButton"><img id="personalDataImg" src="img/like.svg" /></button>
							</div>
							<div id="personalPostComment">
								<p id="commentCount">1</p>
								<button type="button" id="commentButton"><img id="personalDataImg" src="img/chat.svg" /></button>
							</div>
						</div>
					</div>
				</div>
				<div id="credits">
					<div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
					<div>Icons made by <a href="https://www.flaticon.com/authors/pixel-buddha" title="Pixel Buddha">Pixel Buddha</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/home.js"></script>
	</body>
</html>