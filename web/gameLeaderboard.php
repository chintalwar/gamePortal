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
<link rel="stylesheet" href="assets/css/popup.css">
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>                                                                                         
</head>
<style>
      .banner{
        background: url(http://localhost/WEB/assets/images/<?php echo $_GET['img'] ?>);
        background-size:cover;
		/* position: relative; */
      }
</style>

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
                                        <li><a href="userLogin.php">Back</a></li>
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
                          margin-left: 78%">Welcome <?php echo $_SESSION['user']['name'];?></h3>
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
										<?php
		                             	   include_once "controller/leaderBoardSetting.php";
		                                 ?>
										   <a href=<?= $url ?>><button  class="btnPlay">PLAY NOW</button></a>
										</div>
										</li>
                                    </ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<div id="popup1" class="overlay" >
		<div class="popup">
               <?php include_once "controller/FrogSetting.php"; ?>
				<form method="POST" action="">
					<h2>Frog Setting</h2>
					<a class="close" href="#" onclick="clearData()">&times;</a>
					<div class="content">
					    <div class="form-group">
                            <input type="text"  id="jumpTime" name="jumpTime" class="form-control frogSetting" placeholder="Enter Frog Jump Time..." required>
                        </div>     
                        <div class="form-group">
                            <input type="text" id="restTime" name="restTime" class="form-control frogSetting" placeholder="Enter Frog Rest Time..." required>
                        </div> 
						<div class="form-group">
                            <input type="text" id="JumpDistance" name="JumpDistance" class="form-control frogSetting" placeholder="Enter Frog Jump Distance..." required>
                        </div>
						<button type ="submit" name="submit" class="upload-button btnFrog">upload</button>
				</form>
			        </div>
		</div>
	</div>
	<script>
	function clearData(){
        document.getElementById("jumpTime").value = '';
        document.getElementById("restTime").value = '';
        document.getElementById("JumpDistance").value = '';
    }

	function a(){
		alert("ss")
		document.getElementById("popup1").style.display = "block";

	}
	</script>