<?php
   include_once "common/header.php";
?>
   <link rel="stylesheet" href="assets/css/fullPageImg.css">
<link rel="stylesheet" href="assets/css/popup.css">

</head>
<body>

 <div class="bg">
     <div class="header-top">
				<div class="container">
					<div class="header-top-info">
						<nav class="navbar navbar-default">
                        
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
                         
                            <div class="agileits-title"> 
                                <h3>Users Profile</h3> 
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav>
									<ul class="nav navbar-nav">
                                        <li><a href="admin.php">Back</a></li>
                                    </ul>
								</nav>
							</div>
							<!-- /.navbar-collapse -->
                        </div>
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                <th>S.No</th>                                          
                                <th>User Type</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php include_once "controller/displayUsers.php"; ?>
                            </tbody>
                        </table>
				</div>
            </div>
        </body>
</html>

