
<?php
include 'sessionend.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Smartsocialbook/logout</title>
    <link rel="icon" href="images/onelogo.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="css/main.min.css">
	<link rel="stylesheet" href="css/weather-icon.css">
	<link rel="stylesheet" href="css/weather-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>

<div class="theme-layout">

	<div class="responsive-header">
		<div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="newsfeed.php" title=""><img src="images/logo2.png" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search" />
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
		<nav id="menu" class="res-menu">
			<ul>
				<li><span>Home Pages</span>
					<ul>
						<li><a href="index.php" title="" Smart Book Default</a></li>
						<li><a href="pitrest.php" title="">Pitrest</a></li>
						<li><a href="redpit.php" title="">Redpit</a></li>
						<li><a href="redpit-category.php" title="">Redpit Category</a></li>
						<li><a href="soundnik.php" title="">Soundnik</a></li>
						<li><a href="soundnik-detail.php" title="">Soundnik Single</a></li>
						<li><a href="career.php" title="">Pitjob</a></li>
						<li><a href="shop.php" title="">Shop</a></li>
						<li><a href="classified.php" title="">Classified</a></li>
						<li><a href="pitpoint.php" title="">PitPoint</a></li>
						<li><a href="pittube.php" title="">Pittube</a></li>
						<li><a href="chat-messenger.php" title="">Messenger</a></li>
					</ul>
				</li>
				<li><span>Pittube</span>
					<ul>
						<li><a href="pittube.php" title="">Pittube</a></li>
						<li><a href="pittube-detail.php" title="">Pittube single</a></li>
						<li><a href="pittube-category.php" title="">Pittube Category</a></li>
						<li><a href="pittube-channel.php" title="">Pittube Channel</a></li>
						<li><a href="pittube-search-result.php" title="">Pittube Search Result</a></li>
					</ul>
				</li>
				<li><span>PitPoint</span>
					<ul>
						<li><a href="pitpoint.php" title="">PitPoint</a></li>
						<li><a href="pitpoint-detail.php" title="">Pitpoint Detail</a></li>
						<li><a href="pitpoint-list.php" title="">Pitpoint List style</a></li>
						<li><a href="pitpoint-without-baner.php" title="">Pitpoint without Banner</a></li>
						<li><a href="pitpoint-search-result.php" title="">Pitpoint Search</a></li>
					</ul>
				</li>
				<li><span>Pitjob</span>
					<ul>
						<li><a href="career.php" title="">Pitjob</a></li>
						<li><a href="career-detail.php" title="">Pitjob Detail</a></li>
						<li><a href="career-search-result.php" title="">Job seach page</a></li>
						<li><a href="social-post-detail.php" title="">Social Post Detail</a></li>
					</ul>
				</li>
				<li><span>Timeline</span>
					<ul>
						<li><a href="timeline.php" title="">Timeline</a></li>
						<li><a href="timeline-photos.php" title="">Timeline Photos</a></li>
						<li><a href="timeline-videos.php" title="">Timeline Videos</a></li>
						<li><a href="timeline-groups.php" title="">Timeline Groups</a></li>
						<li><a href="timeline-friends.php" title="">Timeline Friends</a></li>
						<li><a href="timeline-friends2.php" title="">Timeline Friends-2</a></li>
						<li><a href="about.php" title="">Timeline About</a></li>
						<li><a href="blog-posts.php" title="">Timeline Blog</a></li>
						<li><a href="friends-birthday.php" title="">Friends' Birthday</a></li>
						<li><a href="newsfeed.php" title="">Newsfeed</a></li>
						<li><a href="search-result.php" title="">Search Result</a></li>
					</ul>
				</li>
				<li><span>Favourit Page</span>
					<ul>
						<li><a href="fav-page.php" title="">Favourit Page</a></li>
						<li><a href="fav-favers.php" title="">Fav Page Likers</a></li>
						<li><a href="fav-events.php" title="">Fav Events</a></li>
						<li><a href="fav-event-invitations.php" title="">Fav Event Invitations</a></li>
						<li><a href="fav-page-create.php" title="">Create New Page</a></li>
					</ul>
				</li>
				<li><span>Forum</span>
					<ul>
						<li><a href="forum.php" title="">Forum</a></li>
						<li><a href="forum-create-topic.php" title="">Forum Create Topic</a></li>
						<li><a href="forum-open-topic.php" title="">Forum Open Topic</a></li>
						<li><a href="forums-category.php" title="">Forum Category</a></li>
					</ul>
				</li>
				<li><span>Featured</span>
					<ul>
						<li><a href="chat-messenger.php" title="">Messenger (Chatting)</a></li>
						<li><a href="notifications.php" title="">Notifications</a></li>
						<li><a href="badges.php" title="">Badges</a></li>
						<li><a href="faq.php" title="">Faq's</a></li>
						<li><a href="contribution.php" title="">Contriburion Page</a></li>
						<li><a href="manage-page.php" title="">Manage Page</a></li>
						<li><a href="weather-forecast.php" title="">weather-forecast</a></li>
						<li><a href="statistics.php" title="">Statics/Analytics</a></li>
						<li><a href="shop-cart.php" title="">Shop Cart</a></li>
					</ul>
				</li>
				<li><span>Account Setting</span>
					<ul>
						<li><a href="setting.php" title="">Setting</a></li>
						<li><a href="privacy.php" title="">Privacy</a></li>
						<li><a href="support-and-help.php" title="">Support & Help</a></li>
						<li><a href="support-and-help-detail.php" title="">Support Detail</a></li>
						<li><a href="support-and-help-search-result.php" title="">Support Search</a></li>
					</ul>
				</li>
				<li><span>Authentication</span>
					<ul>
						<li><a href="login.php" title="">Login Page</a></li>
						<li><a href="register.php" title="">Register Page</a></li>
						<li><a href="logout.php" title="">Logout Page</a></li>
						<li><a href="coming-soon.php" title="">Coming Soon</a></li>
						<li><a href="error-404.php" title="">Error 404</a></li>
						<li><a href="error-404-2.php" title="">Error 404-2</a></li>
						<li><a href="error-500.php" title="">Error 500</a></li>
					</ul>
				</li>
				<li><span>Tools</span>
					<ul>
						<li><a href="typography.php" title="">Typography</a></li>
						<li><a href="popup-modals.php" title="">Popups/Modals</a></li>
						<li><a href="post-versions.php" title="">Post Versions</a></li>
						<li><a href="widgets.php" title="">Widgets</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<nav id="shoppingbag">
			<div>
				<div class="">
					<form method="post">
						<div class="setting-row">
							<span>use night mode</span>
							<input type="checkbox" id="nightmode"/>
							<label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notifications</span>
							<input type="checkbox" id="switch2"/>
							<label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Notification sound</span>
							<input type="checkbox" id="switch3"/>
							<label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>My profile</span>
							<input type="checkbox" id="switch4"/>
							<label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show profile</span>
							<input type="checkbox" id="switch5"/>
							<label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
					<h4 class="panel-title">Account Setting</h4>
					<form method="post">
						<div class="setting-row">
							<span>Sub users</span>
							<input type="checkbox" id="switch6" />
							<label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>personal account</span>
							<input type="checkbox" id="switch7" />
							<label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Business account</span>
							<input type="checkbox" id="switch8" />
							<label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Show me online</span>
							<input type="checkbox" id="switch9" />
							<label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Delete history</span>
							<input type="checkbox" id="switch10" />
							<label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
						</div>
						<div class="setting-row">
							<span>Expose author name</span>
							<input type="checkbox" id="switch11" />
							<label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
						</div>
					</form>
				</div>
			</div>
		</nav>
	</div><!-- responsive header -->

	<div class="topbar stick">
		<div class="logo">
			<a title="" href="newsfeed.php"><img src="images/onelogo.png" alt=""> <Span style ="position:absolute;top:1rem;left:3.6rem;color:white;font-size:1.3rem;"> Smart Book </Span></a>
		</div>

		<div class="top-area">
			<div class="top-search">
				<form method="post" class="">
					<input type="text" placeholder="Search People, Pages, Groups etc">
					<button data-ripple><i class="ti-search"></i></button>
				</form>
			</div>
			<div class="page-name">
			    <span>Logout</span>
			</div>
			<ul class="setting-area">
				<li><a data-ripple="" title="Home" href="newsfeed.php"><i class="fa fa-home"></i></a></li>
				<li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i><em>EN</em></a>
					<div class="dropdowns languages">
						<div data-gutter="10" class="row">
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-lang">
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/UK.png">English(UK)
                          </a>
                        </li>
                        <li class="active">
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/US.png">English(US)
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/DE.png">Deutsch
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/NED.png">Nederlands
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/FR.png">Français
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/SP.png">Español
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/ARG.png">Español (AR)
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/IT.png">Italiano
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/PT.png">Português (PT)
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/BR.png">Português (BR)
                          </a>
                        </li>

                      </ul>
                    </div>
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-lang">
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/FIN.png">Suomi
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/SW.png">Svenska
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/DEN.png">Dansk
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/CZ.png">Čeština
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/HUN.png">Magyar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/ROM.png">Română
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/JP.png">日本語
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/CN.png">简体中文
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/PL.png">Polski
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/GR.png">Ελληνικά
                          </a>
                        </li>

                      </ul>
                    </div>
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-lang">
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/TUR.png">Türkçe
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/BUL.png">Български
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/ARB.png">العربية
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/KOR.png">한국어
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/ISR.png">עברית
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/LAT.png">Latviski
                          </a>
                        </li>
                        <li>


                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/UKR.png">Українська
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/IND.png">Bahasa Indonesia
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/MAL.png">Bahasa Malaysia
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/TAI.png">ภาษาไทย
                          </a>
                        </li>

                      </ul>
                    </div>
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-lang">
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/CRO.png">Hrvatski
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/LIT.png">Lietuvių
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/SLO.png">Slovenčina
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/SERB.png">Srpski
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/SLOVE.png">Slovenščina
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/NAM.png">Tiếng Việt
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/PHI.png">Filipino
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/ICE.png">Íslenska
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/EST.png">Eesti
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img title="Image Title" alt="Image Alternative text" src="images/flags/RU.png">Русский
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
					</div>
				</li>
				<li><a href="#" title="Help" data-ripple=""><i class="fa fa-question-circle"></i></a>
					<div class="dropdowns helps">
						<span>Quick Help</span>
						<form method="post">
							<input type="text" placeholder="How can we help you?">
						</form>
						<span>Help with this page</span>
						<ul class="help-drop">
							<li><a href="#" title=""><i class="fa fa-book"></i>Terms and Conditions</a></li>
							<li><a href="#" title=""><i class="fa fa-question-circle-o"></i>FAQs</a></li>
							<li><a href="#" title=""><i class="fa fa-building-o"></i>Carrers</a></li>
							<li><a href="#" title=""><i class="fa fa-map-marker"></i>Contact</a></li>
							<li><a href="#" title=""><i class="fa fa-pencil-square-o"></i>Privacy Policy</a></li>
							<li><a href="#" title=""><i class="fa fa-exclamation-triangle"></i>Report a Problem</a></li>
						</ul>
					</div>
				</li>
				<li><a class="text" data-ripple="" title="Privacy" href="privacy.php">Privacy & Policy</a></li>
				<li><a class="text" data-ripple="" title="Privacy" href="about.php">Contact</a></li>
				<li><a class="text" data-ripple="" title="Privacy" href="faq.php">Faq's</a></li>
				<li><a class="text" data-ripple="" title="Privacy" href="forum.php">Forum</a></li>
			</ul>
		</div>
	</div><!-- topbar -->

	<section>
		<div class="page-header">
			<div class="header-inner">
				<h2>Now You are out of Smart Book</h2>
				<p>
					Discover what's happining right now in the world.
				</p>
			</div>
			<figure><img src="images/resources/baner-forum.png" alt=""></figure>
		</div>
	</section><!-- sub header -->

	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="offset-lg-1 col-lg-10">
						<div class="row border-center">
							<div class="col-lg-6 col-md-6">
								<div class="already-log">
									<h4>Recent Login</h4>
									<p>Next Time you login click your picture. To remove an account from this page click cross.</p>
									<div class="log-user">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4">
												<div class="user-log">
													<i class="ti-close" title="Remove Account"></i>
													<a href="" title=""><img src="images/resources/author.jpg" alt="">
													<span>Adam James</span>
													</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4">
												<div class="user-log">
													<i class="ti-close" title="Remove Account"></i>
													<a href="" title=""><img src="images/resources/author2.jpg" alt="">
													<span>Emma Watson</span>
													</a>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4">
												<div class="user-add">
													<div><i class="ti-plus"></i><span>Add Account</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
							<?PHP
							
							
							?>
								<div class="logout-f">
									<h4><i class="fa fa-key"></i> Login</h4>
									<p>Login again, you have recently signout from here</p>
									<div class="logout-form">
										<form class="again-login" method="POST" action="login.php">
										<input type="text" name="username" placeholder="User Name">
										<input type="password" name="password" placeholder="Password">
										<button type="submit" name="submit">Login</button>
										</form>
										<a href="register.php" title="">Create New Signup</a>
										<p>By clicking Sign Up, you agree to our <a href="#" title="">Terms & Policy</a>. You may receive SMS notifications from us and can opt out at any time.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="sub-total">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="total">
										<i class="ti-check"></i>
										<span>Registerd Users</span>
										<em>1,01,242</em>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="total">
										<i class="ti-image"></i>
										<span>Posts published</span>
										<em>21,01,242</em>
									</div>
								</div>
								<div class="col-lg-4col-md-4 col-sm-4">
									<div class="total">
										<i class="fa fa-users"></i>
										<span>People online</span>
										<em>41,242</em>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright">© Smart Book 2020. All rights reserved.</span>
					<i><img src="images/credit-cards.png" alt=""></i>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="side-panel">
		<h4 class="panel-title">General Setting</h4>
		<form method="post">
			<div class="setting-row">
				<span>use night mode</span>
				<input type="checkbox" id="nightmode1"/>
				<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Notifications</span>
				<input type="checkbox" id="switch22" />
				<label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Notification sound</span>
				<input type="checkbox" id="switch33" />
				<label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>My profile</span>
				<input type="checkbox" id="switch44" />
				<label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Show profile</span>
				<input type="checkbox" id="switch55" />
				<label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
		<h4 class="panel-title">Account Setting</h4>
		<form method="post">
			<div class="setting-row">
				<span>Sub users</span>
				<input type="checkbox" id="switch66" />
				<label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>personal account</span>
				<input type="checkbox" id="switch77" />
				<label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Business account</span>
				<input type="checkbox" id="switch88" />
				<label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Show me online</span>
				<input type="checkbox" id="switch99" />
				<label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Delete history</span>
				<input type="checkbox" id="switch101" />
				<label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
			</div>
			<div class="setting-row">
				<span>Expose author name</span>
				<input type="checkbox" id="switch111" />
				<label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
			</div>
		</form>
	</div><!-- side panel -->

	<div class="popup-wraper6">
		<div class="popup login">
			<span class="popup-closed"><i class="ti-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i class="ti-key"></i> Login to Smart Book</h5>
				</div>
				<div class="login-frm">
					<input type="text" name="username" placeholder="User Name">
					<input type="password" name="password" placeholder="Password">
					<div class="checkbox">
					  <label>
						<input type="checkbox" checked="checked"><i class="check-box"></i>Remember Password
					  </label>
					</div>
					<button data-ripple="" type="submit" class="main-btn">Login</button>
					<a href="#" title="">Forgotten password?</a>
				</div>
			</div>
		</div>
	</div><!-- upload popup -->

	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>

</body>
</html>
