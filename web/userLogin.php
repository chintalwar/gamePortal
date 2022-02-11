<?php
 session_start();
 if(!isset($_SESSION['user']['name'])){
 
     ?>
      <script>
       location.replace("pages/signlog.php");
       </script>
       <?php
   }
    include_once "common/header.php";
?>
<script src="http://localhost/WEB/assets/js/jquery-1.11.1.min.js"></script>
<script src="http://localhost/WEB/assets/js/bootstrap.js"></script>
<link rel="stylesheet" href="http://localhost/web/assets/css/profile.css">
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>                                                                                         
</head>

	<!-- banner -->
	<div class="banner">
        <div class="header-top">
				<div class="container">
					<div class="header-top-info">
						<nav class="navbar navbar-default">
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav>
									<ul class="nav navbar-nav">
									    <li><a href="controller/logout.php">Logout</a></li>
									
									</ul>
								</nav>
							</div>
							
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</diV>
						</nav>
					</div>
				</div>
			
			<div class="agileits-logo">
			    <div class="profile-pic-div">
					<img src="http://localhost/web/assets/images/avtar.png" id="photo">
					<input type="file" id="file">
                    <label for="file" id="uploadBtn">Choose Photo</label>
				</div>
				<script type="text/javascript" src="http://localhost/WEB/assets/js/profile.js"></script>
                <h3 style="color: white;
                          margin-left: 78%" >Welcome <?php echo $_SESSION['user']['name'];?></h3>
						  <a href="userAccoutnSetting.php"><h5 style="margin-left: 78%;">My Account<h5></a>
			</div>
            <div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
										<div class="banner_text">
                                            <p>UPCOMING GAMES</p>
                                        </div>
										</li>
										<li>
											<div class="banner_text">
									          <p>COMING SOON</p>
										    </div>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
								<script src="http://localhost/WEB/assets/js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								 </script>
								<!--banner Slider starts Here-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
  <!--play history-->
    <div class="team" id="team">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Your Play History</h3><br><br>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="http://localhost/WEB/assets/images/p2.jpg" alt="">
                            <div class="team-caption"> 
                               <div class="w3-button">
                                    <a href="gameLeaderboard.php?img=p2.jpg&a=1">Play Now</a>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="http://localhost/WEB/assets/images/p3.jpg" alt="">
                            <div class="team-caption"> 
                                <div class="w3-button">
                                    <a href="gameLeaderboard.php?img=p3.jpg&a=2">Play Now</a>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="http://localhost/WEB/assets/images/p4.jpg" alt="">
                            <div class="team-caption"> 
                                <div class="w3-button">
                                    <a href="gameLeaderboard.php?img=p4.jpg">Play Now</a>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="http://localhost/WEB/assets/images/p5.jpg" alt="">
                            <div class="team-caption"> 
                                <div class="w3-button">
                                    <a href="gameLeaderboard.php?img=p5.jpg">Play Now</a>
								</div>
                            </div>
                        </div>
                    </div>
            </div>
        </div> 
    </div>
    <!--/play history-->
    <!-- portfolio -->
	<div class="portfolio" id="gallery">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Latest & Trending</h3> 
			</div>
			<ul class="simplefilter w3layouts agileits">
				<li class="active w3layouts agileits" data-filter="all">All</li>
				<li class="w3layouts agileits" data-filter="1">Category1</a></li>
				<li class="w3layouts agileits" data-filter="2">Category2</li>
				<li class="w3layouts agileits" data-filter="3">Category3</li>
				<li class="w3layouts agileits" data-filter="4">Category4</li>
				<li class="w3layouts agileits" data-filter="5">Category5</li>
			</ul>

			<div class="filtr-container w3layouts agileits">

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">
					<a href="http://localhost/WEB/assets/images/p1.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="http://localhost/WEB/assets/images/p1.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Games <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 5" data-sort="Luminous night">
					<a href="http://localhost/WEB/assets/images/p2.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="http://localhost/WEB/assets/images/p2.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Games <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 4" data-sort="City wonders">
					<a href="http://localhost/WEB/assets/images/p3.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="http://localhost/WEB/assets/images/p3.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Games <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3" data-sort="In production">
					<a href="http://localhost/WEB/assets/images/p4.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="http://localhost/WEB/assets/images/p4.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Games <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3, 4" data-sort="Industrial site">
					<a href="http://localhost/WEB/assets/images/p5.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="http://localhost/WEB/assets/images/p5.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Games <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Peaceful lake">
					<a href="http://localhost/WEB/assets/images/p6.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="http://localhost/WEB/assets/images/p6.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Games <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 5" data-sort="City lights">
					<a href="http://localhost/WEB/assets/images/p7.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="http://localhost/WEB/assets/images/p7.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Games <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="http://localhost/WEB/assets/images/p8.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="http://localhost/WEB/assets/images/p8.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Games <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="http://localhost/WEB/assets/images/p1.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="http://localhost/WEB/assets/images/p1.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Games <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->
     <!--popular game-->
     <div class="team" id="team">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Popular Games</h3><br><br>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="http://localhost/WEB/assets/images/p2.jpg" alt="">
                            <div class="team-caption"> 
                               <div class="w3-button">
                                    <a href="gameLeaderboard.php?img=p2.jpg">Play Now</a>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="http://localhost/WEB/assets/images/p3.jpg" alt="">
                            <div class="team-caption"> 
                                <div class="w3-button">
                                    <a href="gameLeaderboard.php?img=p3.jpg">Play Now</a>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="http://localhost/WEB/assets/images/p4.jpg" alt="">
                            <div class="team-caption"> 
                                <div class="w3-button">
                                    <a href="gameLeaderboard.php?img=p4.jpg">Play Now</a>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="http://localhost/WEB/assets/images/p5.jpg" alt="">
                            <div class="team-caption"> 
                                <div class="w3-button">
                                    <a href="gameLeaderboard.php?img=p5.jpg">Play Now</a>
								</div>
                            </div>
                        </div>
                    </div>
            </div>
        </div> 
    </div>
    <!--/popular game-->
    <!--play history-->
    <div class="team" id="team">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Games Recommended For You</h3><br><br>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="http://localhost/WEB/assets/images/p2.jpg" alt="">
                            <div class="team-caption"> 
                               <div class="w3-button">
                                    <a href="gameLeaderboard.php?img=p2.jpg">Play Now</a>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="http://localhost/WEB/assets/images/p3.jpg" alt="">
                            <div class="team-caption"> 
                                <div class="w3-button">
                                    <a href="gameLeaderboard.php?img=p3.jpg">Play Now</a>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="http://localhost/WEB/assets/images/p4.jpg" alt="">
                            <div class="team-caption"> 
                                <div class="w3-button">
                                    <a href="gameLeaderboard.php?img=p4.jpg">Play Now</a>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 agileits-team-grid">
                        <div class="team-info">
                            <img src="http://localhost/WEB/assets/images/p5.jpg" alt="">
                            <div class="team-caption"> 
                                <div class="w3-button">
                                    <a href="gameLeaderboard.php?img=p5.jpg">Play Now</a>
								</div>
                            </div>
                        </div>
                    </div>
            </div>
        </div> 
    </div>
    <!--/play history-->
	<!-- modal -->

    <script src="http://localhost/WEB/assets/js/classie.js"></script>
 
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 amet-sed"> 
					<div class="footer-title">
						<h3>About Us</h3>
					</div> 
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				</div>
				<div class="col-md-4 amet-sed amet-medium">
					<div class="footer-title">
						<h3>Terms And Condition</h3>
					</div> 
					<p><a href="#">http://example.com</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum eget placerat. </p>
					<p><a href="#">http://mail.com</a> Sed tincidunt lorem sed velit fermentum eget placerat. Lorem ipsum dolor sit, consectetur adipiscing elit. </p>
				</div>
				<div class="col-md-4 amet-sed ">
					<div class="footer-title">
						<h3>Follow Us</h3>
					</div> 
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
					<div class="support">
						<form action="#" method="post">
							<input type="email" placeholder="Enter email...." required=""> 
							<input type="submit" value="Subscribe" class="botton">
						</form> 
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer --> 
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p class="footer-class">© 2021 Kratin Solution | Design by  <a href="#" target="_blank">Suhasini Chintalwar</a> </p>
		</div>
	</div>
	<!-- //copyright -->
<?php
       include_once "common/footer.html";
?>
