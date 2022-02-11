<?php
   session_start();
   if(!isset($_SESSION['user']['name'])){

	?>
	<script>
	  location.replace("pages/signlog.php");
	  </script>
	  <?php
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="keywords" content="Games Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> 
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <link rel="stylesheet" href="assets/css/popup.css">
    </script>
    <!-- bootstrap-css -->
    <link href="http://localhost/WEB/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
      <!-- css -->
      <link rel="stylesheet" href="http://localhost/WEB/assets/css/style.css" type="text/css" media="all" />
    <!--// css -->
    <title>Document</title>
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
                            <h3>Welcome <?php echo $_SESSION['user']['name'];?> This is Admin Page</h3> 
                             
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                            <nav>
                                <ul class="nav navbar-nav">
                                    <li><a href="viewUser.php">View Users</a></li>
                                    <li><a href="controller/logout.php">Logout</a></li>
                                    <li><a href="Home.php">Home</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                        <div class="box">
                            <a class="button" href="#popup1">Upload Game</a>
                        </div>
                        <?php 
                            include_once "controller/uploadGame.php"; 
                        ?>
                        <div id="popup1" class="overlay">
                            <div class="popup">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <h2>Uplaod New Game Here</h2>
                                <a class="close" href="#" onclick="clearData()">&times;</a>
                                <div class="content">
                                    <div class="form-group">
                                        <input type="text" id ="name" name="gameName" class="form-control" placeholder="Enter Game Name...">
                                    </div>     
                                    <div class="form-group">
                                        <input type="text" id="category" name="gameCategory" class="form-control" placeholder="Enter Game Category...">
                                    </div>  
                                    <div  class="form-group">
                                        <input type="text" class="file" id="upload-name" disabled="true" placeholder="Upload Logo Here...">
                                        <button type="button" id="upload-button" class="upload-button" onclick="load('upload-button','hidden-upload')" >upload</button>
                                        <i class="fa fa-upload" aria-hidden="true">
                                        <input type="file" name= "photo" id="hidden-upload" style="display:none"/>
                                    </div>
                                    <div  class="form-group">
                                       <input type="text" class="file" id="upload-name1" disabled="true" placeholder="Upload Folder Here...">
                                       <button id="upload-button1" type="button" class="upload-button" onclick="load('upload-button1','hidden-upload1')">upload</button>
                                       <i class="fa fa-upload" aria-hidden="true">
                                       <input type="file" id="hidden-upload1" name= "file" style="display:none"/>
                                   </div>
                                   <input  type="hidden" id="id" name= "id">
                                   <a href ="admin.php"><button type ="submit" name="submit" class="upload-button">upload</button></a>
                                   </form>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br>
                        <table class="table">
                            <thead>
                                <tr>
                                <th>S.No</th>                                          
                                <th>Game Name</th>
                                <th>Game Category</th>
                                <th>Logo</th>
                                <!-- <th>File Path</th> -->
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php include_once "controller/displayGame.php"; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      
<!--Script for upload image and folder-->
<script>
    function load(input_1,file_1){
    //adds event listener to the file uploader button
document.querySelector("#"+input_1).addEventListener("click", () => {
  //clicks on the file input
  document.querySelector("#"+file_1).click();
});

//adds event listener on the hidden file input to listen for any changes
document.querySelector("#hidden-upload").addEventListener("change", (event) => {
  //gets the file name
  document.querySelector("#upload-name").value = event.target.files[0].name;
});
document.querySelector("#hidden-upload1").addEventListener("change", (event) => {
  //gets the file name
  document.querySelector("#upload-name1").value = event.target.files[0].name;
});
    }

    function setId(id,name,category){
    
        document.getElementById("id").value = id;
        document.getElementById("name").value = name;
        document.getElementById("category").value = category;
    }
    function clearData(){
        document.getElementById("id").value = '';
        document.getElementById("name").value = '';
        document.getElementById("category").value = '';
    }
</script>
</body>
</html>